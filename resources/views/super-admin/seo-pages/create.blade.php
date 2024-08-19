@extends('layout.app')

@section('title', 'Create SEO Page')

@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <h3>Create SEO Page</h3>
        <form action="{{ route('seo-pages.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="keywords">Keywords</label>
                <input type="text" name="keywords" id="keywords" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</main>
@endsection
