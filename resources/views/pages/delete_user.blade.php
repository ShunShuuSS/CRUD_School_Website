@extends('pages/app')
@section('title', 'User') 
@yield('script')
@section('content')
<p class="text-center" style="font-size: 36px; padding-top:12px">Delete User</p><br>
<div class="text-center">
<form action="/users/deleteuser" method="POST">
    <input type="email" name="email" placeholder="Email"><br><br>
    <button type="submit">Delete</button>
    @csrf
</form>
</div>
@endsection