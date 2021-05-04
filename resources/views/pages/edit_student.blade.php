@extends('pages/app')

@section('content')

<form action="/students/editstudent/edit/{{$students['id']}}" method="POST"> 
    @csrf
     <div class="mb-3">
       <label for="name" class="form-label">Nama</label>
       <input type="text" class="form-control" name="name" placeholder="name" value="{{$students['name']}}"> 
     </div> 
     <div class="mb-3">
       <label for="age" class="form-label">Age</label>
       <input type="text" class="form-control" name="age" placeholder="age" value="{{$students['age']}}">
     </div>
     <button type="submit" class="btn btn-primary">Edit</button>
   </form>
 @endsection