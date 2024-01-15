

@extends('admin/layout')

@section('content')
<div class="page-wrapper bg-white">
      <div class="page-content">
    <div class="container">
        <h2>Create Event</h2>
        <form action="{{route('admin.events.store')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" id="description" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" name="image" id="image" class="form-control-file" required>
            </div>

            <button type="submit" class="btn btn-primary">Create Event</button>
        </form>
    </div>
      </div>
</div>
@endsection
