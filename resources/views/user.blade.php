{{route('user.show', $user->id)}}

<h1>USER:</h1>
{{$user->name}} <br>
{{$user->email}} <br>
{{date('d-m-Y')}} <br>

@if($user->id)
    <p>{{$user->name}}</p>
@endif

@php
    $bool = false;
@endphp


Unless
@unless($bool)
    <p>Falso</p>
@endunless

If
@if(!$bool)
    <p>Verdadeiro</p>
@endif
