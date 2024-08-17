@extends('layout.app')
@section('title', 'Edit Page Category')
@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <h2 class="mb-4">Edit Page Category</h2>

        <form action="{{ route('page-categories.update', $pageCategory) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $pageCategory->name) }}" required>
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug', $pageCategory->slug) }}" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image">
                @if($pageCategory->image)
                    <img src="{{ asset('storage/' . $pageCategory->image) }}" alt="Current Image" class="mt-2" style="max-width: 150px;">
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</main>
@endsection
