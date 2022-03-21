@extends('layouts.template')

@section('title')
    {{ $category }}
@endsection

@section('container')
    <h1>Category: {{ $category }}</h1>
    <hr />
    <div class="row gy-3">
        @foreach ($articles as $article)
            <div class="col-6">
                <div class="p-4 rounded-3 border" style="background-color: rgba(255, 255, 255, 0.25); height: 12rem">
                    <a href="/article/{{ $article->slug }}" class="link-dark mb-4 d-block">
                        <h3>
                            {{ $article->title }}
                        </h3>
                    </a>
                    <h6>By: {{ $article->user->name }}</h6>
                    <p>{{ $article->excerpt }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
