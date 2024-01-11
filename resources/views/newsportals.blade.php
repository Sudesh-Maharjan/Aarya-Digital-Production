@extends('layouts.app')
@section('title')
News Portal
@endsection
@section('content')
    <div class="container mt-5 text-dark">
      <x-media-headers active="newsportal" />

       <x-media-menus title="News"/>
          <h1 class="mb-4 fw-bold">Hot Topics</h1>
      
          <x-news-intro/>

          <div class="row d-flex align-items-center">
            <h3 class="fw-bold mb-3">Latest News</h3>

            @foreach ($newsportals as $newsportal)
                <x-media-card :media="$newsportal" />
            @endforeach
        </div>
        
    </div>

    </div>

@endsection