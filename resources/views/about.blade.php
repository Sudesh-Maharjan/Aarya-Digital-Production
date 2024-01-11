@extends('layouts.app')
@section('title')
About
@endsection
@section('content')


<div class="container-fluid text-dark" style="background-color:#F5F5F5;">
  <div class="container">
    <x-about-left />
    {{-- first row --}}
    <x-getstartedproject/>

    {{-- cta get startd ends --}}
    {{-- third row --}}

    <x-mission-vision />


  </div>

</div>

<x-expert-team :team-members="$teamMembers" />

<x-how-can-we-help />


<div class="container-fluid">
  <x-clients-row :icons="$icons" />

</div>
@endsection