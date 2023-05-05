@extends('master')
@section('content')
    <div class="container">
        <h1>Article</h1>
        <p>This is the article edit form</p>
        <form action="{{ url('articles/'.$article->id) }}" method="post">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="">Title</label>
                <input type="text" name="title" class="form-control" value="{{ old('title') ?? $article->title }}">
                <span class="text-danger">{{ $errors->first('title') }}</span>
            </div>
            <div class="mb-3">
                <label for="">Content</label>
                <textarea name="content" id="" rows="5" class="form-control">{{ old('content') ?? $article->content }}</textarea>
                <span class="text-danger">{{ $errors->first('content') }}</span>
            </div>
            <button class="btn btn-success">Update</button>
        </form>
    </div>
@endsection