@extends('layouts.app')
@section('title')
Event Details
@endsection
@section('content')
    <div class="container-fluid text-black" style="background-color:#F5F5F5;">
          <div class="  px-4 text-center">
            <div class="row gx-0 gx-lg-5">
              <div class=" col-12 col-lg-9 ">
               <div class="p-2 p-lg-5 text-start"   style="background-color: #fff">
                    <h4 class="fw-bold">{{$event->title}}</h4>
                  
                    <x-events-info :date="$event->updated_at"/>

                    <x-event-image-content 
                    :description="$event->description"
            :image=" $event->image"/>
            
               {{-- share --}}

               <x-events-bottom/>

                </div>
              </div>

              <div class=" col-12 col-lg-3 ">
            
                <x-event-post-date/>

               <x-company-address/>

              </div>
            </div>
          </div>
    </div>
@endsection