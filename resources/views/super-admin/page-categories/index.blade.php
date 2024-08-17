@extends('layout.app')
@section('title', 'Page Categories')
@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <div class="mb-3">
            <h3>Page Categories List</h3>
            <a href="{{ route('page-categories.create') }}" class="btn btn-primary mb-3">Add New Page Category</a>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Page Categories</h5>
                        <h6 class="card-subtitle text-muted">List of all page categories</h6>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pageCategories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->slug }}</td>
                                    <td>
                                        <a href="{{ route('page-categories.edit', $category->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        `
                                        <form action="{{ route('page-categories.destroy', $category->id) }}" method="POST" style="display:inline;">
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
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
