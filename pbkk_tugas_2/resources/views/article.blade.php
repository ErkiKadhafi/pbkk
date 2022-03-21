@extends('layouts.template')

@section('title')
    Article
@endsection

@section('container')
    <h1 class="text-center">{{ $title }}</h1>
    <hr />
    <div class="row g-4">
        @foreach ($articles as $article)
            <div class="col-6">
                <div class="p-4 rounded-3 border" style="background-color: rgba(255, 255, 255, 0.25); height: 15.5rem">
                    <a href="/article/{{ $article->slug }}" class="link-dark mb-4 d-block">
                        <h3 >
                            {{ $article->title }}
                        </h3>
                    </a>
                    <div class="">
                        
                        <span class="me-2">Category name : </span>
                        <span class="badge bg-primary " style="font-size: 1rem">
                            {{ $article->category->name }}
                        </span>
                    </div>
                    <div class="">
                        <h6>By: {{ $article->user->name }}</h6>
                        <p>{{ $article->excerpt }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
