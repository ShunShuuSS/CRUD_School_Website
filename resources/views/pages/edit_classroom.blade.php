@extends('pages/app')

@section('content')

<form action="/classrooms/editclassroom/edit/{{$classrooms['id']}}" method="POST"> 
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" name="name" value={{ $classrooms['name'] }}>
    </div> 
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <input type="text" class="form-control" name="description" value={{ $classrooms['description'] }}>
    </div>
    <button type="submit" class="btn btn-primary">Edit</button>
  </form>
@endsection