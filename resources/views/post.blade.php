
@extends('layouts.main')
@section('container')
    <article>
        <h2>{{ $post->title }}</h2>
        {!! $post->body !!} 
        {{-- {!! $post->body !!} -> esc --}}
        {{-- {{ $post->body}} -> Tidak esc--}}
    </article>
    <a href="/learn"><-Back</a>
@endsection