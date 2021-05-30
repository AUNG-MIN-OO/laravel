@extends('layouts.app')

@section("head")
    <style>
        .article-thumbnail{
            margin-top: 10px;
            width:200px;
            height:200px;
            display: inline-block;
            border-radius: 0.25rem;
            background-size: cover;
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    @component('component.breadcrumb')
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('article.index') }}">Article</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Update article</li>
                    @endcomponent
                    <div class="card-header">Update Article</div>

                    <div class="card-body">
                        <form action="{{ route('article.update',$article->id) }}" id="article-form" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" value="{{ $article->title }}" name="title" id="title" class="form-control @error('title') is-invalid @enderror">
                                @error("title")
                                <small class="font-weight-bold text-danger >{{ $message }}</small>
                                @enderror
                                    </div>
                                    <div class="form-group">
                                <label for="desc">Description</label>
                                <textarea type="text" name="description" id="desc" class="form-control @error('title') is-invalid @enderror" rows="5">{{ $article->description }}</textarea>
                                @error("description")
                                <small class="font-weight-bold text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <button class="btn btn-primary" form="article-form">Update</button>
                            <hr>

                        </form>
                        @foreach($article->getPhotos as $img)
                            <div class="d-inline-block">
                                <div class="article-thumbnail shadow-sm" style="background-image: url('{{ asset("storage/article/".$img->location) }}')"></div>
                                <form action="{{ route("photo.destroy",$img->id) }}" method="post">
                                    @csrf
                                    @method("delete")
                                    <button class="btn btn-danger btn-sm" style="margin-top: -408px;margin-right: 100px">Delete</button>
                                </form>
                            </div>
                        @endforeach
                        <form action="{{ route("photo.store") }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="article_id" value="{{ $article->id }}">
                            <div class="form-row">
                                <div class="col-6">
                                    <input type="file" name="photo[]" multiple class="form-control p-1" id="file" required>
                                    @error("photo.*")
                                    <small class="font-weight-bold text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <button class="btn btn-primary">Upload New Photo</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
