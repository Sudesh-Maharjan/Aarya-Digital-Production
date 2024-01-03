<style>
    
.trainningicon{
    background-color:#5CBCF8;
    border-radius: 7px;
    width: auto;
    display: inline-block;
}
.line {
    width: 60px;
}
.trainingtitle{
    font-weight: bold;
    color: black;
}
.zoom-on-hover:hover {
      cursor: pointer;
      transform: scale(1.1);
    }
 
</style>
<div class="d-flex justify-content-center align-content-center">
<div class="container-fluid shadow  p-3 rounded m-5 zoom-on-hover bg-white" style="z-index: 2; width: 250px; height: 250px;">
    <div class="trainningicon p-3">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera" viewBox="0 0 16 16">
  <path d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4z"/>
  <path d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5m0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7M3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0"/>
</svg>
    </div>
    <h5 class="mt-3 fs-6 trainingtitle">{{$trainingcardtitle}}</h5>
    <div class=" bg-danger border border-danger line"></div>
</div>
</div>