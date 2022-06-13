
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
      <div>      
        @if (session('status'))
            <div class = "alert alert-success">
              {{ session('status') }}
            </div>
        @endif
        
        @if (session('error'))
            <div class = "alert alert-danger">
              {{ session('error') }}
            </div>
        @endif
        <table class="table table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nama</th>            
            </tr>
          </thead>
          <tbody>
              @foreach ($listdata as $li)
              <tr>
                  <td>{{ $li->id }}</td>
                  <td>{{ $li->nama }}</td>                
              </tr>    
              @endforeach      
          </tbody>
        </table>
      </div>
    @endsection
    
    {{-- </body>
    </html> --}}