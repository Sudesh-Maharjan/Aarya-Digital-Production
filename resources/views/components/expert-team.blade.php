<div>


     {{-- our expert team --}}
     <div class="container-fluid text-dark" style="background-color: rgba(245, 206, 178, 0.33)">
        <div class="container py-5 ">
          <div class="text-center mb-5">
            <h1 class="mb-4 fw-bold">Our Expert Team</h1>
            <p class="px-5">
              At SMP, we believe that social media is the easiest & fastest way to promote your business across the world. Thats why we spend an inordinate amount of brainpower to develop a perfect marketing strategy to market your products and services. At the end of the day, we're all about helping businesses channel the information about their products & services all over the world.
            </p>
    
          </div>
  
          <div class="row d-flex">
              @foreach ($teamMembers as $member)
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                      <div class="card">
                          <div class="bg-image position-relative">
                              <img src="{{ $member['image_url'] }}" class="w-100" />
          
                              <!-- Text Overlay -->
                              <div class="position-absolute bottom-0 start-50 translate-middle-x text-black w-75"
                                   style="background-color:#fafafa;">
                                  <h5 class="p-2 m-0 text-center fw-bold" >{{ $member['name'] }}</h5>
                                  <p class="text-center fw-bold" style="color: #F23E1B; font-size:14px">{{ $member['designation'] }}</p>
                              </div>
                          </div>
                      </div>
                  </div>
              @endforeach
     
  
        {{-- prev-next buttons --}}
        <div class="row d-flex align-items-center justify-content-center">
          <div class="col-auto pe-1">
              <button  class="btn btn-link p-0 m-0">
                  <img src="{{ asset('images/prevArrow.png') }}" alt="Prev Arrow" title="prev">
              </button>
          </div>
          <div class="col-auto ps-1">
              <button  class="btn btn-link p-0 m-0">
                  <img src="{{ asset('images/nextArrow.png') }}" alt="Next Arrow" title="next">
              </button>
          </div>
      </div>
    
          </div>  
          {{-- team row ends --}}
  
  
        </div>
        {{-- team container ends --}}
  
      </div> 
      {{-- team container-fluid ends --}}

</div>