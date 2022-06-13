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
<div class="container">
  <h2>Tambah Kategori</h2>
  <form method="POST" action="{{route('buyers.store')}}">
    @csrf
    <div class="form-group">
      <label for="Name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Name Buyer: " name="name">
    </div>
    <div class="form-group">
      <label for="Address">Address:</label>
      <input type="text" class="form-control" id="address" placeholder="Address: " name="address">
    </div>
    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
@endsection
<!-- 
</body>
</html> -->
