
@extends('layouts.main')
@section('container')
    <article>
        <h2>{{ $post->title }}</h2>
        <p>By. abay saputra in <a href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }}</a></p>
        {!! $post->body !!} 
        {{-- {!! $post->body !!} -> esc --}}
        {{-- {{ $post->body}} -> Tidak esc--}}
    </article>
    <a href="/learn"><-Back</a>
@endsection