@extends('layout.app')

@section('title', 'SEO Pages')

@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <h3>SEO Pages</h3>
        <a href="{{ route('seo-pages.create') }}" class="btn btn-primary mb-3">Create New SEO Page</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    {{-- <th>Page ID</th> --}}
                    <th>Title</th>
                    <th>Description</th>
                    <th>Keywords</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($seoPages as $seoPage)
                    <tr>
                        {{-- <td>{{ $seoPage->id }}</td> --}}
                        <td>{{ $seoPage->id }}</td>
                        <td>{{ $seoPage->title }}</td>
                        <td>{{ $seoPage->description }}</td>
                        <td>{{ $seoPage->keywords }}</td>
                        <td>
                            <a href="{{ route('seo-pages.edit', $seoPage->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('seo-pages.destroy', $seoPage->id) }}" method="POST" style="display:inline;">
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
