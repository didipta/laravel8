
@extends("headerfooter")
@section("content")
<h1 style="color:blue; margin:50px;">My first laravel 8 project code </h1>
    <p style="color:blue; margin:50px;">{{$name}}</p>
    @for($i=0;$i<=10;$i++)
    <p>My name is dipta</p>
    @endfor
    @foreach($color as $value)
    <p style="color:{{$value}};">{{$value}}</p>
    @endforeach

@endsection

