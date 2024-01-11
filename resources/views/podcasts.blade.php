@extends('layouts.app')
@section('title')
Podcasts
@endsection
@section('content')
<div class="container  mt-5 text-dark">
  <x-media-headers active="podcast" />
  <x-media-menus title="Podcast" />
  <h1 class="mb-4 fw-bold">Hot Topics</h1>
  <x-podcast-intro />
  <div class="row d-flex align-items-center">
    <h3 class="fw-bold mb-3">Podcast</h3>
    @foreach ($podcasts as $podcast)
    <x-media-card :media="$podcast" />
    @endforeach
  </div>
</div>
</div>
@endsection