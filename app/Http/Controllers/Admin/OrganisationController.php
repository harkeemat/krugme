<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hootlex\Friendships\Models\FriendshipGroup;
use Illuminate\Support\Facades\View;
class OrganisationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
        View::share(['page_name_active'=> 'admin/organisation']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
         $data['organisation'] = FriendshipGroup::get();
         $data['content'] = view('admin.dashboard.Organisation',$data);
        return view('admin.includes.main',$data ); 
    }
}
