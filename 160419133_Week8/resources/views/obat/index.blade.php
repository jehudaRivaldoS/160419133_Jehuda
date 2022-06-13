
{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <title>List obat</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head> --}}
{{-- <body> --}}
@extends('layouts.adminlteuts')
@section('content')             
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Stok</th>
        <th>Harga</th>
        <th>Nama Kategori</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($listdata as $li)
        <tr>
            <td>{{ $li->id }}</td>
            <td>{{ $li->name }}</td>
            <td>{{ $li->stok }}</td>
            <td>{{ $li->harga }}</td>
            <td>{{ $li->nama }}</td>
        </tr>    
        @endforeach      
    </tbody>
  </table>
  @endsection

{{-- </body>
</html> --}}