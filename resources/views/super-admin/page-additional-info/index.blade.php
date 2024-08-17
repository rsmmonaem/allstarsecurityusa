@extends('layout.app')

@section('title', 'Additional Info List')

@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <h3>Additional Info List</h3>
        <a href="{{ route('page-additional-info.create') }}" class="btn btn-primary mb-3">Add New</a>
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Current Additional Info</h5>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Page</th>
                            <th>Key</th>
                            <th>Value</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($additionalInfos as $info)
                            <tr>
                                <td>{{ $info->id }}</td>
                                <td>{{ $info->page->name }}</td>
                                <td>{{ ucfirst($info->key) }}</td>
                                <td>
                                    @if ($info->key === 'image' && strpos($info->value, 'images/page_additional_info') !== false)
                                        <img src="{{ asset('storage/' . $info->value) }}" alt="Image" width="100">
                                    @else
                                        {{ $info->value }}
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('page-additional-info.edit', $info) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('page-additional-info.destroy', $info) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection
