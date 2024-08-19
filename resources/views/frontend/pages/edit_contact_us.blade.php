@extends('layout.frontend')
@section('title', 'Edit Contact Us')
@section('description', 'Edit Contact Us Content')
@section('keywords', 'Edit,Contact us')

@section('content')
    <!-- =======================Edit Contact Us START -->
    <form method="POST" action="{{ route('admin.update_contact_us') }}">
        @csrf
        @method('PUT')
        <textarea id="editor" name="contact_us_content">{{ $data }}</textarea>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>

    <script src="https://cdn.tiny.cloud/1/5ul74oiu8td5u6fc926suxj9ribdsoime97mptwb7959aszm/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#editor',
            plugins: 'link paste table',
            toolbar: 'undo redo | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
            menubar: false,
            height: 500,
            content_css: [
            '{{ asset('frontend/assets/css/style.css') }}', // Link your main stylesheet
            '{{ asset('frontend/assets/vendor/font-awesome/css/all.min.css') }}',
            '{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}'
        ],
        });
    </script>
    <script src="{{ mix('js/app.js') }}"></script>
    <!-- =======================
    Edit Contact Us END -->
@endsection
