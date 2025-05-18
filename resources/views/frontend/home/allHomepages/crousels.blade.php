<div class="container-fluid p-0 mb-6 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1">
                <img class="img-fluid" src="{{ asset('assets/img/carousel-1.jpg') }}" alt="Slide 1">
            </button>
            <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="1" aria-label="Slide 2">
                <img class="img-fluid" src="{{ asset('assets/img/carousel-2.jpg') }}" alt="Slide 2">
            </button>
            <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="2" aria-label="Slide 3">
                <img class="img-fluid" src="{{ asset('assets/img/carousel-3.jpg') }}" alt="Slide 3">
            </button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{ asset('assets/img/carousel-1.jpg') }}" alt="Slide 1">
                <div class="carousel-caption">
                    <h5 class="display-1 text-uppercase text-white mb-4 animated zoomIn">Embedded Systems Solutions</h5>
                    <a href="{{ route('services.embedded_systems') }}" class="btn btn-primary py-3 px-4">Explore More</a>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{ asset('assets/img/carousel-2.jpg') }}" alt="Slide 2">
                <div class="carousel-caption">
                    <h5 class="display-1 text-uppercase text-white mb-4 animated zoomIn">HVAC System Solutions</h5>
                    <a href="{{ route('services.hvac_solutions') }}" class="btn btn-primary py-3 px-4">Explore More</a>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{ asset('assets/img/carousel-2.jpg') }}" alt="Slide 2">
                <div class="carousel-caption">
                    <h5 class="display-1 text-uppercase text-white mb-4 animated zoomIn">HVAC System Solutions</h5>
                    <a href="{{ route('services.hvac_solutions') }}" class="btn btn-primary py-3 px-4">Explore More</a>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{ asset('assets/img/carousel-3.jpg') }}" alt="Slide 3">
                <div class="carousel-caption">
                    <h5 class="display-1 text-uppercase text-white mb-4 animated zoomIn">Software Development Solutions</h5>
                    <a href="{{ route('services.software_development') }}" class="btn btn-primary py-3 px-4">Explore More</a>
                </div>
            </div>
        </div>
    </div>
</div>
