<?php

namespace App\Http\Controllers\Friendship;

use Hootlex\Friendships\Models\Friendship;
use Hootlex\Friendships\Models\FriendshipGroup;
use Hootlex\Friendships\Models\FriendshipGrouped;
use Hootlex\Friendships\Status;
use Illuminate\Database\Eloquent\Model;
use Event;
use Auth;
use DB;
use App\User;
use App\Rating;

/** 
 * Class Groupable
 * @package App\Http\Controllers\Friendship
 */
trait Groupable
{
    
//////=========== Custom Functions =========////////

    //////=========== Send Group Request =========////////
    /**
     * @param Model $friend
     * @param $groupSlug
     * @return bool
     */

   // public function getUserDetail(){


   //  $abc=  User::where('users.id',$this->id)
       //  ->join('personal_detail', 'personal_detail.users_id', '=', 'users.id')
       //  ->join('work_experience', 'work_experience.users_id', '=', 'users.id')
        // ->join('preliminary_education', 'preliminary_education.users_id', '=', 'users.id')
       // ->join('previous_experience', 'previous_experience.users_id', '=', 'users.id')
   //   ->join(DB::raw("(SELECT previous_experience.users_id,
   //    GROUP_CONCAT(previous_experience.pre_job_title) as pre_job_title,
   //    GROUP_CONCAT(previous_experience.pre_company_name) as pre_company_name,
   //    GROUP_CONCAT(previous_experience.pre_industry) as pre_industry,
   //    GROUP_CONCAT(previous_experience.pre_functional_area) as pre_functional_area,
   //    GROUP_CONCAT(previous_experience.start_pre_duration) as start_pre_duration,
   //    GROUP_CONCAT(previous_experience.end_pre_duration) as end_pre_duration,
   //    GROUP_CONCAT(previous_experience.pre_employer) as pre_employer,
   //    GROUP_CONCAT(previous_experience.pre_total_exp) as pre_total_exp,
   //    GROUP_CONCAT(previous_experience.pre_salary) as pre_salary
   //    FROM previous_experience
   //    GROUP BY previous_experience.users_id
   //    ) as previous_experience"),function($join){
   //      $join->on("previous_experience.users_id","=","users.id");
   // })

       // ->join('describe_yourself', 'describe_yourself.users_id', '=', 'users.id')
  //       ->join(DB::raw("(SELECT key_skill.users_id,
  //     GROUP_CONCAT(key_skill.key_skill) as key_skill,
  //     GROUP_CONCAT(key_skill.key_skill_experience) as key_skill_experience
  //     FROM key_skill
  //     GROUP BY key_skill.users_id
  //     ) as key_skill"),function($join){
  //       $join->on("key_skill.users_id","=","users.id");
  // })
       // ->get();



 // echo "<pre>";
 // print_r($abc);

 //   }


    public function getCityName($id){
        $string = file_get_contents(base_path().'/resources/assets/js/cities.json');
    $searchfor = '"city_code":"'.$id.'"';
    $pattern = preg_quote($searchfor,'/');
    $pattern = "/^.*$pattern.*\$/m";
        if(preg_match_all($pattern, $string, $matches)){
        
         foreach ($matches as $item) {
         foreach ($item as $key) {
        $replace = str_replace(['"', '{', '}'],"",$key);
         $helo =preg_split( '/(,|:)/', $replace);
    }}}
    return $helo[6];
   
    }

    public function getPersonalDetail(){

    return DB::table('personal_detail')->where('users_id',$this->id)->first();
    }

    public function getWorkExperience(){

    return DB::table('work_experience')->where('users_id', $this->id)->first();
    }
    
    public function getPreviousExperience(){

    return DB::table('previous_experience')->where('users_id', $this->id)->get();
    }

    public function getEducationDetail(){

    return DB::table('education_detail')->where('users_id', $this->id)->first();
    }

    public function getPreliminaryEducation(){

    return DB::table('preliminary_education')->where('users_id', $this->id)->get();
    }

    public function getDescribeYourself(){

    return DB::table('describe_yourself')->where('users_id', $this->id)->first();
    }

    public function getKeySkill(){

    return DB::table('key_skill')->where('users_id', $this->id)->get();
    }


    public function groupFriend(Model $friend, $groupSlug)
    {
        if ($friend == Auth::user()) {
           $friendship = $this->first();
        }
        else{
        $friendship = $this->findFriendship($friend)->whereStatus(Status::ACCEPTED)->first();
        }

        $group = FriendshipGroup::where('slug', $groupSlug)->first();
        if (empty($group)) return false;

        if ($friend == Auth::user()) {
                $grouped =FriendshipGrouped::firstOrCreate([
                    'friendship_id' => NULL,
                    'group_id'      =>  $group->id,
                    'friend_id'     => $friend->getKey(),
                    'friend_type'   => $friend->getMorphClass(),
                    'status_group' => Status::PENDING,
                ]);
        } 
        else{       
        $grouped = $friendship->grouped()->firstOrCreate([
            'friendship_id' => $friendship->id,
            'group_id'      =>  $group->id,
            'friend_id'     => $friend->getKey(),
            'friend_type'   => $friend->getMorphClass(),
            'status_group' => Status::PENDING,
        ]);
    }
        Event::fire('friendships.sent', [$group, $friend]);
        return $grouped->wasRecentlyCreated;

    }

