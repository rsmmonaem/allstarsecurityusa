@extends('layout.app')

@section('title', 'Header Menus')

@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <h3>Header Menus</h3>
        <a href="{{ route('header-menus.create') }}" class="btn btn-primary mb-3">Create New Header Menu</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Page Category</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($headerMenus as $headerMenu)
                    <tr>
                        <td>{{ $headerMenu->id }}</td>
                        <td>{{ $headerMenu->pageCategory->name }}</td>
                        <td>{{ $headerMenu->isactive }}</td>
                        <td>
                            <a href="{{ route('header-menus.edit', $headerMenu->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('header-menus.destroy', $headerMenu->id) }}" method="POST" style="display:inline;">
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
