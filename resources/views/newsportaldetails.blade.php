@extends('layouts.app')
@section('title')
News Portal Details
@endsection
@section('content')
    <div class="container-fluid text-dark" >
      <div class="banner ">
      </div>
        <div class="container news-detail px-4 px-md-0 ">
          {{-- <div class="news-detail"> --}}
            <h1 class="fw-bold text-center text-dark px-1 px-lg-5  mb-2 mb-lg-5 fs-1 mt-4" >John Lewis, civil rights giant, crosses infamous Selma bridge one final time</h1>
            <img src="{{asset('/images/newsportal.png')}}" alt=" image" class="col-12" >
            <div class="row gx-0 gx-lg-5">
              <div class=" col-12 col-lg-8 ">
               <div class=" pt-lg-0 text-start"   style="background-color: #fff">
               {{-- content row --}}
            <x-news-details-info/>
            
               <div class="row mt-2">
          
                  <x-news-details-intro/>
                    
                  <x-news-mid-title/>

                 <x-news-mid-image/>
            <div class="mb-0 mb-lg-5 py-1 py-lg-4"></div>
            <x-news-below-content/>
            
                  </div>
            
                </div>

                <div class="row">
                  <x-news-signup/>
                </div>
                <div class="row">
                  <x-news-tags/>
                </div>
                <div class="row">
                  <x-news-share-links/>
                </div>
              </div>

              <div class=" col-12 col-lg-4 mt-5">
        

                <x-news-recommended/>
                
                </div>

               
              </div>
          {{-- </div> --}}
        </div>
      </div>

@endsection