@extends('layout.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/login.css') }}">

<div class="container">
    <div class="card">
      <h2>Register</h2>
      <form method="post" action="/register">
        <input type="text" id="username" name="firstName" placeholder="firstname" required>
        <input type="text" id="username" name="lastName" placeholder="lastname" required>
        <input type="email" id="username" name="email" placeholder="email" required>
        <input type="password" id="password" name="password" placeholder="Password" required>
        <button type="submit">Register</button>
      </form>
    </div>
</div>


@stop