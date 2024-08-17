@extends('layout.app')

@section('title', 'Edit SEO Page')

@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <div class="mb-3">
            <h3>Edit SEO Page</h3>
            <a href="{{ route('seo-pages.index') }}" class="btn btn-secondary mb-3">Back to List</a>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Edit SEO Page</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('seo-pages.update', $seoPage->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="slug" class="form-label">Slug</label>
                                <input type="text" class="form-control" id="slug" name="slug" value="{{ $seoPage->slug }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ $seoPage->title }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description" required>{{ $seoPage->description }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="keywords" class="form-label">Keywords</label>
                                <textarea class="form-control" id="keywords" name="keywords" required>{{ $seoPage->keywords }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
