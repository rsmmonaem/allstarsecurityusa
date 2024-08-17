@extends('layout.app')

@section('title', 'SEO Pages')

@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <div class="mb-3">
            <h3>SEO Pages</h3>
            <a href="{{ route('seo-pages.create') }}" class="btn btn-primary mb-3">Add New</a>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">SEO Pages List</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Slug</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Keywords</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($seoPages as $seoPage)
                                <tr>
                                    <td>{{ $seoPage->id }}</td>
                                    <td>{{ $seoPage->slug }}</td>
                                    <td>{{ $seoPage->title }}</td>
                                    <td>{{ $seoPage->description }}</td>
                                    <td>{{ $seoPage->keywords }}</td>
                                    <td>
                                        <a href="{{ route('seo-pages.edit', $seoPage->id) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('seo-pages.destroy', $seoPage->id) }}" method="POST" style="display:inline;">
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
