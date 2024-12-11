@extends('frontend.layouts.masterlayout')

@section('title', 'Modify Services - StriveX')

@push('style')
<link rel="stylesheet" href="{{ asset('frontend/css/home.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/services.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/blogstyling.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/eachblog.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush

@section('main-content')
<div class="container">
    <!-- Modal for Key Authentication -->
    <div class="modal" tabindex="-1" id="keyModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Enter Access Key</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" class="form-control" id="accessKey" placeholder="Enter key">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="submitKey">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <h2>Create a New Service</h2>

    <form action="{{ route('storeService') }}" method="POST" enctype="multipart/form-data" id="serviceForm">
        @csrf
        <div class="form-group">
            <label for="type">Service Type:</label>
            <select name="type" id="type" required>
                <option value="bootcamp">Bootcamp</option>
                <option value="sports-training">Sports Training</option>
            </select>
        </div>

        <div class="form-group">
            <label for="name">Service Name:</label>
            <input type="text" class="form-control" name="name" id="name" required>
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" name="description" id="description" rows="4" required></textarea>
        </div>

        <div class="form-group">
            <label for="image">Upload Image:</label>
            <input type="file" class="form-control" name="image" id="image">
        </div>

        <button type="submit" class="btn btn-primary">Create Service</button>
    </form>
</div>

@endsection

@push('scripts')
<script>
    $(document).ready(function () {
        // Show the modal when the page loads if `showModal` is true
        @if(isset($showModal) && $showModal)
            $('#keyModal').modal('show');
        @endif

        // Handle key submission
        $('#submitKey').click(function () {
            var enteredKey = $('#accessKey').val();
            $.ajax({
                url: "{{ route('access.key.submit') }}",
                method: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    access_key: enteredKey
                },
                success: function (response) {
                    if (response.success) {
                        $('#keyModal').modal('hide');
                        alert('Access granted!');
                        location.reload();
                    }
                },
                error: function (response) {
                    alert(response.responseJSON.error || 'Invalid key. Please try again.');
                }
            });
        });
    });
</script>
@endpush
