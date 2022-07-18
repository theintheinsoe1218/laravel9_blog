@extends('layouts.master')

@section('navbar')
@parent
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h2>Edit Blog</h2>
                </div>
                <div class="card-body">
                    @if (session()->has('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    <form action="{{ route('blogs.update',['id'=>$blog]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" value="{{ $blog->title }}" id="title" placeholder="Title" />
                            @error('title')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="body">Body</label>
                            <textarea name="body" id="body" class="form-control" placeholder="Description">{{ $blog->body }}</textarea>
                            @error('body')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="image">Image</label>
                            <input type="file" name="image" id="image" class="form-control" placeholder="Choose File" />
                            <img src="{{ asset('images/'.$blog->image_url) }}" width="200px" height="200px" alt="image"/>
                            @error('image')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-dark">Update</button>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
