@extends('layouts.app')

@section('content')
    <div class="card card-default">
        <div class="card card-header">
            Create Post
        </div>

        <div class="card-body">
            <form action="{{ route('posts.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="title">Title</label>
                    <input class="form-control" id="title" type="text" name="title">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" cols="5" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label for="contenu">Content</label>
                    <textarea class="form-control" name="contenu" id="contenu" cols="5" rows="5"></textarea>
                </div>

                <div class="form-group">
                    <label for="published_at">Published At</label>
                    <input class="form-control" id="published_at" type="text" name="published_at">
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input class="form-control" id="image" type="file" name="image">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-sm">
                        Create Post
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
