@extends('layout.app')

@section('title', 'Create Page Category')

@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <h3>Create Page Category</h3>
        <form action="{{ route('page-categories.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" name="slug" id="slug" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="text" name="image" id="image" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</main>
@endsection
