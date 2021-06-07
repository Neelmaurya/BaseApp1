<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<x-app-layout>
    <x-slot name="header">
        
<div class="row container mt-12">
    <div class="col-5" align="center"><h1 class="text-3xl font-bold">File Manager</h1></div>
    <div class="col-6" align="right">
        <form action="{{ route('file.upload.post')}}" method="POST" enctype="multipart/form-data">
            @csrf
                <table><tr>
                    <td><input type="file" name="file" class="form-control px-5 py-2 font-bold rounded"></td>
                    <td><button type="submit" class="px-5 py-2 bg-green-400 border-blue-500 border text-black font-bold rounded transition duration-300 hover:bg-green-600 hover:text-white">Upload</button></td>
                    </tr>
                </table>
        </form>
    </div>
</div>

 

    </x-slot>
   <div class="mt-8 bg-white shadow-sm sm:rounded-lg p-6">
    <table class="table table-stripped table-bordered border-2 border-black" style="width: 80%;" align="center">
        <tr class="bg-black text-white">
            <th style="width: 50%; text-align: center;">File Name</th>
            <th style="width: 20%;text-align: center;">Size</th>
            <th style="width: 30%;text-align: center;">Actions</th>
       
        </tr>
        <tr class="border-2 border-black">
            @if($name = Session::get('file'))
             <td class="font-semibold pt-4 text-lg"  style="width: 45%;text-align: left;">{{$name}}</td>
            @endif
            @if($sizes = Session::get('size'))
             <td class="font-semibold pt-4 text-lg" style="width: 20%;text-align: right;">{{$sizes}}byte</td>
            @endif
             <td style="width: 30%;">
               
            <a class="px-5 py-2 inline-flex bg-gray-400 border-blue-500 border text-black font-bold rounded transition duration-300 hover:bg-blue-700 hover:no-underline hover:text-white pl-16" href="file-rename{{ $name }}">Rename</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a class="px-5 py-2 inline-flex bg-red-500 hover:no-underline border-blue-500 border text-black font-bold rounded transition duration-300 hover:bg-blue-700 hover:text-white" href='file-delete{{ $name }}'>Delete</a>
            </td>
            
            </tr>
        
    </table>
</div>
</x-app-layout>
