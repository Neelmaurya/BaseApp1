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
        if ($request->validate([
            'file' => 'required|mimes:jpg,ppt,css,zip,pdf,xlx,csv,doc,png|max:8192',
        ])){
        $files = $request->file->getClientOriginalName();
        $fileSize = $request->file->getSize();
        $filepath = $request->file->getRealPath();  
        $request->file->move(public_path('storage'), $files);
        //return Storage::putFile('public_path',$request->file(upload));
        return redirect('dashboard');
        }else{
            return 'No file Selected';
        }
    }

    public function show()
    {
        $directory=storage_path('public');
        print_r($directory);
        echo "<br>";
        $dirName = array();
        $directories = Storage::disk('public')->listContents();
        print_r($directories);
        foreach ($directories as $a){
            $dirName = $a['path'];
            $dirSize = $a['size'];
            echo $dirName.$dirSize."<br>";

        }
    }

    public function distroy($dirBname)
    {
        //$filePath='storage/'.$dirBname;
        $filePath='storage/'.'7.jpg';
        if(file_exists(public_path($filePath))){
            unlink(public_path($filePath));
            return redirect('dashboard');
        }
        else{
            dd("File not Found");
        }
    }
    
    public function rename($dirName)
    {
        //$filePath='storage/'.$dirName;
        $filePath='storage/'.'Sunil Resume L.pdf';
        $newName= 'storage/'."File.pdf";
        if(file_exists($newName)){
            echo "File Renaming error";
        }
        else{
            if(rename($filePath, $newName)){
            return redirect('dashboard');
            }
            else{
                echo"File Already Exists";
            }
        }
    }
}