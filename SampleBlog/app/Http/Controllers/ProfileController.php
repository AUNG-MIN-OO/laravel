<?php

namespace App\Http\Controllers;

use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function edit(){
        return view("profile.edit");
    }

    public function update(Request $request){

        $request->validate([
            "file"=>"required|mimes:jpeg,png,jpg",
        ]);
        $file = $request->file('file');
        $newFileName = uniqid()."_profile.".$file->getClientOriginalExtension();
        $dir = "/public/profile/";
//        Storage::putFileAs($dir,$file,$newFileName);
//        $file->move("store/",$imageFileName);
        $file->storeAs($dir,$newFileName);

        $user = \App\User::find(Auth::id());
        $user->photo = $newFileName;
        $user->update();

        return redirect()->route("profile.edit");
    }
}
