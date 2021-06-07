<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
//use App\Helpers\Helpers;

class FileUploadController extends Controller
{
public function fileUpload()
    {
        return view('fileUpload');
    }
  
    
    public function fileUploadPost(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:jpg,ppt,css,zip,pdf,xlx,csv,doc,png|max:8192',
        ]);
        $files = $request->file->getClientOriginalName();
        $fileSize = $request->file->getSize();
        $filepath = $request->file->getRealPath();  
        $request->file->move(public_path('uploads'), $files);
        return back()
            ->with('file',$files)
            ->with('size',$fileSize);
    }

    public function distroy($name)
    {
        $filePath='uploads/'.$name;
        if(file_exists(public_path($filePath))){
            unlink(public_path($filePath));
            return redirect('dashboard');
        }
        else{
            dd("File not Found");
        }
    }
}