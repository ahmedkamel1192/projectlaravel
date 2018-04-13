@extends('layouts.master')


@section('content')
<div class="container">
    <br><br>
    <h2 class="text-center">Edit Page</h2>

<form method="post" action="/update/{{$post->id}} " class="form-control">
{{csrf_field()}}
Title :- <input type="text" class="form-control" name="title" value="{{$post->title}}">
<br><br>
Description :- 
<textarea name="description" class="form-control" >{{$post->description}}</textarea>
<br>
<br>
Post Creator is {{$post->user->name}}
<select class="form-control" name="user_id" value="{{$post->user->id}}">
@foreach ($users as $user)
    <option value="{{$user->id}}">{{$user->name}}</option>
@endforeach

</select>
<br>
<br>
<input type="submit" value="update" class="btn btn-primary">
</form>
</div>
@endsection