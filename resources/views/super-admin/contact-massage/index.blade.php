@extends('layout.app')

@section('title', 'Header Menus')

@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <h3>Contact Us</h3>
        {{-- <a href="{{ route('contact-us.index') }}" class="btn btn-primary mb-3">Create New Header Menu</a> --}}
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Massage</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contactes as $contact)
                    <tr>
                        <td>{{ $contact->id }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->phone }}</td>
                        <td>{{ $contact->message }}</td>
                        <td>
                            {{-- <a href="{{ route('header-menus.edit', $headerMenu->id) }}" class="btn btn-warning btn-sm">Edit</a> --}}
                            <form action="{{ route('contact-us.destroy', $contact->id) }}" method="POST" style="display:inline;">
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
