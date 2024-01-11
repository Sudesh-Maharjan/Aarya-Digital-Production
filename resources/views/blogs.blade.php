@extends('layouts.app')
@section('title')
        Blogs
@endsection
        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('css/blogs.css') }}">
        <!-- Styles -->
    </head>
    @section('content') 
    <div class="container-field" style="background-color: #F5F5F5;">
    </div>
    <div class="container mt-5 ">
      <h2 class="fw-bold mb-5" style="color: #F23E1B">Blogs</h2>

        {{-- horizontal blog card here--}}
        <x-horizontal-blog/>

      {{-- subscribe blog cta --}}
      <x-subscribe-blog/>

      {{-- blog cards --}}
      <x-blog-cards :blogs="$blogs" />
    </div>
    </div>
@endsection
</html>
