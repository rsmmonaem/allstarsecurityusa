@extends('layout.app')

@section('title', 'Page Categories')

@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <h3>Page Categories</h3>
        <a href="{{ route('page-categories.create') }}" class="btn btn-primary mb-3">Create New Page Category</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pageCategories as $pageCategory)
                    <tr>
                        <td>{{ $pageCategory->id }}</td>
                        <td>{{ $pageCategory->name }}</td>
                        <td>{{ $pageCategory->slug }}</td>
                        <td><img src="{{ asset('storage/' . $pageCategory->image) }}" alt="{{ $pageCategory->image }}" width="100"></td>

                        <td>
                            <a href="{{ route('page-categories.edit', $pageCategory->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('page-categories.destroy', $pageCategory->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection
