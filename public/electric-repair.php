<?php include('h.php'); ?>
<style>
    .service-card {
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: transform 0.3s ease-in-out;
    }

    .service-card:hover {
        transform: translateY(-5px);
    }

    .service-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .tip-card {
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
        text-align: center;
        padding: 20px;
    }

    .tip-card:hover {
        transform: translateY(-5px);
    }

    .tip-card img {
        width: 80%;
        margin-bottom: 15px;
    }

    .tip-title {
        font-weight: bold;
        font-size: 18px;
    }

    .tip-highlight {
        color: #F5A623;
        /* Yellow Highlight */
    }

    .form-bg-ew {
        position: relative;
        overflow: hidden;
        /* Ensure scaling effect doesn't overflow */
    }

    .form-bg-ew::before {
        content: "";
        position: absolute;
        top: 10%;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('assets/img/image 788.png') no-repeat center center/cover;
        transform: scale(0.9);
        transform-origin: center;
        z-index: -1;
    }
</style>
<!-- Body Content Start Here -->

<!-- Electric Hero Section Start -->

<section class="container-fluid all-pages-hero-height-responsive vh-100 electric-car-bg section overflow-hidden">
    <div class="container d-flex align-items-center h-100">
        <div class="row align-items-center white">
            <div class="col-md-6">
                <div class="experiecne-top-content">
                    <h2 class="display-3 electric-repair-hero-heading-font-size-responsive fw-bold">
                        <span class="secondary-color ">Safeguard Your Car's Electricals </span> With Our Expertise
                    </h2>
                    <p class="fs-6 fw-semibold lh-sm text-secondary">Delivering exceptional car care services for your peace of mind on every mile
                    </p>
                    <span class="d-flex flex-column flex-md-row gap-4">
                        <a href="tel:+971 56 545 8853" target="_blank"><button class="btn fw-semibold rounded-3 text-black fs-6">Call Now</button></a>
                        <button class="transparent-btn">Our Services</button>
                    </span>
                </div>
            </div>
            <div class="col-md-6">
                <img src="assets/img/coche_electrico2 1.png" alt="" style="max-width: 155%;" />
            </div>
        </div>
    </div>
</section>
<!-- Electric Hero Section End -->


<!-- Electric About Section start -->
<section class="section container-fluid  form-bg-ew">
    <div class="container d-flex flex-column h-100 justify-content-center text-center w-100">
        <div class="">
            <h1 class="fw-bolder display-4 electric-repair-About-heading-font-size-responsive">Dealership Quality Services At <span
                    class="text-warning">Competitive Prices! Contract!</span>
            </h1>
            <h4 class="fs-4 fw-bold">Book Gargash Car Workshop</h4>
        </div>
        <div class="contact-form-section">
            <div class="row align-items-center justify-content-center dark">
                <div class="col-lg-5">
                    <?php include('form.PHP'); ?>

                </div>

            </div>
        </div>
    </div>

</section>
<!-- Electric About Section End -->

<!-- Luxury Section Start -->

<section>
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card service-card">
                    <img src="assets/img/image-1.png" alt="Engine Control Unit">
                    <div class="card-body text-center">
                        <h5 class="fw-bold">Engine Control Unit</h5>
                        <p class="text-muted">Unleash your car’s peak performance as our certified technicians ensure
                            your ignition modules and all electrical features.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card service-card">
                    <img src="assets/img/image-2.png" alt="Programming">
                    <div class="card-body text-center">
                        <h5 class="fw-bold">Programming</h5>
                        <p class="text-muted">We have the technology, expertise and experience to keep the programming
                            system of your car updated and worry-free.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card service-card">
                    <img src="assets/img/image-3.png" alt="Navigation Update">
                    <div class="card-body text-center">
                        <h5 class="fw-bold">Navigation Update</h5>
                        <p class="text-muted">We provide our customers with the finest navigation experience through
                            accurate updates.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card service-card">
                    <img src="assets/img/image-4.png" alt="AC System Check">
                    <div class="card-body text-center">
                        <h5 class="fw-bold">AC System Check</h5>
                        <p class="text-muted">Our experts will ensure your car’s AC helps you beat the heat
                            and ensures your comfort.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card service-card">
                    <img src="assets/img/image-5.png" alt="Central Locking System Check">
                    <div class="card-body text-center">
                        <h5 class="fw-bold">Central Locking System Check</h5>
                        <p class="text-muted">We diagnose with precision so you can enjoy a secure and hassle-free
                            drive.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card service-card">
                    <img src="assets/img/image-6.png" alt="Ignition System Check">
                    <div class="card-body text-center">
                        <h5 class="fw-bold">Ignition System Check</h5>
                        <p class="text-muted">Our certified technicians inspect and repair all the components related to
                            the ignition system.</p>
                    </div>
                </div>
            </div>
        </div>
</section>

<!-- Luxury Section End -->



<section class="pt-0">
    <div class="container py-0 py-md-5">
        <h2 class="text-center fw-bold">Car Care <span class="tip-highlight">Tips</span></h2>
        <div class="row g-4 mt-4">

            <div class="col-md-3">
                <div class="tip-card border p-3">
                    <img src="assets/img/image 719.png" alt="Air Conditioner">
                    <h5 class="tip-title">Air Conditioner</h5>
                    <p class="text-muted">Regularly test your car's air conditioning system to ensure that control and keeps you cool
                        and
                        fresh.</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="tip-card border p-3">
                    <img src="assets/img/image 784.png" style="height: 180px;" alt="Car Polishing">
                    <h5 class="tip-title">Car Polishing</h5>
                    <p class="text-muted">Get your car polished after washing to restore its original shine and luster.
                    </p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="tip-card border p-3">
                    <img src="assets/img/image 785.png" alt="Battery Check">
                    <h5 class="tip-title">Battery Check</h5>
                    <p class="text-muted">Ensure a timely check of your car's battery life and avoid to the unexpected failures.</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="tip-card border p-3">
                    <img src="assets/img/image 786.png" style="height: 180px;" alt="Fuel Efficiency">
                    <h5 class="tip-title">Fuel Efficiency</h5>
                    <p class="text-muted">Maintain proper tire pressure to improve safety and enhance fuel efficiency.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Tips Section Start -->


<!-- sticky-icons Section Start -->
<?php include('sticky-icons.php'); ?>

<!-- sticky-icons Section End -->
 <!-- sticky-icons Section Start -->

<?php include('sticky-icons-mobile.php'); ?>


<!-- sticky-icons Section End -->

<?php include('f-new.php'); ?>