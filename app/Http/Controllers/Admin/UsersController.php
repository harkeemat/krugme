<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Auth;
use App\User;

class UsersController extends Controller
{
   /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
        View::share(['page_name_active'=> 'admin/user']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {	
    	$data['users'] = User::get();
         $data['content'] = view('admin.dashboard.users',$data);
        return view('admin.includes.main',$data ); 
    }

}
