@extends('layouts.master')

@section('title','TTS | Blog')

@section('navbar')
@parent
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8 mx-auto">
            @if (session()->has('success'))
                <p class="alert alert-success">{{ session('success') }}</p>
            @endif
            <h1>{{ $blog->title }}</h1>
            <img src="{{ asset('images/'.$blog->image_url) }}" width="400px" height="400px" alt="image"/>
            <p>{{ $blog->body }}</p>
            <br/>
            <div class="mb-3">
                <div class="row">
                    <div class="col-12">
                        @foreach ($comments as $comment)
                            <p class="alert alert-info">{{ $comment->comments }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <form action="{{ route('blogs.addComment',['id'=>$blog->id]) }}" method="POST">
                    @csrf
                    <label for="cmt">Comments</label>
                    <textarea name="comment" id="cmt" class="form-control" rows="3"></textarea>
                    <button type="submit" class="btn btn-primary mt-2">Add Comment</button>
                </form>
            </div>
            <a href="{{ route('blogs.edit',['id'=>$blog->id]) }}" class="btn btn-primary">Edit</a>
            <a href="{{ route('blogs.destroy',['id'=>$blog->id]) }}" class="btn btn-danger">Delete</a>

        </div>

    </div>
</div>
@endsection
