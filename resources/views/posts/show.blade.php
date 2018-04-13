@extends('layouts.master')


@section('content')
<div class='container'>
<h4 class=" alert-danger text-center">post info</h4>
<div class=" alert-info">
<h3 >title :{{$post->title}}</h3>
<h3 >description : {{$post->description}}</h3>
</div>

<br><br>
<br>
<h4 class=" alert-danger text-center">creator info</h4>
<div class=" alert-info">
<h3>name : {{$post->user->name}}</h3>

<h3 > Email : {{$post->user->email}}</h3>

<h3 >Created at : {{$post->created_at->toDayDateTimeString()}}</h3>
</div>


</div>



@endsection