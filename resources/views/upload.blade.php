<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<x-app-layout>
    <x-slot name="header">
        
           <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="col-6">
  <h1>File Manager</h1>
  </div>

  <div class="col-6">
    <form class="form-inline my-2 my-lg-0" action="{{route('dashboard.uploadfile')}}" enctype="multipart/form-data" method="POST">
        @csrf
      <input name="file" id="file" class="form-control mr-sm-2" type="file">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Upload</button>
    </form>
  </div>
</nav>
       <div class="row" align="center">
<div class="col-11" align="center">
<table class="table table-stripped table-bordered" align="center">
        
        <tr><th style="width: 50%">Name</th><th style="width: 20%">Size</th><th style="width: 30%">Action</th></tr>
        <tr><td style="width: 50%">sdfDSAGfg</td><td style="width: 20%"></td><td style="width: 30%"></td></tr>
        <tr><td style="width: 50%">sdfDSAGfg</td><td style="width: 20%"></td><td style="width: 30%"></td></tr>
        <tr><td style="width: 50%">sdfDSAGfg</td><td style="width: 20%"></td><td style="width: 30%"></td></tr>
        <tr><td style="width: 50%">sdfDSAGfg</td><td style="width: 20%"></td><td style="width: 30%"></td></tr>
        <tr><td style="width: 50%">sdfDSAGf </td><td style="width: 20%"></td><td style="width: 30%"></td></tr>
        <tr><td style="width: 50%">sdfDSAGfg</td><td style="width: 20%"></td><td style="width: 30%"></td></tr>
        <tr><td style="width: 50%">sdfDSAGfg</td><td style="width: 20%"></td><td style="width: 30%"></td></tr>
        <tr><td style="width: 50%">sdfDSAGfg</td><td style="width: 20%"></td><td style="width: 30%"></td></tr>
</table>
</div>
</div>

    </x-slot>

   
</x-app-layout>
