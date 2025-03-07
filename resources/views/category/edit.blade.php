@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Category</h1>
        <form action="{{ route('category.update', $category) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $category->name }}" required>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <input type="checkbox" name="status" value="1" {{ $category->status == 1 ? 'checked' : '' }}>
            </div>
            <button type="submit" class="btn btn-success mt-3">Update Category</button>
        </form>
    </div>
@endsection
