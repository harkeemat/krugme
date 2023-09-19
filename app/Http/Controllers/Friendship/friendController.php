<?php

namespace App\Http\Controllers\Friendship;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Rating;
use App\message;
use Hootlex\Friendships\Status;
use Hootlex\Friendships\Models\FriendshipGroup;
use DB;
use Auth;
use App\qualificationModel\personal_detail;
use Hootlex\Friendships\Models\FriendshipGrouped;


class friendController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');  
    }
 
////////============= Received Friend Request ==========/////////
  public function index(){
      $user = Auth::user();
      $user = $user->getFriendRequests();
      $profile =[];
      foreach ($user as $key) {
       if ($key->recipient_id == Auth::User()->id) {

          $sender_id = $key->sender_id;       
          $profile[] = User::where('id', $sender_id)->get();
          
           }
         }  
      $data['sender'] = $profile;
      $data['content'] = view('dashboard.outerkrug', $data);
      return view('includes.main',$data);         
    }
////////============= END Received Friend Request ==========/////////

////////=============== Accept Friend Request =============/////////
    public function acceptrequest($id)
    {
      $user = Auth::user();
      $sender = user::find($id);
      $user->acceptFriendRequest($sender);
      return redirect()->back();
    }
////////=============== END Accept Friend Request =============/////////

////////=============== Deny Friend Request =============/////////
    public function denyrequest($id)
    {
      $user = Auth::user();
      $sender = user::find($id);
      $user->denyFriendRequest($sender);
      return redirect()->back();
    }
////////=============== END Deny Friend Request =============/////////

////////=============== My Profile =============/////////
    public function profile(){

      $user = Auth::user();
      $data['kruglist'] = $user->getFriends($perPage = 20);
      $data['content'] = view('dashboard.profile',$data);
      return view('includes.main',$data);
    }
////////=============== END My Profile =============/////////

////////=============== Friend Profile =============/////////
     public function friendprofile($id){

      if (Auth::user()->id == $id) {
        return redirect('profile');
      }
      $data = user::find($id);
      $otheruser = Auth::user();
      $data['rating'] = $otheruser->getUserRating($data);
      $data['list']= $data->getMutualFriends($otheruser);  
      $data['content'] = user::find($id);
      $data['kruglist'] = $data->getFriends($perPage = 8);
      if ($data['content']->isBlockedBy(Auth::user())) {
      return redirect('error');
      }
      else {
      $data['content'] = view('dashboard.FriendProfile', $data);
      return view('includes.main',$data);
      }
    }
////////=============== END Friend Profile =============/////////

    public function mutualFriend($id)
    {
      $user = Auth::user();
      $otheruser = user::find($id);
      $data['kruglist'] = $user->getMutualFriends($otheruser);
      $data['content'] = view('dashboard.kruglist',$data);
      return view('includes.main',$data);  
    }

////////=============== Account Setting =============/////////
    public function account_setting(){

      $data['profile']= personal_detail::where('users_id', Auth::user()->id)->get();
      $data['content'] = view('dashboard.account_setting',$data);
      return view('dashboard.profile_layout.profile_main',$data);

    }
////////=============== End Account Setting =============/////////

////////=============== My Friendlist =============/////////

    public function kruglist(){

      $user = Auth::user();
      $data['kruglist'] = $user->getFriends($perPage = 6);
      $data['content'] = view('dashboard.kruglist',$data);
      return view('includes.main',$data);    
         
    }
////////=============== End My Friendlist =============/////////

////////=============== Friends Friendlist =============/////////

    public function friend_kruglist($id){

      $user = user::find($id);
      $data['kruglist'] = $user->getFriends($perPage = 6);
      $data['content'] = view('dashboard.friend_kruglist',$data);
      return view('includes.main',$data);    
         
    }
////////=============== End friends Friendlist =============/////////

////////=============== Unfriend Any Friend =============/////////
    public function unfriend($id){

      $user = Auth::user();
      $friend = user::find($id);
      $user->unfriend($friend);
      return redirect()->back();
    }
////////=============== END Unfriend Any Friend =============/////////


/////=============== Cancel Sended Request By Auth =============/////
    public function deleteRequest($id){

      $user = Auth::user()->id;
      DB::table('friendships')->where('recipient_id', $id)->where('sender_id', $user)->delete();
      return redirect()->back();
    }

