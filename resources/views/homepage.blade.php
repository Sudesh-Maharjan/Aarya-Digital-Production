@extends('layouts.app')

@section('title')
Home
@endsection
<style>
   .body1{
background-color: #E5E4E2;
width:300px;
   }
</style>
@section('content')
<div class="d-flex justify-content-center gap-5 m-5">
<div class="d-flex flex-column justify-content-center align-content-center rounded body1 m-4">
   <ul style="list-style-type: none;">
      <li class="text-dark ">Digital Marketing</li>
      <li class="text-dark">Multimedia Production</li>
      <li class="text-dark">Branding</li>
      <li class="text-dark">Training</li>
      <li class="text-dark">Information</li>
   </ul>
</div>
<div id="carouselExampleInterval" class="carousel slide"style="height: 300px; width:500px" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="images/h1.jpg" class="d-block w-100 h-100 " alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="images/h1.jpg" class="d-block w-100 h-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/h1.jpg" class="d-block w-100 h-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
@endsection