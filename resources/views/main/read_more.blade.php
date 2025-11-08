@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="py-5">
            <h1 style="color: #ffffff;">{{ $article->category ? $article->category->name : 'Uncategorized' }}</h1>
            <a class="fs-3 text-white text-decoration-none">{{$article->title}}</a>
        </div>
        <div class="d-flex justify-content-center" style="border-radius: 40px">
            <img class="rounded rounded-40 img-thumbnail w-75" src="{{ asset('images/course/' . $article->id . '.png') }}"
                alt="img">
        </div>
        <div class="p-5 d-flex flex-column gap-3">
            <span style="color: rgba(255, 255, 255, 0.8);">{{ $article->created_at->format('d M Y') }} | by: {{ $article->author ? (strstr($article->author->name, ' ', true) ?: $article->author->name) : 'Unknown' }}</span>
            <p class="fs-5" style="color: rgba(255, 255, 255, 0.9);">{!! nl2br($article->desc) !!}</p>
        </div>
    </div>
@endsection
