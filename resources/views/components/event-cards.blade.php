<div class="col-12 col-sm-6 col-lg-4 mb-4">
    <a href="/events/{{ $event['id'] }}" class="text-decoration-none">
        <div class="card rounded-4 zoom-card">
            <div class="event-image-wrapper">
              
                <img src="{{ asset('storage/event_images/' . $event->image) }}" class="event-image card-img-top rounded-top-4" alt="image" height="350">
            </div>
            
            <div class="card-body">
              <div class="row">
                <div class="col-3 col-lg-2">
                   <span class="fs-6" style="color: #F23E1B">{{ $event['month'] }}</span>  <br/> <span class="fs-2 fw-bold">{{ $event['day'] }}</span>
                </div>
                <div class="col-9 col-lg-10">
                    <h5 class="fw-bold text-truncate">{{ $event['title'] }}</h5>
                    <p class="text-truncate">{{ $event['description'] }}</p>
                </div>
              </div>
            </div>
        </div>
    </a>
</div>
