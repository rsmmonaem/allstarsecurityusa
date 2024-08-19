@extends('layout.app')

@section('title', 'Edit Page Category')

@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <h3>Edit Page Category</h3>
        <form action="{{ route('page-categories.update', $pageCategory->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $pageCategory->name }}" required>
            </div>
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" name="slug" id="slug" class="form-control" value="{{ $pageCategory->slug }}" required>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="text" name="image" id="image" class="form-control" value="{{ $pageCategory->image }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</main>
@endsection
