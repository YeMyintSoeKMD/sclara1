@extends('master')
@section('content')
    <div class="container py-3">
        <div class="row mt-3">
            <div class="col-6"><h1>Article</h1></div>
            <div class="col-6">
                <a href="{{ url('articles/create') }}" class="btn btn-success float-end">+ Add New</a>
            </div>
        </div>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum, fuga. Harum rem non reiciendis! Blanditiis suscipit ratione corporis consequatur molestias, officiis soluta reiciendis magni recusandae ipsa, explicabo quisquam impedit minima?</p>

        <div class="row g-2">
            @foreach($articles as $article)
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h3>{{$article->title}}</h3>
                        <p>{{$article->content}}</p>
                        <div>
                            <form action="{{url('articles/'.$article->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <a href="{{ url('articles/'.$article->id.'/edit') }}" class="btn btn-success btn-sm">Edit</a>
                                <button class="btn btn-danger btn-sm" onclick="return confirm('are you sure to delete?')">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection