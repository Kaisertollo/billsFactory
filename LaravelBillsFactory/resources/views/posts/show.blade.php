@extends('layouts.app')

@section('content')
<a href="/Post" class="btn btn-primary">Go Back</a>
<h1>{{$post->title}}</h1>
<div>
        {{$post->body}}
</div>
    <hr>
    <small>writeen on {{$post->created_at}}</small>   
@endsection