@extends('pages/app')
@section('title', 'User')
@yield('script')
@section('content')
<p class="text-center" style="font-size: 36px; padding-top:12px">Login User</p><br>
<div class="text-center">
    <form action="/users/login/post" method="POST">
        <input type="email" name="email" placeholder="Email"><br><br>
        <input type="password" name="password" placeholder="Password"><br><br>
        <button type="submit">Login</button>
        @csrf
    </form>
</div>
@endsection
