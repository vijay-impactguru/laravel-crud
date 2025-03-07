@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Categories</h1>
        <a href="{{ route('category.create') }}" class="btn btn-primary">Create New Category</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <?php if($category->status == 1){ ?>
                            <td>{{ "Active" }}</td>
                        <?php }else{?>
                            <td>{{"Not active" }}</td>
                        <?php } ?>
                        <td>
                            <a href="{{ route('category.edit', $category) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('category.destroy', $category) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
