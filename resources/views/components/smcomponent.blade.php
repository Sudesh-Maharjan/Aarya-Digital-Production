
<style>
.silver-package{
    background-color: #3cb371;
    color: white;
    font-weight: bold;
    margin-bottom: 65px;
}
.circle{
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    border-radius: 100%;
    background-color: #3cb371;
    width:110px;
    height:110px;
    color: white;
    top: 14%;
    border-style: solid;
    border-width: 4px;
    box-shadow: 0px 10px 15px -3px rgba(0,0,0,0.1);
}
.circle h5{
    font-weight: bold;
}
.addtocart{
    border-radius: 7px; 
    border: 1px solid #3cb371;
    color: #3cb371;
    padding: 6px;
    padding:6px 35px
}
.addtocart:hover{
  background-color:#3cb371 ;
  color: white;
}
body, html {
        overflow-x: hidden;
    }
</style>
<div class="d-flex justify-content-center relative  mt-5">
<div class="card shadow-sm mb-5 bg-body-tertiary rounded" style="width: 21rem;">
<div class="">
  <h2 class="silver-package p-5 text-center">Silver Package</h2>
  <div class="d-flex justify-content-center">
  <div class="circle">
  <h5 class="text-center ">  RS <br>
    14,999</h5>
  </div>
  </div>
  </div>
 
    <x-packagepoints packagepoint="Planning & Strategy"/>
    <x-packagepoints packagepoint="Research, Analysis & Consulting"/>
    <x-packagepoints packagepoint="Creating SEO & User Engaging"/>
    <x-packagepoints packagepoint="Automated Response Handling"/>
    <x-packagepoints packagepoint="6 Creative Graphic Post Per Month"/>
    <x-packagepoints packagepoint="60$ Boosting Per Month"/>
    <x-packagepoints packagepoint="Instagram Management"/>
    <x-packagepoints packagepoint="Meta Add management"/>
    <x-packagepoints packagepoint="Monthly Reporting"/>
  <div class="card-body d-flex justify-content-center">
    <button class="addtocart fw-bold text-center pt-2">Add To Cart</button>
</div>
</div>
</div>