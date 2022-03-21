@extends('layouts.template')

@section('title')
    Categories
@endsection

@section('container')
    <h1>Article Categories</h1>
    <hr />
    <div class="row">
        @foreach ($categories as $category)
            <div class="col-6 gy-3">
                <div class="py-2 px-4 rounded-3 border" style="background-color: rgba(255, 255, 255, 0.25)">
                    <a class="link-dark" href="/categories/{{ $category->slug }}">
                        <h3 class="text-capitalize">
                            {{ $category->name }}
                        </h3>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
