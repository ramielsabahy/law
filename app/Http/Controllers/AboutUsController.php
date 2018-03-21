<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class AboutUsController extends Controller
{
    public function index(Request $request){
    	$about = \App\AboutUs::first();
    	return view('About.about')->with('about', $about);
    }
    
    public function edit(Request $request){
    	$name = $request->name;
    	$secondname = $request->secondname;
    	$desc = $request->desc;
    	$about = \App\AboutUs::first();
    	if ($request->hasFile('image')){
            $image = $request->image;
            $image_new_name = time() . $image->getClientOriginalName();
            $image->move('uploads/about', $image_new_name);
            $about->image = 'uploads/about/'.$image_new_name;
            $about->save();
        }
        $about->title = $name;
        $about->second_title = $secondname;
        $about->details = $desc;
        $about->save();
        return redirect()->back();
    }

    public function information(Request $request){
        $information = \App\Information::first();
        return view('Information.information')->with('information', $information);
    }

    public function editInformation(Request $request){
        $address = $request->address;
        $phone = $request->phone;
        $title = $request->title;
        $fb_id = $request->fb_id;
        $tw_id = $request->tw_id;
        $google_id = $request->google_id;
        $instagram_id = $request->instagram_id;
        $linked_id = $request->linked_id;

        $info = \App\Information::first();
        $info->address = $address;
        $info->phone = $phone;
        $info->fb_id = $fb_id;
        $info->tw_id = $tw_id;
        $info->google_id = $google_id;
        $info->instagram_id = $instagram_id;
        $info->linked_id = $linked_id;
        $info->title = $title;
        $info->save();
        Session::flash('success', 'Post created successfully.');
        return redirect()->back();
    }
}
