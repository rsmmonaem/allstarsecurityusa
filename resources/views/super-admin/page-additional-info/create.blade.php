@extends('layout.app')

@section('title', 'Create Additional Info')

@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <h3>Create Additional Info</h3>
        <form action="{{ route('page-additional-info.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="page_id">Page</label>
                <select name="page_id" id="page_id" class="form-control">
                    @foreach ($pages as $page)
                        <option value="{{ $page->id }}">{{ $page->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="key">Key</label>
                <select name="key" id="key" class="form-control" required>
                    <option value="text">Text</option>
                    <option value="image">Image</option>
                </select>
            </div>
            <div class="form-group">
                <label for="value">Value</label>
                <textarea name="value" id="value" class="form-control" placeholder="Enter text or leave this empty for image upload." required></textarea>
                <small class="form-text text-muted">If you select 'Image' for the key, use the upload field below.</small>
            </div>
            <div class="form-group" id="image-field" style="display: none;">
                <label for="image">Image (Optional)</label>
                <input type="file" name="image" id="image" class="form-control-file">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
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
