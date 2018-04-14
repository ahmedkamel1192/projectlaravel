@extends('layouts.app')


@section('content')
<div class="container">
    <br><br>
    <h2 class="text-center">Edit Page</h2>
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

<form method="post" action="/update/{{$post->id}} " >
{{csrf_field()}}
<div>
Title :-
<br>
<input type="text" class="form-control" name="title" value="{{$post->title}}">
<br><br>
</div>
<div>
Description :- 
<textarea name="description" class="form-control" >{{$post->description}}</textarea>
<br>
<br>
</div>
Post Creator is {{$post->user->name}}
<select class="form-control" name="user_id" value="{{$post->user->id}}">
@foreach ($users as $user)
    <option value="{{$user->id}}" {{ ($user->id == $post->user->id ? "selected='selected    '" : '') }}>{{$user->name}}</option>
@endforeach

</select>
<br>
<br>
<input type="submit" value="update" class="btn btn-primary">
</form>
</div>
@endsection