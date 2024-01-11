@extends('admin/layout')
<style>
   .form-select {
      border: none;
   }
</style>
@section('content')
   <!--start page wrapper -->
   <div class="page-wrapper bg-white">
      <div class="page-content">
         <!--breadcrumb-->
         <div class="">
            <h2 class="border-bottom border-dark">Profile</h2>
          <br>
            <h3>User Account Information</h3>
         </div> 
         <!--end breadcrumb-->
         <div class="container">
            <div class="main-body">
               <div class="row">
                  <div class="col-lg-8">
                     <div class=" d-flex justify-content-center gap-4">
                        <div class="w-50">
                           <div class="card-body">
                              <div class="col mb-3">
                                 <div class="col-sm-3">
                                    <h6 class="mb-0">Full Name</h6>
                                 </div>
                                 <div class="col-sm-9 text-secondary mt-2">
                                    <input type="text" class="form-control" placeholder="Full Name" />
                                 </div>
                              </div>

                              <div class="col mb-3 mt-5">
                                 <div class="col-sm-3 ">
                                    <h6 class="mb-0">Contact No.</h6>
                                 </div>
                                 <div class="col-sm-9 text-secondary mt-2">
                                    <input type="text" class="form-control" placeholder="(977) 9861611523" />
                                 </div>
                              </div>

                              <div class="col mb-3  mt-5">
                                 <div class="col-sm-3 ">
                                    <h6 class="mb-0">Birthday</h6>
                                 </div>
                                 <div class=" text-secondary mt-2 d-flex gap-2">
                                    <select class="form-select mb-3" aria-label="Default select example">
                                       <option selected>Month</option>
                                       <option value="1">One</option>
                                       <option value="2">Two</option>
                                       <option value="3">Three</option>
                                    </select>
                                    <select class="form-select  mb-3" aria-label="Default select example">
                                       <option selected>Day</option>
                                       <option value="1">One</option>
                                       <option value="2">Two</option>
                                       <option value="3">Three</option>
                                    </select>
                                    <select class="form-select mb-3" aria-label="Default select example">
                                       <option selected>Year</option>
                                       <option value="1">One</option>
                                       <option value="2">Two</option>
                                       <option value="3">Three</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="w-50">
                           <div class="col mb-3  mt-3">
                              <div class="col-sm-3">
                                 <h6 class="mb-0">Email</h6>
                              </div>
                              <div class="col-sm-9 text-secondary mt-2">
                                 <input type="text" class="form-control" placeholder="john@example.com" />
                              </div>
                           </div>

                           <div class="col mb-3  mt-5">
                              <div class="col-sm-3">
                                 <h6 class="mb-0">Password</h6>
                              </div>
                              <div class="col-sm-9 text-secondary mt-2">
                                 <input type="password" class="form-control" placeholder="" />
                              </div>
                           </div>
                           <div class="col mb-3  mt-5">
                              <div class="col-sm-3">
                                 <h6 class="mb-0">Gender</h6>
                              </div>
                              <div class="form-check">
                              <select class="form-select mb-3 w-50 mt-3" aria-label="Default select example">
                                       <option selected>Select</option>
                                       <option value="1">Male</option>
                                       <option value="2">Female</option>
                                       <option value="3">Others</option>
                                    </select>


                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <h2>Address</h2>
               <div class="d-flex justify-content-end">
               <div class="w-50">
               <div class="col mb-3 ">
                                 <div class="col-sm-3">
                                    <h6 class="mb-0">Address</h6>
                                 </div>
                                 <div class="col-sm-9 text-secondary mt-2">
                                    <input type="text" class="form-control" placeholder="Address" />
                                 </div>
                              </div>

                              <div class="col mb-3  mt-5">
                                 <div class="col-sm-3 ">
                                    <h6 class="mb-0">Province</h6>
                                 </div>
                                 <div class="row-sm-9 text-secondary mt-2">
                                    <select class="form-select mb-3 w-50" aria-label="Default select example">
                                       <option selected>Bagmati Province</option>
                                       <option value="1">2</option>
                                       <option value="2">3</option>
                                       <option value="3">4</option>
                                    </select>
                                 </div>
                              </div>

                              <div class="col mb-3  mt-5">
                                 <div class="col-sm-3 ">
                                    <h6 class="mb-0">City</h6>
                                 </div>
                                 <div class="row-sm-9 text-secondary mt-2">
                                    <select class="form-select mb-3 w-50" aria-label="Default select example">
                                       <option selected>Kathmandu</option>
                                       <option value="1">2</option>
                                       <option value="2">3</option>
                                       <option value="3">4</option>
                                    </select>
                                 </div>
                              </div>
               </div>
               <div class="w-50">
               <div class="col mb-3">
                                 <div class="col-sm-3">
                                    <h6 class="mb-0">Landmark(Optional)</h6>
                                 </div>
                                 <div class="col-sm-9 text-secondary mt-2">
                                    <input type="text" class="form-control" placeholder="" />
                                 </div>
                              </div>
               </div>
            </div>
            <div class="w-50">
            <button class="bg-primary p-3 rounded text-white w-75 fw-bold">Save Changes</button></div>
