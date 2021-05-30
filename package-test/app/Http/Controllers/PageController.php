<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PageController extends Controller
{
    public function upload(Request $request){
        $file = $request->file('photo');
        $newName = uniqid()."_".$file->getClientOriginalName();
//        $file->;
        $img = Image::make($file);
        $watermark = Image::make('logo.png');
        $watermark->fit(100,100);
        $img->insert($watermark,"bottom-right");

        $img->save("edited/");
        return redirect()->back();

    }
}
