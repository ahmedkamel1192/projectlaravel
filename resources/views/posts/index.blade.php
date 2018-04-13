@extends('layouts.master')


@section('content')
<div class="container">
<h1 class="text-center">All posts</h1>
<a href="/posts/create"><button class="btn btn-info">Create new post</button></a>
<br>
<br>

<table class="table table-hover text-center">
        	<thead class="thead-dark">

        <tr>
            <th>Title</th>
            <th>Posted By</th>
            <th>Created At</th>
            <th>Actions</th>

        </tr>
    </thead>

@foreach ($posts as $post)
<tr>

<td>{{ $post->title }}</td>
<td>{{$post->user->name}}</td>
<td>{{$post->created_at->toDayDateTimeString()}}</td>
<td><a href="/posts/{{$post->id}}"><button class="btn btn-success">view</button></a><a href="/posts/{{$post->id}}/edit"><button class="btn btn-warning" style="margin:10">update</button></a><button class="btn btn-danger" onclick="myFunction(this.value)" value="{{$post->id}}">delete</button></td>
</tr>
@endforeach


</ul>
</table>
</div>
    <script> 
    function myFunction(x) {
        var txt;
    var r = confirm('are you sure to delete this Post ?');
    if (r == true) {
        window.location.href = '/delete/'+x;
    } 
}</script>
@endsection