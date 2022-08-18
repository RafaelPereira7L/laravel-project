@extends('layouts.default')

@section('title', 'User Title')

@section('sidebar')
    <div>
        <nav>User Sidebar</nav>
    </div>
@endsection

{{route('user.show', $user->id)}}

@section('content')

<h1>USER:</h1>
{{$user->name}} <br>
{{$user->email}} <br>
{{date('d-m-Y')}} <br>

@endsection
