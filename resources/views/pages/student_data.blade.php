@extends('pages/app')

@section('title', 'Student') 
@yield('script')
@section('content')
<p class="text-center" style="font-size: 36px">Student List</p>
<script>
    $(document).ready(function() {
    $('#studenttable').DataTable();
} );
    </script>
<div class="text-center" style="width: 50%">
    <a class="btn btn-success" href="/students/createstudent" title="Create New Student"> <i class="fas fa-plus-circle"></i></a>
</div>
<table id="studenttable" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $student)
        <tr>
            <td>{{ $student['id'] }}</td>
            <td>{{ $student['name'] }}</td>
            <td>{{ $student['age'] }}</td>
            <td>
                <a href="/students/editstudent/{{ $student['id']}}">Edit</a>
                <a href="/students/deletestudent/{{ $student['id']}}">Delete</a> 
            </td>
        </tr>
        @endforeach
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
@endsection

