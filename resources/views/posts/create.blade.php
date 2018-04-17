@extends('layouts.app')


@section('content')
<div class="container">
    <br><br>
    <h2 class="text-center">Add new Post</h2>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



<form method="post" action="/posts" enctype="multipart/form-data">
{{csrf_field()}}
<input type="file" class="form-control" name="photo">
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