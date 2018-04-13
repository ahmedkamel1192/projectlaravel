@extends('layouts.master')


@section('content')
<h4>post info</h4>
title :
<h3>{{$post->title}}</h3>
description :
<h3>{{$post->description}}</h3>


<br><br>
<br>
<h4>creator info</h4>
name :
<h3>{{$post->user->name}}</h3>
Email :
<h3>{{$post->user->email}}</h3>
Created at :
<h3>{{$post->created_at}}</h3>







@endsection