@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create New Category</h1>
        <form action="{{ route('category.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Name</label>
                <input type="text" class="form-control" name="name" id="name" required>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <input type="checkbox" name="status" >
            </div>
            <button type="submit" class="btn btn-success mt-3">Create Category</button>
        </form>
    </div>
@endsection
