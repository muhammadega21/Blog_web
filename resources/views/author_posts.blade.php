@extends('layouts.main')

@section('container')
    <h2 class="mb-5">{{ $title }}</h2>

    @foreach ($posts as $post)
        <article class="mb-5 border-bottom pb-4">
            <h2>
                <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
            </h2>
            <p>By. <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a
                    href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            </p>
            <p>{{ $post->excerpt }}</p>
            <a href="/posts/{{ $post->slug }}">Read more...</a>
        </article>
    @endforeach
@endsection
