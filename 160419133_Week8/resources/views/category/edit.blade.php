<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body> -->
    @extends('layouts.adminlteuts')
    @section('content')  
    {{-- {{ dd($data) }} --}}
    <div class="container">
      <h2>Tambah Kategori</h2>
      <form method="POST" role="form" action="{{ url('category/'.$data->id) }}">
        @csrf
        @method("PUT")
        <div class="form-group">
          <label for="Name">Name:</label>
          <input type="text" class="form-control" id="name" placeholder="Name Category: " name="name" value="{{ $data->nama }}">
        </div>
        
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div>
    @endsection
    <!-- 
    </body>
    </html> -->
    