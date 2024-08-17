@extends('layout.app')

@section('title', 'Edit Additional Info')

@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <h3>Edit Additional Info</h3>
        <form action="{{ route('page-additional-info.update', $pageAdditionalInfo) }}" method="POST" enctype="multipart/form-data">
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
                <label for="key">Key</label>
                <select name="key" id="key" class="form-control" required>
                    <option value="text" {{ $pageAdditionalInfo->key === 'text' ? 'selected' : '' }}>Text</option>
                    <option value="image" {{ $pageAdditionalInfo->key === 'image' ? 'selected' : '' }}>Image</option>
                </select>
            </div>
            <div class="form-group">
                <label for="value">Value</label>
                <textarea name="value" id="value" class="form-control" required>{{ $pageAdditionalInfo->value }}</textarea>
                <small class="form-text text-muted">If you select 'Image' for the key, use the upload field below.</small>
            </div>
            @if($pageAdditionalInfo->key === 'image')
                <div class="form-group">
                    <label for="current_image">Current Image</label>
                    <br>
                    <img src="{{ asset('storage/' . $pageAdditionalInfo->value) }}" alt="Current Image" width="100">
                </div>
            @endif
            <div class="form-group" id="image-field" style="{{ $pageAdditionalInfo->key === 'image' ? 'display: block;' : 'display: none;' }}">
                <label for="image">Image (Optional)</label>
                <input type="file" name="image" id="image" class="form-control-file">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</main>

<script>
    document.getElementById('key').addEventListener('change', function() {
        var imageField = document.getElementById('image-field');
        if (this.value === 'image') {
            imageField.style.display = 'block';
        } else {
            imageField.style.display = 'none';
        }
    });
</script>
@endsection
