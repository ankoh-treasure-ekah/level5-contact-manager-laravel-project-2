@extends('layout.app')


@section('content')


<h1 class="text-center pt-4">Contacts</h1>

<div class="container table-responsive py-5"> 
<div class="add" style="display: flex; justify-content: space-between">
    <a href="{{route('create-contact')}}" class="btn btn-primary">Add Contact</a>

    <form action="{{route('search')}}" method="POST">
        @csrf 
        <input type="text" name="name">
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>
<hr>
<table class="table table-bordered table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">firstName</th>
      <th scope="col">lastName</th>
      <th scope="col">email</th>
      <th scope="col">phone</th>
      <th scope="col">address</th>
      <th scope="col">group</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($contacts as $key => $value) 
        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$value->firstName}}</td>
            <td>{{$value->lastName}}</td>
            <td>{{$value->email}}</td>
            <td>{{$value->phone}}</td>
            <td>{{$value->address}}</td>
            <td>{{$value->group}}</td>
            <td style="display: flex; gap: 1rem">
                <a href="{{route('edit-contact', $value->id)}}" class="btn btn-primary">Edit</a>
                <form action="{{route('delete-contact',$value->id)}}" method="post">
                    @csrf       
                    @method('GET')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    
    @endforeach
  </tbody>
</table>
</div>


@stop