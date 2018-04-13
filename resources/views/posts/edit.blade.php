@extends('layouts.master')


@section('content')

<form method="post" action="/update/{{$post->id}}">
{{csrf_field()}}
Title :- <input type="text" name="title" value="{{$post->title}}">
<br><br>
Description :- 
<textarea name="description">{{$post->description}}</textarea>
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

@endsection