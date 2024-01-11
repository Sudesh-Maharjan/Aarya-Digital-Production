@extends('layouts.app')
@section('title')
Youtubes
@endsection
@section('content')
    <div class="container mt-5 text-dark">
      <x-media-headers active="youtube" />

<x-media-menus title="Youtube"/>

<x-youtube-intro/>

<div class="row d-flex align-items-center">
  <h3 class="fw-bold mb-3">For You</h3>
  @foreach ($youtubes as $youtube)
      <x-media-card :media="$youtube" />
  @endforeach
</div>
    </div>
    </div>

@endsection