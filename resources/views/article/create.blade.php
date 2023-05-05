@extends('master')
@section('content')
    <div class="container">
        <h1>Article</h1>
        <p>This is the article create form</p>
        <form action="{{ url('articles') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="">Title</label>
                <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                <span class="text-danger">{{ $errors->first('title') }}</span>
            </div>
            <div class="mb-3">
                <label for="">Content</label>
                <textarea name="content" id="" rows="5" class="form-control">{{ old('content') }}</textarea>
                <span class="text-danger">{{ $errors->first('content') }}</span>
            </div>
            <button class="btn btn-success">Submit</button>
        </form>
    </div>
@endsection