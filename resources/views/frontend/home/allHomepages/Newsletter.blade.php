<div class="container-fluid newsletter mt-6 wow fadeIn" data-wow-delay="0.1s">
    <div class="container pb-5">
        <div class="bg-white p-5 mb-5">
            <div class="row g-5">
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="display-6 text-uppercase mb-4">Newsletter</h1>
                    <div class="d-flex">
                        <i class="far fa-envelope-open fa-3x text-primary me-4"></i>
                        <p class="fs-5 fst-italic mb-0">
                            Dolores sed duo clita tempor justo dolor et stet lorem kasd labore lorem ipsum.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.5s">
                    <form action="#" method="POST">
                        @csrf
                        <div class="form-floating mb-3">
                            <input 
                                type="email" 
                                name="email" 
                                class="form-control border-0 bg-light" 
                                id="email" 
                                placeholder="Your Email"
                                required
                            >
                            <label for="email">Your Email</label>
                        </div>
                        <button class="btn btn-primary w-100 py-3" type="submit">Submit Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
