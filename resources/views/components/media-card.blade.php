<div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
    <a href="/{{ $media['type'] }}/{{ $media['id'] }}" class="text-decoration-none">
        <div class="card rounded-4 podcast-card">
            <div class="podcast-image-wrapper">
                <img src="{{ $media['image_url'] }}" class="podcast-image card-img-top rounded-2" alt="image">
            </div>
            
            <div class="card-body">
                <h5 class="fw-bold mb-4">{{ $media['title'] }}</h5>
                <div class="flex d-flex justify-content-between">
                    <span>1 hr ago</span> <span>CNN Indonesia</span>
                </div>
            </div>
        </div>
    </a>
</div>
