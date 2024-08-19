@extends('layout.app')

@section('title', 'Page List')

@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <h3>Page List</h3>
        <a href="{{ route('pages.create') }}" class="btn btn-primary mb-3">Create New Page</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>SEO ID</th>
                    <th>Category</th>
                    <th>Parent Category</th>
                    <th>Child Page</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pages as $page)
                    <tr>
                        <td>{{ $page->id }}</td>
                        <td>{{ $page->name }}</td>
                        <td>{{ $page->slug }}</td>
                        <td>{{ $page->seo_id }}</td>
                        <td>{{ $page->page_category_id ? $page->page_category_id : 'N/A' }}</td>
                        <td>{{ $page->parent_category_id ? $page->parent_category_id : 'N/A' }}</td>
                        <td>{{ $page->child_page_id ? $page->child_page_id : 'N/A' }}</td>
                        <td>
                            <a href="{{ route('pages.edit', $page->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('pages.destroy', $page->id) }}" method="POST" style="display:inline;">
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
