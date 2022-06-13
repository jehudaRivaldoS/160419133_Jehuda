{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <title>List Medicine</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body> --}}
@extends('layouts.adminlteuts')
@section('content')
{{-- <h1>List Obat</h1>
<h4>Daftar obat yang tersedia</h4> --}}
<div class="container">
  <h2>Obat Batuk</h2>              
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Stok</th>
        <th>Harga</th>        
      </tr>
    </thead>
    <tbody>
        @foreach ($listdata as $li)
        <tr>
            <td>{{ $li->id }}</td>
            <td>{{ $li->name }}</td>
            <td>{{ $li->stok }}</td>
            <td>{{ $li->harga }}</td>            
        </tr>    
        @endforeach      
    </tbody>
  </table>
</div>
@endsection
{{-- </body>
</html> --}}