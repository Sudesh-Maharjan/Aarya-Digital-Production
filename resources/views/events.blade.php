@extends('layouts.app')
@section('title')
Events
@endsection
@section('content')
<div class="container-fluid ">
    <div class="row d-flex align-items-center">
        @foreach ($events as $event)
        <x-event-cards :event="$event" />
        @endforeach
    </div>
</div>
</div>

@endsection