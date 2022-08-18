@extends('layouts.default')

@section('sidebar')@endsection

@section('content')
<h4>Adicionar Business(model)</h4>
    <br>
    @if($errors->any())
    Erros:<br>
    @foreach($errors->all() as $error)
        {{$error}}<br>
    @endforeach
    <br>
    @endif

    <form method="POST" action="{{ route('businesses.store') }}">
        @csrf
        <input type="text" name="name" placeholder="nome" value="{{old('name')}}"/>
        @error('name')
            {{$message}}
        @enderror
        <br>
        <input type="email" name="email" placeholder="email" value="{{old('email')}}"/>
        @error('email')
            {{$message}}
        @enderror
        <br>
        <input type="text" name="address" placeholder="address" value="{{old('address')}}"/>
        <br>
        <button type="submit">Enviar</button>
    </form>

    <hr>
    @foreach($businesses as $business)
        <p>{{$business->name}}</p>
        <p>{{$business->email}}</p>
        <p>{{$business->address}}</p>
        <hr>
    @endforeach

@endsection
