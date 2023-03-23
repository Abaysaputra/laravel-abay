
@extends('layouts.main')
@section('container')
<h1 class="mb-5">Post Category : {{ $category }}</h1>
<article class="mb-5">
    @foreach($posts as $post)
        <h1>
            <a href="/learn/{{ $post->slug }}">{{ $post->title }}</a>
        </h1>
        <p>{{ $post->excerpt }}</p>
    @endforeach
</article>
@endsection