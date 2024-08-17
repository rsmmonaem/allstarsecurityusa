@extends('layout.app')

@section('title', 'Pages')

@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <div class="mb-3">
            <h3>Pages</h3>
            <a href="{{ route('pages.create') }}" class="btn btn-primary mb-3">Add New</a>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Pages List</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Category</th>
                                    <th>Additional Info</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pages as $page)
                                <tr>
                                    <td>{{ $page->id }}</td>
                                    <td>{{ $page->name }}</td>
                                    <td>{{ $page->slug }}</td>
                                    <td>{{ $page->page_category }}</td>
                                    <td>{{ $page->page_additional_info }}</td>
                                    <td>
                                        <a href="{{ route('pages.edit', $page->id) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('pages.destroy', $page->id) }}" method="POST" style="display:inline;">
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
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
