@extends('layouts.app')

@section('title')
Home
@endsection
<style>
  .body1 {
    background-color: #E5E4E2;
    width: 300px;
  }

  .os-card {
    position: relative;
    overflow: hidden;
  }

  .os-card-img-top {
    width: 100%;
    height: auto;
  }

  .os-card-body {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    background-color: rgba(242, 62, 27, 0.78);
    padding: 15px;
    color: white;
    transition: background-color 0.3s ease-in-out;
  }

  .os-desc {
    display: none;
  }

  .os-card:hover .os-card-body .os-desc {
    display: block;
    transition: opacity 0.5s ease, visibility 0.5s ease;
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
  <div id="carouselExampleInterval" class="carousel slide" style="height: 300px; width:500px" data-bs-ride="carousel">
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
<div class="mt-4 p-5">
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="os-card">
        <img src="images/h1.jpg" class="os-card-img-top" alt="...">
        <div class="os-card-body ">
          <div class="os-icon">
            <i class="fa-solid fa-video"></i>
          </div>
          <h5 class="os-card-title text-center">Card title</h5>
          <div class="os-desc">
            <p class="os-card-text">This is a longer card with supporting text below as a natural lead-in to additional
              content. This content is a little bit longer.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="os-card">
        <img src="images/h1.jpg" class="os-card-img-top" alt="...">
        <div class="os-card-body ">
          <div class="os-icon top-1">
            <i class="fa-solid fa-video"></i>
          </div>
          <h5 class="os-card-title text-center">Card title</h5>
          <div class="os-desc">
            <p class="os-card-text">This is a longer card with supporting text below as a natural lead-in to additional
              content. This content is a little bit longer.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="os-card">
        <img src="images/h1.jpg" class="os-card-img-top" alt="...">
        <div class="os-card-body ">
          <div class="os-icon">
            <i class="fa-solid fa-video"></i>
          </div>
          <h5 class="os-card-title text-center">Card title</h5>
          <div class="os-desc">
            <p class="os-card-text">This is a longer card with supporting text below as a natural lead-in to additional
              content. This content is a little bit longer.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="d-flex justify-content-center">
<img src="images/Rectangle 14.png" alt="">
</div>
<div class="d-flex justify-content-center flex-column align-content-center">
  <h3 class="text-dark">Features</h3>
  <img src="images/Frame 30.png" alt="" class="w-75">
</div>
<div class="d-flex justify-content-center">
<div class="">
</div>
  <img src="images/Frame 32.png" alt="">
</div>
@endsection