@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    @component('component.breadcrumb')
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('article.index') }}">Article List</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Article Detail</li>
                    @endcomponent
                    <div class="card-header">Article Detail</div>

                    <div class="card-body">
                        <h4>{{ $article->title }}</h4>
                        <p>{{ $article->description }}</p>
                        {{ $article }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
