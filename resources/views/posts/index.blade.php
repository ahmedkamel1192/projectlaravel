@extends('layouts.app')


@section('content')
<div class="container">
<h1 class="text-center">All posts</h1>
<a href="/posts/create"><button class="btn btn-info">Create new post</button></a>
<br>
<br>

<table class="table table-hover text-center">
        	<thead class="thead-dark">

        <tr>
        <th>slug</th>
            <th>Title</th>
            <th>Posted By</th>
            <th>Created At</th>
            <th>Photo</th>
            <th>Actions</th>

        </tr>
    </thead>

@foreach ($posts as $post)
<tr>
<td>{{$post->slug}}</td>
<td>{{ $post->title }}</td>
<td>{{$post->user->name}}</td>
<td>{{$post->hamada}}</td>
<td><img src="{{url('uploads/'.$post->photo)}}" style="width:50px;height:50px"></td>
<td><a href="/posts/{{$post->id}}"><button class="btn btn-success">view</button></a><a href="/posts/{{$post->id}}/edit"><button class="btn btn-warning" style="margin:10">update</button></a>
<form action="/delete/{{$post->id}}"  method="post">
{{csrf_field()}}
								 {{method_field('DELETE')}}
								  <button class="btn btn-danger" onclick="return confirm('are you sure to delete?')" type="submit">delete</button>
								</form>
</td>
</tr>
@endforeach


</ul>
</table>
{{$posts->links()}}
</div>
    
@endsection