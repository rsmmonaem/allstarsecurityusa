@extends('layout.app')

@section('title', 'Create Page')

@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <h3>Create Page</h3>
        <form action="{{ route('pages.store') }}" method="POST">
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
                <label for="seo_id">SEO ID</label>
                <select name="seo_id" id="seo_id" class="form-control">
                    <option value="">None</option>
                    @foreach ($SeoPage as $seo)
                        <option value="{{ $seo->id}}">{{ $seo->title}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="page_category_id">Category</label>
                <select name="page_category_id" id="page_category_id" class="form-control">
                    <option value="">None</option>
                    @foreach ($pageCategories as $category)
                        <option value="{{ $category->id ?? ''}}">{{ $category->name ?? '' }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="parent_category_id">Parent Category</label>
                <select name="parent_category_id" id="parent_category_id" class="form-control">
                    <option value="">None</option>
                    @foreach ($pageCategories as $category)
                        <option value="{{ $category->id ?? '' }} ">{{ $category->name ?? ''}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="child_page_id">Child Page</label>
                <select name="child_page_id" id="child_page_id" class="form-control">
                    <option value="">None</option>
                    @foreach ($pages ?? [] as $page)
                        <option value="{{ $page->id ?? '' }}">{{ $page->name ?? '' }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</main>
@endsection
