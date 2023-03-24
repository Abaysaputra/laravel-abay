
@extends('layouts.main')
@section('container')
    <article>
        <h2>{{ $post->title }}</h2>
        <p>By.  <a class="text-decoration-none" href="#">{{ $post->user->name }}</a>| <a href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }}</a></p>
        {!! $post->body !!} 
        {{-- {!! $post->body !!} -> esc --}}
        {{-- {{ $post->body}} -> Tidak esc--}}
    </article>
    <button class="btn btn-primary mt-5"><a href="/learn" class="d-block text-decoration-none text-light"><-Back</a></button>
@endsection