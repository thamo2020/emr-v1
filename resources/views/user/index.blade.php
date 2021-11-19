@extends('layouts.main')

@section('content')

<h2>My Profile</h2>

<table border="0.5">
  @foreach ($users as $user )
      
  @endforeach
    <tr>
        <td>User Name - </td>
        <td>{{$user['username']}}</td>
        </tr>
   <tr>
    <td>First Name - </td>
    <td>{{$user['first_name']}}</td>
    </tr>
    <tr>
        <td>Last Name -</td>
        <td>{{$user['last_name']}}</td>
    </tr>
    <tr>
        <td>Email -</td>
        <td>{{$user['email']}}</td>
    </tr>
    
    <tr>
        <td>DOB -</td>
        <td>{{$user['DOB']}}</td>
    </tr>
    <tr>
        <td>Age -</td>
        <td>{{$user['age']}}</td>
    </tr>
    <tr>
        <td>Address -</td>
        <td>{{$user['address']}}</td>
    </tr>
    <tr>
        <td>Tel-No -</td>
        <td>{{$user['tel_num']}}</td>
    </tr>
    <tr>
        <td>Diseases -</td>
        <td>{{$user['diseases']}}</td>
    </tr>
    <tr>
        <td>Alergies -</td>
        <td>{{$user['alergies']}}</td>
    </tr>
    <tr>
        <td>Surgeries -</td>
        <td>{{$user['surgeries']}}</td>
    </tr>
    <tr>
        <td>Created Date -</td>
        <td>{{$user['created_at']}}</td>
    </tr>
    
   
</table>
<button type="button" class="btn btn-danger">Edit</button>

@endsection