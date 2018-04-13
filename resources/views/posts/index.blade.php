@extends('layouts.master')


@section('content')
<h1>Posts Index</h1>
<a href="/posts/create"><button>Create post</button></a>

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
<td>{{$post->created_at}}</td>
<td><a href="posts/{{$post->id}}"><button>view</button></a><a href="posts/{{$post->id}}/edit"><button >update</button></a><button onclick="myFunction(this.value)" value="{{$post->id}}">delete</button></td>
</tr>
@endforeach


</ul>
<table>
    <script> 
    function myFunction(x) {
        var txt;
    var r = confirm('are you sure to delete this Post ?');
    if (r == true) {
        window.location.href = '/delete/'+x;
    } 
}</script>
@endsection