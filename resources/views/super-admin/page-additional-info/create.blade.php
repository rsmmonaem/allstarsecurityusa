@extends('layout.app')

@section('title', 'Create Additional Info')

@section('content')
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
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
                <label for="key_type">Key Type</label>
                <input type="text" name="key_type" id="key_type" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="key">Key</label>
                <input type="text" name="key" id="key" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="value">Value</label>
                {{-- <input type="text" name="value" id="value" class="form-control" required> --}}
                <textarea id="summernote" name="value"></textarea>

            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</main>
<script>
    $('#summernote').summernote({
      placeholder: 'Hello Bootstrap 4',
      tabsize: 2,
      height: 100
    });
  </script>
@endsection
