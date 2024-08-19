@extends('layout.app')

@section('title', 'Edit Additional Info')

@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <h3>Edit Additional Info</h3>
        <form action="{{ route('page-additional-info.update', $pageAdditionalInfo->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="page_id">Page</label>
                <select name="page_id" id="page_id" class="form-control">
                    @foreach ($pages as $page)
                        <option value="{{ $page->id }}" {{ $page->id == $pageAdditionalInfo->page_id ? 'selected' : '' }}>
                            {{ $page->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="key_type">Key Type</label>
                <input type="text" name="key_type" id="key_type" class="form-control" value="{{ $pageAdditionalInfo->key_type }}" required>
            </div>
            <div class="form-group">
                <label for="key">Key</label>
                <input type="text" name="key" id="key" class="form-control" value="{{ $pageAdditionalInfo->key }}" required>
            </div>
            <div class="form-group">
                <label for="value">Value</label>
                <input type="text" name="value" id="value" class="form-control" value="{{ $pageAdditionalInfo->value }}" required>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</main>
@endsection
