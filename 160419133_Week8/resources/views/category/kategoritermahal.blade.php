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
<body>
<h1>List Obat</h1>
<h4>Daftar obat yang tersedia</h4> --}}
@extends('layouts.adminlteuts')
@section('content')   
<div class="container">
  <h2>List Obat</h2>              
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama</th>        
        <th>Harga</th>  
        <th>Edit</th> 
        <th>Edit Modal</th> 
        <th>Delete</th>     
      </tr>
    </thead>
    <tbody>
        @foreach ($listdata as $li)
        <tr>
            <td>{{ $li->id }}</td>
            <td>{{ $li->nama }}</td>            
            <td>{{ $li->harga }}</td> 
            <td><a href="{{ url('category/'.$li->id.'/edit') }}" class = 'btn btn-xs btn-info'>Edit</a></td> 
            <td><a href = "#modalEdit" data-toggle='modal' class='btn btn-warning btn-xs' onclick="getEditForm({{ $li->id }})">Edit Modal</a></td>
            <td>
              <form method="POST" action="{{ url('category/'.$li->id) }}">
                @csrf
                @method('DELETE')  
                <input type="submit" value="delete" class="btn btn-danger btn-xs" onclick = "if(!confirm('are you sure to delete this record?')) return false;"/>
              </form>              
            </td>          
        </tr>    
        @endforeach      
    </tbody>
  </table>
</div>
@endsection
{{-- </body>
</html> --}}