<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class UsersController extends Controller
{
    public function active(){
    	return view('users.active')->with('users', \App\User::where('active_status',1)->orderBy('updated_at', 'DESC')->get());
    }

    public function pending(){
    	return view('users.pending')->with('users', \App\User::where('active_status',0)->orderBy('updated_at', 'DESC')->get());
    }

    public function activateUser(Request $request, $id){
    	\App\User::where('id',$id)->update(['active_status' => 1, 'updated_at' => Carbon::now()]);
    	return redirect()->route('pending');
    }

    public function pendUser(Request $request, $id){
    	\App\User::where('id',$id)->update(['active_status' => 0, 'updated_at' => Carbon::now()]);
    	return redirect()->route('active');
    }
}
