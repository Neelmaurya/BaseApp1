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
  
    
    public function fileUploadPost(Request $request)
    {
        if($file = $request->file('file')){
            $name = $file->getClientOriginalName();
            $name1 = $file->getSize();
            if($file->move('images', $name)){
                $post = new Post();
                $post->file = $name;
                $post->size = $name1;
                $post->save();

                $data = DB::select('select * from posts');
                return view('/dashboard',['data'=>$data]);

            };
        }
   
    }

    public function destroy($id) {
        DB::delete('delete from posts where id = ?',[$id]);
        echo "Record deleted successfully.";
        }
}
