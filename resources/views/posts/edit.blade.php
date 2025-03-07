@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Post</h1>
        <form action="{{ route('posts.update', $post) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ $post->title }}" required>
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" name="content" id="content" rows="4" required>{{ $post->content }}</textarea>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <input type="checkbox" name="status" value="1" {{ $post->status == 1 ? 'checked' : '' }}>
            </div>
            <div class="form-group">
                <label for="category_id">Category</label>
                <select name="category_id" id="category_id" class="form-control" required>
                    <option value="" disabled selected>Select Category</option>
                    @foreach($categories as $id => $name)
                        <option value="{{ $id }}" {{ $post->category_id == $id ? 'selected' : '' }}>
                            {{ $name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-success mt-3">Update Post</button>
        </form>
    </div>
@endsection
