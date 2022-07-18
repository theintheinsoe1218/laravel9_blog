@extends('layouts.master')

@section('title','TTS | Blog')

@section('navbar')
@parent
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8 mx-auto">
            <h1>{{ $blog->title }}</h1>
            <img src="{{ asset('images/'.$blog->image_url) }}" width="400px" height="400px" alt="image"/>
            <p>{{ $blog->body }}</p>
            <br/>
            <a href="{{ route('blogs.edit',['id'=>$blog->id]) }}" class="btn btn-primary">Edit</a>
            <a href="{{ route('blogs.destroy',['id'=>$blog->id]) }}" class="btn btn-danger">Delete</a>

        </div>

    </div>
</div>
@endsection
