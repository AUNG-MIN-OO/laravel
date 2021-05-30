@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                @component('component.breadcrumb')
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('article.index') }}">Article</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Add article
                </li>
                @endcomponent
                <div class="card-header">Add Article</div>

                <div class="card-body">
                    @if(session('status'))
                    <p class="alert alert-success">
                        {!! session('status') !!}
                    </p>
                    @endif
                    <form action="{{ route('article.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror">
                            @error("title")
                            <small class="font-weight-bold text-danger >{{ $message }}</small>
                            @enderror
                        </div>
                        <div class=" form-group">
                                <div class="form-row">
                                    <div class="col-12 col-md-6">
                                        <label for="file">Choose Photo</label>
                                        <input type="file" name="photo[]" multiple class="form-control p-1" id="file">
                                        @error("photo.*")
                                        <small class="font-weight-bold text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                        </div>
                        <div class=" form-group">
                            <label for="desc">Description</label>
                            <textarea type="text" name="description" id="desc" class="form-control @error('title') is-invalid @enderror" rows="5"></textarea>
                            @error("description")
                                <small class="font-weight-bold text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <button class="btn btn-primary">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection