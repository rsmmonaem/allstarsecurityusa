@extends('layout.app')

@section('title', 'Edit SEO Page')

@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <h3>Edit SEO Page</h3>
        <form action="{{ route('seo-pages.update', $seoPage->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $seoPage->title }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control">{{ $seoPage->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="keywords">Keywords</label>
                <input type="text" name="keywords" id="keywords" class="form-control" value="{{ $seoPage->keywords }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</main>
@endsection
