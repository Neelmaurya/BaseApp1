<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
            'file' => 'required|mimes:pdf,xlx,csv|max:2048',
        ]);
  
        $fileName = $request->file->getClientOriginalName();
        $fileSize = $request->file->getSize();
         $filepath = $request->file->getRealPath();  
   
        $request->file->move(public_path('uploads'), $fileName);
   
        return back()
            ->with('success','You have successfully upload file.')
            ->with('file',$fileName)
            ->with('size',$fileSize);
   
    }

          public function distroy(Request $request)
    {
        if(File::exists(public_path('uploads/'))){
            File::delete(public_path('uploads/'));
              return view('dashboard');
        }else{
            return view('dashboard');
        }
    }
}
