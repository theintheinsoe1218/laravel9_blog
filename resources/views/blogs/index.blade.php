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
                @if (session()->has('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @foreach ($blogs as $blog)
                    <div class="card mt-3 mb-2">
                        <img src="{{ asset('images/'.$blog->image_url) }}" class="card-img-top" style="width: 100%; height:300px;" alt="image"/>
                        <div class="card-body">
                            <a href="{{ route('blogs.show',['id'=>$blog->id]) }}"><h2 class="card-title">{{ $blog->title }}</h2></a>
                        </div>
                    </div>
                @endforeach
                {{ $blogs->links() }}

            </div>

        </div>
    </div>
@endsection

@push('scripts')
    <script>
        console.log('This is index page');
    </script>
@endpush