      /**
     * @param Model $friend
     * @param $groupSlug
     * @return bool
     */
    public function ungroupFriend(Model $friend, $groupSlug = '')
    { 
        $group = FriendshipGroup::where('slug', $groupSlug)->first();

        $where = [
            'group_id'      => $group->id,
            'friend_id'     => $friend->getKey(),
            'friend_type'   => $friend->getMorphClass(),
        ];

        if ('' !== $groupSlug && isset($groupSlug)) {
            $where['group_id'] = $group->id;
        }

        $result = FriendshipGrouped::where($where)->delete();
        return $result;

    }
    //////=========== End Send Group Request =========////////

    //////=========== Get Group Request  =========////////
    public function getGroupRequests()
    {
        return FriendshipGrouped::whereFriend_id($this)->whereStatus_group(Status::PENDING)->get();
    }

    public function getUserRating($other)
    {  
        return Rating::whereRatingable_id($other)->get();
    }
    public function getAuthRating()
    {  
        return Rating::where('ratingable_id',$this->id)->avg('ratings.rating');
    }

    public function getGroupRating($other)
    { 
       // return Rating::whereAuthor_id($other)->get();
        return Rating::whereAuthor_id($other)
                    ->join('users', 'users.id', '=', 'ratings.ratingable_id')
                    ->get();

    }
    //////=========== End Get Group Request =========////////

    //////=========== Get Send Group Request  =========////////
   public function hasSentGroupRequestTo(Model $grouprecipient)
    {   
    return FriendshipGrouped::whereGroup_id($grouprecipient)->whereFriend_id($this)->whereStatus_group(Status::PENDING)->exists();
    }

    public function hasGroupRequestFrom(Model $grouprecipient)
    {
        return $this->findWithGroup($grouprecipient)->whereFriend_id($this)->whereStatus_group(Status::PENDING)->exists();

    }
    //////=========== Get Send Group Request  =========////////

    //////=========== Accept Group Request  =========////////
    public function acceptGroupRequest(Model $grouprecipient)
    {
        Event::fire('friendships.accepted', [$this, $grouprecipient]);
      
        return $this->findWithGroup($grouprecipient)->whereFriend_id($this)->update([
            'status_group' => Status::ACCEPTED,
        ]);
    }
    //////=========== End Accept Group Request =========////////

    //////=========== Reject Group Request =========////////

    public function denyGroupRequest(Model $grouprecipient)
    {
        Event::fire('friendships.denied', [$this, $grouprecipient]);
      
        return $this->findWithGroup($grouprecipient)->whereFriend_id($this)->update([
            'status_group' => Status::DENIED,
        ]);
    }
    //////=========== Reject Group Request =========////////

    //////=========== Check Who is the Member of Group =========////////

    public function isGroupWith(Model $grouprecipient)
    {
        return $this->findWithGroup($grouprecipient)->where('status_group', Status::ACCEPTED)->exists();
    }
    //////=========== End Check Who is the Member of Group =========////////

    public function getAcceptedGroups(Model $grouprecipient, $perPage = 0)
    {    
        return $this->getOrPaginateGroup($this->findGroups(Status::ACCEPTED,$grouprecipient)->get(), $perPage);
    }

    public function leaveGroup(Model $grouprecipient)
    {
        Event::fire('friendships.cancelled', [$this, $grouprecipient]);

        return $this->findWithGroup($grouprecipient)->delete();
    }
    public function getMemberCount(Model $grouprecipient)
    {
        $friendsCount = $this->findGroups(Status::ACCEPTED,$grouprecipient)->count();
        return $friendsCount;
    }

    public function getGroupsCount()
    {
    $friendsCount = $this->findGroupedwith(Status::ACCEPTED)->count();
       return $friendsCount;
    }

    /**

     * @param int $perPage Number

     */
    public function getGroups($perPage = 0)

    {
        return $this->getOrPaginateGroup($this->getGroupsQueryBuilder(), $perPage);
    }

    private function getGroupsQueryBuilder()
    {

        $friendships = $this->findGroupedwith(Status::ACCEPTED)->get(['friend_id', 'group_id']);
        $senders = $friendships->pluck('friend_id')->all();
        $recipients     = $friendships->pluck('group_id')->all();

        // dd(array_merge($recipients, $senders));
        // die;
       return FriendshipGroup::where('id', '!=', $this->getKey())->whereIn('id', array_merge($senders,$recipients));
    }

    private function findGroupedwith($status = null)
    {
        $query = FriendshipGrouped::where(function ($query) {
            $query->where(function ($q) {
                $q->whereFriend_id($this);
            });
        });

        //if $status is passed, add where clause
        if (!is_null($status)) {
            $query->where('status_group', $status);
        }

        return $query;
    }

    //////=========== Find With Group Relation =========////////
    private function findWithGroup(Model $grouprecipient)
    {   
        return FriendshipGrouped::betweenGroupModels($this, $grouprecipient);
    }

    private function findGroups($status = null, Model $grouprecipient)
    {

        $query = FriendshipGrouped::where(function ($query) use ($grouprecipient) {
            $query->where(function ($q) use ($grouprecipient) {
                $q->whereFriend_id($grouprecipient);
            })->orWhere(function ($q) use ($grouprecipient) {
                $q->whereGroup_id($grouprecipient);
            });
        })->orderBy('id','desc');

        // //if $status is passed, add where clause
        if (!is_null($status)) {
            $query->where('status_group', $status);
        }
        return $query;
    }
    //////=========== End Find With Group Relation =========////////

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function grouped()
    {
        return $this->morphMany(FriendshipGrouped::class, 'friend');
    }
    protected function getOrPaginateGroup($builder, $perPage)
    {       
        if ($perPage == 0) {
            return $builder->get();
        }
        return $builder->paginate($perPage);
    }

}
