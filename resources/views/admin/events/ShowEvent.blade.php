<!-- resources/views/events/index.blade.php -->

@extends('admin/layout') 

@section('content')
<div class="page-wrapper bg-white">
    <div class="page-content">
        <div class="container">
            <h2>All Events</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th>Actions</th> {{-- New column for actions --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach($events as $event)
                        <tr>
                            <td>{{ $event->id }}</td>
                            <td>
                                <img src="{{ asset('storage/event_images/' . $event->image) }}" alt="Event Image" style="max-width: 100px;">
                            </td>
                            <td>{{ $event->title }}</td>
                            <td>{{ $event->description }}</td>
                            <td>{{ $event->day }} {{ $event->month }}</td>
                            <td class="d-flex ">
                                <a href="" class="btn btn-primary">Edit</a>
                                <form action="" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this event?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
