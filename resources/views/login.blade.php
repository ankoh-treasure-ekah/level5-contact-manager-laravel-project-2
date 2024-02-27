@extends('layout.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/login.css') }}">

<div class="container">
    <div class="card">
      <h2>Login</h2>
      <form method="post" action="/login">
        <input type="email" id="username" name="email" placeholder="email" required>
        <input type="password" id="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
      </form>
    </div>
</div>

@stop