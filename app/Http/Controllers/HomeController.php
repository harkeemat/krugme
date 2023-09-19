<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\User;
use App\members;
use Hootlex\Friendships\Models\Friendship;
use App\qualificationModel\personal_detail;
use App\qualificationModel\key_skill;
use Illuminate\Support\Facades\Validator;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
/////////////--------------- Krug  All Members ---------------//////////////////
    public function index(){
        $id = Auth::user()->id;
        $data['content'] =User::where('id','!=', $id)->get();
        $data['content'] = view('dashboard.dashboard', $data);
        return view('includes.main',$data ); 

    }

        protected function validator(array $data)
    {

        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|',
            'file' => 'required|mimes:jpg,jpeg,png' 
            ]);
    }

    public function filter(Request $request){
        $this->validator($request->all())->validate();

            $data = $request->all();
            $file = $data['file'];
            $file_image = str_replace([' ', ':'], '-',date('Y-m-d').'-'.date("h-i-s-a")).'-' .$file->getClientoriginalName();
            $path=base_path().'/media/member/';
            $file->move($path,$file_image);

        $creatMember =  members::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'file' => $file_image
            ]);  

        return Response()->json([
                "message" => "Success"
            ]);                                                                                                                        
    }
/////////////--------------- End Krug All Members ---------------//////////////////

/////////////--------------- Add Any Friend  ---------------//////////////////
    public function friendship($id){

        $user = Auth::user();
        $recipient = user::find($id);
        $user->befriend($recipient);
        return redirect()->back();

    }
///////---------------END Add Any Friend  ---------------///////

///////--------------- Block Any Friend  ---------------///////
    public function blockFriend($id){

        $user = Auth::user();
        $friend = user::find($id);
        $user->blockFriend($friend);
        return redirect('dashboard');

    }
    public function unblockFriend($id){

        $user = Auth::user();
        $friend = user::find($id);
        $user->unblockFriend($friend);
        return redirect()->back();

    }
     public function error(){

      echo "you are not eligible to see profile";

    }

}
