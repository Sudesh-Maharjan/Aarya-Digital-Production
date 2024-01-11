@extends('admin/layout')
<style>
  .remove {
    background-color: #F23E1B;
  }
</style>
@section('content')
<div class="page-wrapper d-flex justify-content-center align-content-center flex-column">
  <div class="">
  <h1 class="border-bottom border-dark mx-5">Review & Checkout Inside</h1></div>
  <div class="d-flex justify-content-center">
  <div class="m-5">
    <table class="table bg-white ">
      <thead class="remove text-white">
        <tr>
          <th scope="col">Package Name</th>
          <th scope="col">Package</th>
          <th scope="col">Price</th>
          <th scope="col">Total</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td scope="row">Digital Marketing</td>
          <td>Platinum</td>
          <td>Rs. 49,999/-</td>
          <td>Rs. 49,999/-</td>
        </tr>
      </tbody>
    </table>
  </div>



  <div class=" bg-gradient-orange d-flex flex-column justify-content-center align-content-center p-4">
    <h2 class="">Order Summery</h2>

    <table class="table bg-white">
      <thead>
        <tr>
          <th scope="col">Package</th>
          <th scope="col">Digital Marketing</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">Price</th>
          <td>Rs. 49,999</td>
        </tr>
        <tr>
          <th scope="row">VAT 13%</th>
          <td>Rs. 6,499</td>
        </tr>
        <tr>
          <th scope="row">Total Amount</th>
          <td>Rs. 56,498</td>
        </tr>
      </tbody>
    </table>

    <a href="{{url('admin/checkout')}}">
    <div class="d-flex justify-content-center">
      <button class="remove text-white  p-3 m-3  rounded fw-bold font-20">Chackout</button>
    </div>
  </a>
    </div>
  </div>
  @endsection