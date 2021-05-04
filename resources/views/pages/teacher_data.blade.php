@extends('pages/app')

@section('title', 'Student')
@section('title', 'Student')
@yield('script')
@section('content')
<p class="text-center" style="font-size: 36px; padding-top:12px">Teacher List</p>
<script>
    $(document).ready(function () {
        $('#teachertable').DataTable();
    });

</script>
<table id="teachertable" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($teachers as $teacher)
        <tr>
            <td>{{ $teacher['id'] }}</td>
            <td>{{ $teacher['name'] }}</td>
            <td>{{ $teacher['age'] }}</td>
            <td>
                <a href="/teachers/edit/view/{{ $teacher['id'] }}">Edit</a>
                <a href="/teachers/delete/{{ $teacher['id'] }}">Delete</a>
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

<a href="/createdataview" class="btn">Create</a>

@endsection
