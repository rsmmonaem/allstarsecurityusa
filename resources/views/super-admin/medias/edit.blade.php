@extends('layout.app')

@section('title', 'Edit Media')

@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <h3>Edit Media</h3>
        <form action="{{ route('media.update', $media->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="path_src">Path</label>
                <input type="text" name="path_src" id="path_src" class="form-control" value="{{ $media->path_src }}" required>
            </div>
            <div class="form-group">
                <label for="img_name">Image Name</label>
                <input type="text" name="img_name" id="img_name" class="form-control" value="{{ $media->img_name }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</main>
@endsection
