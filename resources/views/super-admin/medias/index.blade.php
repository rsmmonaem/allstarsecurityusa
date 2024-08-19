@extends('layout.app')

@section('title', 'Media')

@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <h3>Media</h3>
        <a href="{{ route('media.create') }}" class="btn btn-primary mb-3">Upload New Media</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Image Name</th>
                    <th>Path/Link</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mediaItems as $media)
                    <tr>
                        <td>{{ $media->id }}</td>
                        <td><img src="{{ asset('storage/' . $media->path_src) }}" alt="{{ $media->img_name }}" width="100"></td>
                        <td>{{ $media->img_name }}</td>
                        <td>{{ $media->path_src }}</td>
                        <td>
                            <form action="{{ route('media.destroy', $media->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection
