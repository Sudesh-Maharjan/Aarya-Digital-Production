@extends('layouts.app')

@section('title')
ADP Training
@endsection
<style>
        /* Add any additional custom styles here */
        .overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
            z-index: 1; 
        }
        .joinus{
         background-color:#5CBCF8;
         font-weight: bold;
        }
        .card1{
            
        }
    </style>
@section('content')
<div class="relative">
<div class="container-fluid p-0">
    <div class="position-relative d-flex justify-content-center">
        <img src="images/trainingmain.png" class="img-fluid" alt="">
        <div class="overlay">
            <h1>Welcome</h1>
            <p class="fs-5">We know how large objects will act, but things on a <br> small scale just do not act that way.</p>
            <button class="joinus p-3  text-white">Join Us</button>
        </div>
    </div>
</div>

<div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 mx-lg-5 card1">
<x-trainingmaincard trainingcardtitle="Photography Training"/>
<x-trainingmaincard trainingcardtitle="Photoediting Training"/>
<x-trainingmaincard trainingcardtitle="Videography Training"/>
<x-trainingmaincard trainingcardtitle="Videoediting Training"/>
<x-trainingmaincard trainingcardtitle="Full Multimedia Training"/>
<x-trainingmaincard trainingcardtitle="Gpahic Design Training"/>
<x-trainingmaincard trainingcardtitle="Digital Marketing Training"/>
<x-trainingmaincard trainingcardtitle="Digital Marketing Training"/>
</div>
</div>
<div class="mx-lg-5">
   <x-maintitle maintitle="ADP Training Center"/>
<x-titledesc titledesc="Training services for photography, videography, photo editing, video editing, graphic design, digital marketing, and digital journalism are essential for anyone looking to enhance their skills in these fields. Photography and videography training services teach individuals the art of capturing stunning images and videos using various cameras and equipment. Photo editing and video editing training services focus on teaching individuals the skills to enhance and modify images and videos using software such as Adobe Photoshop and Premiere Pro. Graphic design training services teach individuals how to create visually appealing designs for various mediums. Digital marketing training services provide knowledge on how to market products and services using various digital platforms. Lastly, digital journalism training services teach individuals how to gather, analyze, and report news and events using digital mediums such as websites, social media, and blogs. Overall, these training services play a crucial role in equipping individuals with the necessary skills to succeed in their chosen field."/>
</div>
<x-getstartedproject/>
<x-form/>
<x-login/>
<div class="mt-4"></div>
<x-signup/>
@endsection