@extends('layouts.master')


@section('content')
<div class="container">
    <br><br>
    <h2 class="text-center">Add new Post</h2>

<form method="post" class="form-control" action="/posts">
{{csrf_field()}}
Title :- <input type="text" class="form-control" name="title">
<br><br>
Description :- 
<textarea name="description" class="form-control" ></textarea>
<br>
<br>
Post Creator
<select class="form-control" name="user_id">
@foreach ($users as $user)
    <option value="{{$user->id}}">{{$user->name}}</option>
@endforeach

</select>
<br>
<br>
<input type="submit" value="Submit" class="btn btn-primary">
</form>
</div>
@endsection