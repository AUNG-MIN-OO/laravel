@extends('layouts.app')

@section("head")
    <style>
        .article-thumbnail{
            margin-top: 10px;
            width:50px;
            height:50px;
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
                        <li class="breadcrumb-item"><a href="{{ route('article.index') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Article List</li>
                    @endcomponent
                    <div class="card-header">Article List</div>

                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="">
                                {{ $articles->links() }}
                            </div>
                            <div class="mb-3">
                                <form action="{{ route('article.search') }}" method="post">
                                    @csrf
                                    <div class="form-inline">
                                        <input type="text" name="search" class="form-control mr-2">
                                        <button class="btn btn-primary">Search</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        @if(session('status'))
                            <p class="alert alert-danger">
                                {!! session('status') !!}
                            </p>
                        @endif
                        @if(session('updateStatus'))
                            <p class="alert alert-success">
                                {!! session('updateStatus') !!}
                            </p>
                        @endif
                        <table  class="table table-hover table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Desctiption</th>
                                <th>Owner</th>
                                <th>Controls</th>
                                <th>Created_at</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($articles as $a)
                            <tr>
                                <td>{{ $a->id }}</td>
                                <td>{{ substr($a->title,0,50) }}...</td>
                                <td>
                                    {{ substr($a->description,0,100) }}...
                                    <br>
                                    @foreach($a->getPhotos as $img)
                                        <div class="article-thumbnail shadow-sm" style="background-image: url('{{ asset("storage/article/".$img->location) }}')"></div>
                                    @endforeach
                                </td>
                                <td class="text-nowrap">
                                    {{ $a->getUser->name }}
                                </td>
                                <td class="text-nowrap">
                                    <a href="{{ route('article.show',$a->id) }}" class="btn btn-primary">Detail</a>
                                    <a href="{{ route('article.edit',$a->id) }}" class="btn btn-info">Edit</a>
                                    <button type="submit" form="del" class="btn btn-danger">Delete</button>
                                    <form action="{{ route('article.destroy',$a->id) }}" id="del" method="post">
                                        @csrf
                                        @method("delete")
                                    </form>
                                </td>
                                <td>
                                    <small>
                                        {{ $a->created_at->format("d M Y") }}
                                        <br>
                                        {{ $a->created_at->format("h:i a") }}
                                    </small>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
