@extends('layout.app')

@section('title', 'Additional Info List')

@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <h3>Additional Info List</h3>
        <a href="{{ route('page-additional-info.create') }}" class="btn btn-primary mb-3">Create New Additional Info</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Page</th>
                    <th>Key Type</th>
                    <th>Key</th>
                    {{-- <th>Value</th> --}}
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($additionalInfos as $info)
                    <tr>
                        <td>{{ $info->id }}</td>
                        <td>{{ $info->page->name }}</td>
                        <td>{{ $info->key_type }}</td>
                        <td>{{ $info->key }}</td>
                        {{-- <td>{{ $info->value }}</td> --}}
                        <td>
                            <a href="{{ route('page-additional-info.edit', $info->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('page-additional-info.destroy', $info->id) }}" method="POST" style="display:inline;">
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
