@extends('layouts.app')

@section('title')
Photography Training
@endsection

@section('content')
<div class="d-flex justify-content-center">
<img src="images/Rectangle 12.png" alt="" class="img-fluid">
</div>
<div class="mx-lg-5">
   <x-maintitle maintitle="Photography Training"/>
<x-titledesc titledesc="A photography training course can be immensely beneficial for anyone looking to improve their photography skills, whether as a hobby or a profession. Such a course can provide in-depth knowledge of the technical aspects of photography, such as exposure, composition, and lighting, as well as help develop an eye for detail and creativity. Additionally, photography courses often offer hands-on practice opportunities and feedback from experienced instructors, which can accelerate the learning process and help individuals gain confidence in their abilities. Overall, a photography training course can open up new avenues for artistic expression, enhance career prospects, and provide a sense of personal fulfillment."/>
</div>
<x-getstartedproject/>
<div class="mt-5">
<x-photographycomponent />
</div>
<div class="mt-5">
<x-trainingphotographydropdown />
</div>

<x-form/>

@endsection