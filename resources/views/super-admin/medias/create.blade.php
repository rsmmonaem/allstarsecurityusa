@extends('layout.app')

@section('title', 'Upload Media')

@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <h3>Upload Media</h3>
        <form action="{{ route('media.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="img_name">Image Name</label>
                <input type="text" name="img_name" id="img_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="file">Choose Image</label>
                <input type="file" name="file" id="file" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>
    </div>
</main>
@endsection
