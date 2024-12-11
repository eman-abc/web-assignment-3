<!-- resources/views/frontend/bootcamp-create.blade.php -->
@extends('frontend.layouts.masterlayout')

@section('main-content')
<div class="container">
    <h2>Create a New Bootcamp Service</h2>

    <form action="{{ route('bootcamp.store') }}?key=123" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="name">Bootcamp Name:</label>
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

        <button type="submit" class="btn btn-primary">Create Bootcamp</button>
    </form>
</div>
@endsection