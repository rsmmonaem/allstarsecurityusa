@extends('layout.app')

@section('title', 'Edit Page')

@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <h3>Edit Page</h3>
        <form action="{{ route('pages.update', $page->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $page->name }}" required>
            </div>
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" name="slug" id="slug" class="form-control" value="{{ $page->slug }}" required>
            </div>
            <div class="form-group">
                <label for="seo_id">SEO ID</label>
                <input type="text" name="seo_id" id="seo_id" class="form-control" value="{{ $page->seo_id }}">
            </div>
            <div class="form-group">
                <label for="page_category_id">Category</label>
                <select name="page_category_id" id="page_category_id" class="form-control">
                    <option value="">None</option>
                    @foreach ($pageCategories as $category)
                        <option value="{{ $category->id }}" {{ $category->id == $page->page_category_id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="parent_category_id">Parent Category</label>
                <select name="parent_category_id" id="parent_category_id" class="form-control">
                    <option value="">None</option>
                    @foreach ($pageCategories as $category)
                        <option value="{{ $category->id }}" {{ $category->id == $page->parent_category_id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="child_page_id">Child Page</label>
                <select name="child_page_id" id="child_page_id" class="form-control">
                    <option value="">None</option>
                    @foreach ($pages as $p)
                        <option value="{{ $p->id }}" {{ $p->id == $page->child_page_id ? 'selected' : '' }}>
                            {{ $p->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</main>
@endsection
