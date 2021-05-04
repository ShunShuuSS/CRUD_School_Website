@extends('pages/app')

@section('title', 'Student')
@yield('script')
@section('content')
<p class="text-center" style="font-size: 36px; padding-top:12px">Create New Teacher</p>



<form action="/createdata" method="post">
    @csrf
    <label for="name">Name : </label>
    <input type="text" name="name" id=""><br>
    <label for="age">Age : </label>
    <input type="age" name="age" id=""><br>
    <input type="submit" value="submit" class="btn">
</form>


@endsection
