@extends('pages/app')

@section('title', 'Student')
@yield('script')
@section('content')
<p class="text-center" style="font-size: 36px; padding-top:12px">Edit Teacher</p>



<form action="/teachers/edit/edit/{{ $teacher['id'] }}" method="post">
    @csrf
    <label for="name">Name : </label>
    <input type="text" name="name" id="" value="{{ $teacher['name'] }}"><br>
    <label for="age">Age : </label>
    <input type="age" name="age" id="" value="{{ $teacher['age'] }}"><br>
    <input type="submit" value="submit" class="btn">
</form>


@endsection
