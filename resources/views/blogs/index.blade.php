@extends('layouts.master')

@section('title','TTS | Blog')

@section('navbar')
    @parent
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">
                <h1>All Blogs</h1>
                @foreach ($blogs as $blog)
                    <div class="card mt-3">
                        <img src="{{ asset('images/'.$blog->image_url) }}" class="card-img-top" style="width: 100%; height:300px;" alt="image"/>
                        <div class="card-body">
                            <h2 class="card-title">{{ $blog->title }}</h2>
                            <p class="card-paragraph">{{ $blog->body }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
