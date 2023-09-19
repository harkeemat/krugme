<?php

Route::get('/dashboard', function () {
	View::share(['page_name_active'=> 'admin/dashboard']);
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);

    $data['content'] = view('admin.dashboard.dashboard');
        				return view('admin.includes.main',$data ); 
})->name('dashboard');


