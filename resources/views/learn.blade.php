
@extends('layouts.main')
@section('container')
    <article class="mb-5 border-bottom p-4">
        @foreach($posts as $post)
            <h2>
                <a class="text-decoration-none" href="/learn/{{ $post->slug }}">{{ $post->title }}</a>
            </h2>
            <p>By. <a class="text-decoration-none" href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a>|<a class="text-decoration-none" href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }}</a></p>
            <p>{{ $post->excerpt }}</p>
            <a class="text-decoration-none" href="/learn/{{ $post->slug }}">Read More...</a>
        @endforeach
    </article>
@endsection