<!--end page wrapper -->
<!--start overlay-->
<div class="overlay toggle-icon"></div>
<!--end overlay-->
<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
<!--End Back To Top Button-->
<footer class="page-footer">
   <p class="mb-0">Copyright © 2021. All right reserved.</p>
</footer>
</div>
<!--end wrapper-->
<!--start switcher-->
<div class="switcher-wrapper">
   <div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
   </div>
   <div class="switcher-body">
      <div class="d-flex align-items-center">
         <h5 class="mb-0 text-uppercase">Theme Customizer</h5>
         <button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
      </div>
      <hr />
      <h6 class="mb-0">Theme Styles</h6>
      <hr />
      <div class="d-flex align-items-center justify-content-between">
         <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="lightmode" checked>
            <label class="form-check-label" for="lightmode">Light</label>
         </div>
         <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="darkmode">
            <label class="form-check-label" for="darkmode">Dark</label>
         </div>
         <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="semidark">
            <label class="form-check-label" for="semidark">Semi Dark</label>
         </div>
      </div>
      <hr />
      <div class="form-check">
         <input class="form-check-input" type="radio" id="minimaltheme" name="flexRadioDefault">
         <label class="form-check-label" for="minimaltheme">Minimal Theme</label>
      </div>
      <hr />
      <h6 class="mb-0">Header Colors</h6>
      <hr />
      <div class="header-colors-indigators">
         <div class="row row-cols-auto g-3">
            <div class="col">
               <div class="indigator headercolor1" id="headercolor1"></div>
            </div>
            <div class="col">
               <div class="indigator headercolor2" id="headercolor2"></div>
            </div>
            <div class="col">
               <div class="indigator headercolor3" id="headercolor3"></div>
            </div>
            <div class="col">
               <div class="indigator headercolor4" id="headercolor4"></div>
            </div>
            <div class="col">
               <div class="indigator headercolor5" id="headercolor5"></div>
            </div>
            <div class="col">
               <div class="indigator headercolor6" id="headercolor6"></div>
            </div>
            <div class="col">
               <div class="indigator headercolor7" id="headercolor7"></div>
            </div>
            <div class="col">
               <div class="indigator headercolor8" id="headercolor8"></div>
            </div>
         </div>
      </div>
      <hr />
      <h6 class="mb-0">Sidebar Colors</h6>
      <hr />
      <div class="header-colors-indigators">
         <div class="row row-cols-auto g-3">
            <div class="col">
               <div class="indigator sidebarcolor1" id="sidebarcolor1"></div>
            </div>
            <div class="col">
               <div class="indigator sidebarcolor2" id="sidebarcolor2"></div>
            </div>
            <div class="col">
               <div class="indigator sidebarcolor3" id="sidebarcolor3"></div>
            </div>
            <div class="col">
               <div class="indigator sidebarcolor4" id="sidebarcolor4"></div>
            </div>
            <div class="col">
               <div class="indigator sidebarcolor5" id="sidebarcolor5"></div>
            </div>
            <div class="col">
               <div class="indigator sidebarcolor6" id="sidebarcolor6"></div>
            </div>
            <div class="col">
               <div class="indigator sidebarcolor7" id="sidebarcolor7"></div>
            </div>
            <div class="col">
               <div class="indigator sidebarcolor8" id="sidebarcolor8"></div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--end switcher-->
<style>
   .col-sm-9 {
        position: relative;
    }

    .col-sm-9 input {
        border: none;
        border-bottom: 1px solid #000; /* Change the color as needed */
        border-radius: 0;
        outline: none; /* Remove the default input focus outline */
        box-shadow: none; /* Remove any default box shadow */
    }
    
</style>
@endsection