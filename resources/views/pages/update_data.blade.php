@extends('pages/app')

@section('content')
<div>
    <p>{{ $student['id'] }}</p>
    <p>{{ $student['name'] }}</p>
    <p>{{ $student['age'] }}</p>
</div>

{{-- <formaction="route('/updatedata')" method="post">
        <input type="text" name="name" placeholder="nama">
        <input type="text" name="age" placeholder="Umur"> 
        @csrf
        <button type="submit">submit</button> 
    </form> 
    --}}
    {{-- hmm... --}}

@endsection