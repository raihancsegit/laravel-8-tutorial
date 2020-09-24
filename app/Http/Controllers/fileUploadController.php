<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fileUploadController extends Controller
{
    public function fileupload(){
        return view('fileupload');
    }
    public function fileuploadSubmmit(Request $request){
        $request->file->store('public');
        return "File Uploded";
    }
}
