<div>

    <div class="row d-flex align-items-center justify-content-center mb-4 p-5 text-dark">
        @foreach ($icons as $icon)
            <div class="col-auto mb-4">
                <div class="d-flex justify-content-center align-items-center position-relative" style="width: 110px; height: 110px;">
                    <!-- SVG Icon -->
                    <svg width="110" height="110" viewBox="0 0 110 110" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="55" cy="55" r="55" fill="#D9D9D9"/>
                    </svg>
              
                    <!-- Image (positioned absolutely within the container) -->
                    <img src="{{ asset($icon['image']) }}" alt="{{ $icon['alt'] }}" class="position-absolute" style="width:80%; height: auto; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                </div>
            </div>
        @endforeach
    </div>
    

</div>
