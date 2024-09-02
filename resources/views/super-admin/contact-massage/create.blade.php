@extends('layout.app')

@section('title', 'Create Header Menu')

@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <h3>Create Header Menu</h3>
        <form action="{{ route('header-menus.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="page_category_id">Page Category</label>
                <select name="page_category_id" id="page_category_id" class="form-control">
                    @foreach ($pageCategories as $pageCategory)
                        <option value="{{ $pageCategory->id }}">{{ $pageCategory->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="isactive">Status</label>
                <select name="isactive" id="isactive" class="form-control">
                    <option value="show">Show</option>
                    <option value="hide">Hide</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</main>
@endsection
