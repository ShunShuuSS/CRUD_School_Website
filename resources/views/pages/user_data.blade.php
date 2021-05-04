@extends('pages/app')

@section('title', 'User')
@yield('script')
@section('content')
<p class="text-center" style="font-size: 36px; padding-top:12px">User List</p>
<script>
    $(document).ready(function () {
        $('#usertable').DataTable();
    });

</script>

<table id="usertable" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ $user['id'] }}</td>
            <td>{{ $user['name'] }}</td>
            <td>{{ $user['email'] }}</td>
            <td>
            </td>
        </tr>
        @endforeach
    <tfoot>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
    </tfoot>
</table>
<div class="text-center">
    <a href="/users/register">Register</a>
    <a href="/users/login">Login</a>
    <a href="/users/edit">Edit</a>
    <a href="/users/delete">Delete</a>
</div>
@endsection
