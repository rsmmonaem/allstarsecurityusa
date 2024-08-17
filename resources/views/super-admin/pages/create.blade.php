@extends('layout.app')

@section('title', 'Create Page')

@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <div class="mb-3">
            <h3>Create Page</h3>
            <a href="{{ route('pages.index') }}" class="btn btn-secondary mb-3">Back to List</a>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Create Page</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('pages.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="slug" class="form-label">Slug</label>
                                <input type="text" class="form-control" id="slug" name="slug" required>
                            </div>
                            <div class="mb-3">
                                <label for="page_category" class="form-label">Category</label>
                                <select class="form-control" id="page_category" name="page_category" required>
                                    @foreach ($pageCategories as $pageCategory)
                                    <option value="{{ $pageCategory->slug }}">{{ $pageCategory->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="page_additional_info" class="form-label">Additional Info</label>
                                <textarea class="form-control" id="page_additional_info" name="page_additional_info" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
