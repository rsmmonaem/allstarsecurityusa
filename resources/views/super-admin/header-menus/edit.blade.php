@extends('layout.app')

@section('title', 'Edit Header Menu')

@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <h3>Edit Header Menu</h3>
        <form action="{{ route('header-menus.update', $headerMenu->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="page_category_id">Page Category</label>
                <select name="page_category_id" id="page_category_id" class="form-control">
                    @foreach ($pageCategories as $pageCategory)
                        <option value="{{ $pageCategory->id }}" {{ $headerMenu->page_category_id == $pageCategory->id ? 'selected' : '' }}>
                            {{ $pageCategory->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="isactive">Status</label>
                <select name="isactive" id="isactive" class="form-control">
                    <option value="show" {{ $headerMenu->isactive == 'show' ? 'selected' : '' }}>Show</option>
                    <option value="hide" {{ $headerMenu->isactive == 'hide' ? 'selected' : '' }}>Hide</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</main>
@endsection