////=============== END Cancel Sendeded Request By Auth =============///

/////=============== Start Friends Chat =============/////
    public function messages(){
       $data['content'] = view('dashboard.chat');
      return view('includes.main',$data);
    }
    public function user_messages($id){
      $user = Auth::user();
      $data['user_chat'] = User::find($id);
      $data['messages'] = message::BetweenModels($user, $data['user_chat'])->get();
      $data['content'] = view('dashboard.chat',$data);
      return view('includes.main',$data);
    }
    public function send_message(Request $request, $id){
      $sender = Auth::user();
      $receipt = User::find($id);
      if ($sender->isFriendWith($receipt)) {
        $check_friendship = $sender->getFriendship($receipt);
        $friendship_id =  $check_friendship->id;
      }
     else{
        $friendship_id = '';
     }
      $insert_message =  message::create([
            'friendship_id' => $friendship_id,
            'sender_id' => $sender->getKey(),
            'sender_type' => $sender->getMorphClass(),
            'receipt_id' => $receipt->getKey(),
            'receipt_type' => $receipt->getMorphClass(),
            'message' => $request['text_message'],
            'status' => 0 
        ]);
    }

////=============== END Friends Chat =============///


/////////--------------- Krug Group ---------------/////////////

    public function showgroupregistrationform(){

      $data['content'] = view('dashboard.groups.groupRegistration');
      return view('includes.main', $data ); 

    }

    public function groupregistration(Request $request){
    
      FriendshipGroup::create([
            'admin_id' => $request['admin_id'],
           'name' => $request['name'],
          'slug' => $request['slug'],
        ]);
      return redirect()->back();
    }
    public function group(){ 

      $data['content'] = FriendshipGroup::get();
      $data['content'] = view('dashboard.groups.krugcommunities', $data);
      return view('includes.main',$data);
    }

    public function group_request(){
      $user = Auth::user();
      $user = $user->getGroupRequests();
      $profile =[];
      foreach ($user as $key) {
       if ($key->friend_id == Auth::User()->id) {

        $sender_id = $key->group_id;       
        $profile[] = FriendshipGroup::where('id', $sender_id)->get();
        
         }
       }  
      $data['sender'] = $profile;
      $data['content'] = view('dashboard.groups.group_request', $data);
      return view('includes.main',$data);
    }

    public function acceptgrouprequest($id)
    {
      $user = Auth::user();
      $sender = FriendshipGroup::find($id);
      $user->acceptGroupRequest($sender);
      return redirect()->back();
    }

    public function denygrouprequest($id)
    {
      $user = Auth::user();
      $sender = FriendshipGroup::find($id);
      $user->denyGroupRequest($sender);
      return redirect()->back();
    }

    public function group_profile($id){ 

      $data['group'] = FriendshipGroup::find($id);
      $user =  Auth::user()->getAcceptedGroups($data['group'], $perPage = 3);
      $profile =[];
      foreach ($user as $key) {
          $friend_id = $key->friend_id;       
          $profile[] = User::where('id', $friend_id)->get();
          }  
      $data['member'] = $profile;
      $data['rating'] = Auth::user()->getUserRating($data['group']);
      $data['content'] = view('dashboard.groups.group_profile',$data);
      return view('includes.main',$data);
    }

    public function getAllGroupMember($id){ 

      $data['group'] = FriendshipGroup::find($id);
      $user =  Auth::user()->getAcceptedGroups($data['group'], $perPage = 8);
      $profile =[];
      foreach ($user as $key) {
          $friend_id = $key->friend_id;       
          $profile[] = User::where('id', $friend_id)->get();
          }  
      $data['member'] = $profile;
      // $friend = User::find($friend_id);
      // $rating = $friend->getGroupRating($data['group']);
      $data['content'] = view('dashboard.groups.AllMembers',$data);
      return view('includes.main',$data);
    }

    public function addmember($id){

      $data['group'] = FriendshipGroup::find($id);  
      $user = Auth::user();
      $data['content'] = $user->getFriends();
      $data['content'] = view('dashboard.groups.addMembers', $data);
      return view('includes.main',$data ); 
    }

    public function addfriend($id,$group_id){

      $user = Auth::user();
      $friend = user::find($id);
      $group_name = FriendshipGroup::find($group_id);  
      $user->groupFriend($friend, $group_name->slug);
      return redirect()->back();
    }

    public function mutualMember($id){

      $data = FriendshipGroup::find($id);
      $user = Auth::user();
      $member =  $user->getAllFriendships($data->slug);
      $profile =[];
      foreach ($member as $key) {
          $friend_id = $key->friend_id;       
          $profile[] = User::where('id', $friend_id)->get();
          }  
      $data['content'] = $profile;
      $data['content'] = view('dashboard.groups.groupFriend', $data);
      return view('includes.main',$data ); 
      }
   
    public function ungroupmember($id,$group_id){

     $user = Auth::user();
     $friend = user::find($id);
     $group_name = FriendshipGroup::find($group_id);  
     $user->ungroupFriend($friend, $group_name->slug);
     return redirect()->back();
  
    }

    public function leaveGroup($id){

      $user = Auth::user();
      $friend = FriendshipGroup::find($id);
      $user->leaveGroup($friend);
      return redirect()->back();
    }
    public function getGroups(){

      $user = Auth::user();
      $data['groups'] = $user->getGroups();
      $data['content'] = view('dashboard.groups.user_groups', $data);
      return view('includes.main',$data ); 
    }
    public function getFriendGroups($id){

      $user = user::find($id);
      $data['groups'] = $user->getGroups();
      $data['content'] = view('dashboard.groups.user_groups', $data);
      return view('includes.main',$data ); 
    }

    public function rating($id, $rating){
      $friend = user::find($id);
      $user = Auth::user();
        $users_rating = [
            'rating' => $rating,
            'ratingable_id' =>$friend->getKey(),
            'ratingable_type' => $friend->getMorphClass(),
            'author_id' =>$user->getKey(),
            'author_type' => $user->getMorphClass(),
        ];
    $rate_employee = $this->users_rating($users_rating);

    }

    public function users_rating($users_rating){

        $profile = Rating::where('ratingable_id',$users_rating['ratingable_id'])->where('ratingable_type',$users_rating['ratingable_type'])->get();
         if($profile->isEmpty()){
            Rating::create($users_rating);
        }
        else{
           Rating::where('ratingable_id',$users_rating['ratingable_id'])->where('ratingable_type',$users_rating['ratingable_type'])->update($users_rating);
        }
    }

    public function group_rating($id, $group_rating){

      $group = FriendshipGroup::find($id);
      $user = Auth::user();
        $group_rate_by_user = [
            'rating' => $group_rating,
            'ratingable_id' =>$group->getKey(),
            'ratingable_type' => $group->getMorphClass(),
            'author_id' =>$user->getKey(),
            'author_type' => $user->getMorphClass(),
        ];

      $rate_employee = $this->group_rate_by_user($group_rate_by_user);
    }

    public function group_rate_by_user($group_rate_by_user){

        $profile = Rating::where('ratingable_id',$group_rate_by_user['ratingable_id'])->where('ratingable_type',$group_rate_by_user['ratingable_type'])->get();
         if($profile->isEmpty()){
            Rating::create($group_rate_by_user);
        }
        else{
           Rating::where('ratingable_id',$group_rate_by_user['ratingable_id'])->where('ratingable_type',$group_rate_by_user['ratingable_type'])->update($group_rate_by_user);
        }
    }

    public function group_rate_user($id, $member_id, $rating){
       $group = FriendshipGroup::find($id);
       $user = user::find($member_id);
        $company_assesment = [
            'rating' => $rating,
            'ratingable_id' =>$user->getKey(),
            'ratingable_type' => $user->getMorphClass(),
            'author_id' =>$group->getKey(),
            'author_type' => $group->getMorphClass(),
        ];

      $company_assesment = $this->company_assesment($company_assesment);
    }

    public function company_assesment($company_assesment){

        $profile = Rating::where('ratingable_id',$company_assesment['ratingable_id'])->where('ratingable_type',$company_assesment['ratingable_type'])->orWhere('author_id',$company_assesment['author_id'])->where('author_type',$company_assesment['author_type'])->get();

         if($profile->isEmpty()){
            Rating::create($company_assesment);
        }
        else{
           Rating::where('ratingable_id',$company_assesment['ratingable_id'])->where('ratingable_type',$company_assesment['ratingable_type'])->update($company_assesment);
        }
    }

////////---------------END Krug Group ---------------/////////
}
