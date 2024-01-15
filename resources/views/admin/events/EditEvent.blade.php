@extends('admin/layout')

@section('content')
<div class="page-wrapper bg-white">
    <div class="page-content">
        <div class="container">
            <h2>Edit Event</h2>
            <form action="{{ route('admin.events.update', $event->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $event->title) }}" required>
                </div>

                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea name="description" id="description" class="form-control" required>{{ old('description', $event->description) }}</textarea>
                </div>

                <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" name="image" id="image" class="form-control-file">
                </div>

                <div class="form-group">
                    <label for="current_image">Current Image:</label>
                    <img src="{{ asset('storage/event_images/' . $event->image) }}" alt="Current Event Image" style="max-width: 100px;">
                </div>

                <button type="submit" class="btn btn-primary">Update Event</button>
            </form>
        </div>
    </div>
</div>
@endsection
