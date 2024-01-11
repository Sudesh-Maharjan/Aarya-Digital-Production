@extends('admin/layout')
<style>
   .bg-color{
      color: #F23E1B;
   }
   .remove{
      background-color: #F23E1B;
   }
   .cartbgcolor{
     background-color: #F2F2F2;
   }
   .main-div-cart:hover{
      transition: transform 0.3s ease-in-out;
      transform: scale(1.1);
   }

</style>
@section('content')
<div class="page-wrapper bg-white">
   <h1 class="border-bottom border-dark d-flex justify-content-start m-5">My Cart</h1>

   <a href="{{url('admin/mycartinside')}}"> 
<div class="p-4 d-flex justify-content-center gap-5 rounded ">
   <div class="cartbgcolor p-5 d-flex gap-5 main-div-cart">
   <input type="checkbox">
<div class="">
 <h3 class="bg-color">Digital Marketing</h3>
 <div class="d-flex gap-5">
      <p>Diamond Package</p>
      <p class="bg-color">Rs. 49,999</p>  
      <button class="text-white remove p-2 rounded">Remove</button>  
</div>
</div>
</div>
</a>
</div>
@endsection