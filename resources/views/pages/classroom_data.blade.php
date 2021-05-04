@extends('pages/app')

@section('title', 'Student') 
@yield('script')
@section('content')
<p class="text-center" style="font-size: 36px; padding-top:12px">Classroom List</p>
<script>
    $(document).ready(function() {
    $('#classroomtable').DataTable();
} );
    </script>

    <div class="text-center" style="width: 50%">
        <a class="btn btn-success" href="/classrooms/createclassroom" title="Create New Classroom"> <i class="fas fa-plus-circle"></i></a>
    </div>

<table id="classroomtable" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($classrooms as $classroom)
        <tr>
            <td>{{ $classroom['id'] }}</td>
            <td>{{ $classroom['name'] }}</td>
            <td>{{ $classroom['description'] }}</td>
            <td>
                <a href="/classrooms/editclassroom/{{ $classroom['id']}}">Edit</a>
                <a href="/classrooms/deleteclassroom/{{ $classroom['id']}}">Delete</a> 
            </td>
        </tr>
        @endforeach
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>description</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
@endsection