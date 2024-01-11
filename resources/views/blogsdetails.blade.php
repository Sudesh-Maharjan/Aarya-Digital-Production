@extends('layouts.app')

@section('title')
Blog Details
@endsection

@section('content')
<link rel="stylesheet" href="{{ asset('css/events.css') }}">
<!-- Styles -->
<div class="container-fluid text-black" style="background-color:#F5F5F5;">
  <div class=" container px-4 " style="background-color: #fff">
    <h2 class="fw-bold" style="color: #F23E1B">Blogs</h2>

    {{-- image row --}}
    <x-blog-details-image />

    <div class="row gx-0 gx-lg-5">
      <div class=" col-12 col-lg-8 ">
        <x-blog-details-content />
      </div>

      <div class=" col-12 col-lg-4 mt-5">

        <x-related-blogs />
      </div>
    </div>
  </div>
</div>

@endsection