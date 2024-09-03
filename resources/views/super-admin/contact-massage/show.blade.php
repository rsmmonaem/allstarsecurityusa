@extends('layout.app')

@section('title', 'show message')

@section('content')


@section('content')
<main class="content">
    <div class="container-fluid p-0">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Message Details</h3>
                </div>

                <div class="card-body">
                    <!-- User Info -->
                    <div class="mb-3">
                        <h5 class="card-title">Name: {{ $user->name }}</h5>
                        <p class="card-text"><strong>Email:</strong> {{ $user->email }}</p>
                        <p class="card-text"><strong>Phone:</strong> {{ $user->phone }}</p>
                        <p class="card-text"><strong>Phone:</strong> {{ $user->message }}</p>
                        <p class="card-text"><strong>Joined:</strong> {{ $user->created_at->format('M d, Y') }}</p>
                    </div>


                    <a href="{{ route('contact-us.index') }}" class="btn btn-secondary">Back to List</a>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
@endsection


{{-- <main class="content">
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
</main> --}}
@endsection
