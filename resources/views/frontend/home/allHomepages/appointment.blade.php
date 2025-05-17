<div class="container-fluid appoinment mt-6 mb-6 py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container pt-5">
        <div class="row gy-5 gx-0">
            <div class="col-lg-6 pe-lg-5 wow fadeIn" data-wow-delay="0.3s">
                <h1 class="display-6 text-uppercase text-white mb-4">
                    We Complete Welding & Metal Projects in Time
                </h1>
                <p class="text-white mb-5 wow fadeIn" data-wow-delay="0.4s">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue, iaculis id elit eget, ultrices pulvinar tortor.
                </p>

                <div class="d-flex align-items-start wow fadeIn" data-wow-delay="0.5s">
                    <div class="btn-lg-square bg-white">
                        <i class="bi bi-geo-alt text-dark fs-3"></i>
                    </div>
                    <div class="ms-3">
                        <h6 class="text-white text-uppercase">Office Address</h6>
                        <span class="text-white">123 Street, New York, USA</span>
                    </div>
                </div>

                <hr class="bg-body">

                <div class="d-flex align-items-start wow fadeIn" data-wow-delay="0.6s">
                    <div class="btn-lg-square bg-white">
                        <i class="bi bi-clock text-dark fs-3"></i>
                    </div>
                    <div class="ms-3">
                        <h6 class="text-white text-uppercase">Office Time</h6>
                        <span class="text-white">Mon-Sat 09am-5pm, Sun Closed</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-n5 wow fadeIn" data-wow-delay="0.7s">
                <div class="bg-white p-5">
                    <h2 class="text-uppercase mb-4">Online Appointment</h2>

                    <form action="{{ route('appointment.store') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" name="name" class="form-control border-0 bg-light" id="name" placeholder="Your Name" required>
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="email" name="email" class="form-control border-0 bg-light" id="mail" placeholder="Your Email" required>
                                    <label for="mail">Your Email</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" name="mobile" class="form-control border-0 bg-light" id="mobile" placeholder="Your Mobile" required>
                                    <label for="mobile">Your Mobile</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <select name="service" class="form-select border-0 bg-light" id="service" required>
                                        <option selected disabled>Select Service</option>
                                        <option value="Steel Welding">Steel Welding</option>
                                        <option value="Pipe Welding">Pipe Welding</option>
                                        <option value="Custom Welding">Custom Welding</option>
                                    </select>
                                    <label for="service">Choose A Service</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea name="message" class="form-control border-0 bg-light" placeholder="Leave a message here" id="message" style="height: 130px" required></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button class="btn btn-primary w-100 py-3" type="submit">Submit Now</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
