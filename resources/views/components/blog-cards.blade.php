<div>
    <div class="row d-flex align-items-center">
        @foreach ($blogs as $blog)
            <div class="col-12 col-sm-6 col-lg-4 mb-4">
                <a href="{{ $blog['link'] }}" class="text-decoration-none">
                    <div class="card border-1 border-black zoom-card">
                        <div class="blog-image-wrapper">
                            <img src="{{ $blog['image_url'] }}" class="blog-image card-img-top" alt="image">
                        </div>
                       
                        <div class="card-body">
                            <span class="p-1 mb-2 text-white" style="background-color: #F23E1B">Ecosystem</span>
                            <h5 class="fw-bold my-4">{{ $blog['title'] }}</h5>
                            <p class="mb-4">{{ $blog['description'] }}</p>
    
                            <div class="mt-4 row d-flex align-items-center">
                                <div class="col-6">
                                    <img src="{{ $blog['author_avatar'] }}" class="rounded-circle border border-primary" alt="avatar">
                                    <span>{{ $blog['author_name'] }}</span>
                                </div>
                                <div class="col-6">
                                    <!-- SVG icon code here if needed -->
                                    <span style="color:#F23E1B">{{ $blog['date'] }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div></div>