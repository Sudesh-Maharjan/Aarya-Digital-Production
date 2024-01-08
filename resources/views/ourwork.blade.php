@extends('layouts.app')

@section('title')
Ourworks
@endsection

<style>
  .works-title-color {
    color: #FF4500;
  }
  .nav-link {
    color: #2DBFF8 !important; 
  }
 

</style>

@section('content')
<h1 class="text-center fw-bold works-title-color mt-5">Our Works</h1>
<p class="text-center fw-bold text-dark mt-4">Digital Marketing outsourcing is just a tool to achieve business goals. But there
  is no wayto get worthwhile results without cooperation and trust between a client company.</p>
<!-- tab-->
<ul class="nav nav-underline justify-content-center m-3 mt-5 ">
  <li class="nav-item">
    <a class="nav-link active fs-4 " href="#">All</a>
  </li>
  <li class="nav-item">
    <a class="nav-link fs-4" href="#">Design</a>
  </li>
  <li class="nav-item">
    <a class="nav-link fs-4" href="#">Photo</a>
  </li>
  <li class="nav-item">
    <a class="nav-link fs-4" href="#">Video</a>
  </li>
  <li class="nav-item">
    <a class="nav-link fs-4" href="#">Animation</a>
  </li>
</ul>
<!-- tab end-->
<x-work />
<x-form />
@endsection