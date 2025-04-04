<?php include('h.php'); ?> <style>
  .location-card {
    display: flex;
    align-items: center;
    background: white;
    border-radius: 50px;
    padding: 15px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out;
    position: relative;
    height: 150px;
  }

  .location-card:hover {
    transform: scale(1.05);
  }

  .location-img {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    object-fit: cover;
    margin-right: 15px;
  }

  .location-details {
    flex-grow: 1;
  }

  .location-details p {
    margin: 0;
    font-size: 14px;
    color: #333;
  }

  .location-details i {
    color: #eab308;
    margin-right: 8px;
  }

  .arrow-btn {
    background: #eab308;
    border: none;
    border-radius: 50%;
    width: 60px;
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 16px;
    cursor: pointer;
    position: absolute;
    right: -30px;
  }

  .arrow-btn:hover {
    background: #c29808;
  }

  @media (max-width : 768px) {
    .arrow-btn {
      background: #eab308;
      border: none;
      border-radius: 50%;
      width: 40px;
      height: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 16px;
      cursor: pointer;
      position: absolute;
      right: -3%;
    }

  }
</style>
<!-- Hero Sectin Start -->
<section class="section contact-hero-padding-responsive container-fluid contract-hero ">
  <div class="container d-flex flex-column h-100  justify-content-center text-center w-100">
    <div class="contract-hero-content">
      <h4 class="fs-4 fw-bold">Get Hitch-Free Experience! </h4>
      <h1 class="display-3 fw-bolder">Contact <span class="text-warning"> Us</span>
      </h1>
      <h4 class="fs-5 fw-semibold">We'd love to hear from you and provide assistance for all your car servicing needs.</h4>
    </div>
  </div>
</section>
<!-- Hero Sectin End -->
<!-- Form Section Start -->
<section>
  <div class="container">
    <div class="gap-4 justify-content-center row">
      <!-- <div class="bg-white col-md-4 rounded-4 shadow" style="padding: 35px;">
        <div>
          <h4>Talk to our team today to:</h4>
          <br />
          <span style="font-size: medium;" class="fw-light lh-sm">Our experts will provide tailored solutions to ensure efficient and secure cloud operations for your organization.</span>
          <br />
        </div>
        <div>
          <br />
          <ul class="gap-2 lh-base list-group list-inline">
            <li>
              <i class="fa-circle-check fa-solid text-warning"></i> Understand how our API product may fulfill your needs
            </li>
            <li>
              <i class="fa-circle-check fa-solid text-warning"></i> Understand how our API product may fulfill your needs
            </li>
            <li>
              <i class="fa-circle-check fa-solid text-warning"></i> Understand how our API product may fulfill your needs
            </li>
            <li>
              <i class="fa-circle-check fa-solid text-warning"></i> Understand how our API product may fulfill your needs
            </li>
            <li>
              <i class="fa-circle-check fa-solid text-warning"></i> Understand how our API product may fulfill your needs
            </li>
          </ul>
        </div>
      </div> -->
      <div class="col-md-12 bg-white p-4 rounded-3 shadow">
        <h3 class="fw-bolder">Talk to our <span class="text-warning"> team today</span></h3>
        <form class="container py-4">

          <div class="row g-3">
            <!-- First Name -->
            <div class="col-md-6">
              <label for="first-name" class="form-label">First Name</label>
              <input type="text" id="first-name" class="form-control"
                placeholder="Enter your first name">
            </div>

            <!-- Last Name -->
            <div class="col-md-6">
              <label for="last-name" class="form-label">Last Name</label>
              <input type="text" id="last-name" class="form-control"
                placeholder="Enter your last name">
            </div>

            <!-- Phone Number -->
            <div class="col-md-12">
              <label for="phone-number" class="form-label">Phone Number</label>
              <input type="tel" id="phone-number" class="form-control"
                placeholder="Enter your phone number">
            </div>

            <!-- Email -->
            <div class="col-md-12">
              <label for="email" class="form-label">Work Email Address</label>
              <input type="email" id="email" class="form-control" placeholder="Enter your email">
            </div>

            <!-- Car Model -->
            <div class="col-md-4">
              <label for="car-model" class="form-label">Car Model</label>
              <input type="text" id="car-model" class="form-control" placeholder="Enter car model">
            </div>

            <!-- Cylinders -->
            <div class="col-md-8">
              <label for="cylinders" class="form-label">No. of Cylinders</label>
              <select id="cylinders" class="form-select">
                <option selected disabled>Select Cylinders</option>
                <option value="2">2 Cylinders</option>
                <option value="4">4 Cylinders</option>
                <option value="6">6 Cylinders</option>
                <option value="8">8 Cylinders</option>
              </select>
            </div>

            <!-- Select a Concern -->
            <div class="col-md-12">
              <label for="concern" class="form-label">Select A Concern</label>
              <select id="concern" class="form-select">
                <option selected disabled>Select Concern</option>
                <option value="service">Service Issue</option>
                <option value="billing">Billing Problem</option>
                <option value="support">Technical Support</option>
                <option value="other">Other</option>
              </select>
            </div>

            <!-- Submit Button -->
            <div class="col-md-12">
              <button type="submit" class="btn fs-6 mx-auto w-75 w-md-25">
                Submit
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>

  </div>
</section>
<!-- Form Section End -->
<!-- location Sectin  Start-->
<section>
  <div class="container">
    <h3 class="fw-bolder fs-3">Our <span class="text-warning"> Locations:</span>
      <div class="row justify-content-center">

        <!-- Card 1 -->
        <div class="col-md-4 m-2">
          <div class="location-card">
            <img src="assets/img/location-1.png" class="location-img" alt="Location 1">
            <div class="location-details">
              <p>
                <i class="fas fa-map-marker-alt"></i> 16 29th St-Al Quoz Industrial Area<br /> 4 - Dubai
              </p>
              <p>
                <a href="tel:+971 56 545 8853" target="_blank"><i class="fas fa-phone"></i> +971 56 545 8853</a>
              </p>
            </div>
            <button class="arrow-btn">
              <i class="fas fa-chevron-right"></i>
            </button>
          </div>
        </div>
        <!-- Card 2 -->
        <div class="col-md-4 m-2">
          <div class="location-card">
            <img src="assets/img/location-2.png" class="location-img" alt="Location 2">
            <div class="location-details">
              <p>
                <i class="fas fa-map-marker-alt"></i> 25.121845 - 55.239942 - Al Quoz Industrial Area 4 - Dubai
              </p>
              <p>
                <a href="tel:+971 56 545 8853" target="_blank"><i class="fas fa-phone"></i> +971 56 545 8853</a>
              </p>
            </div>
            <button class="arrow-btn">
              <i class="fas fa-chevron-right"></i>
            </button>
          </div>
        </div>
        <!-- Card 3 -->
        <div class="col-md-4 m-2">
          <div class="location-card">
            <img src="assets/img/location-3.png" class="location-img" alt="Location 3">
            <div class="location-details">
              <p>
                <i class="fas fa-map-marker-alt"></i> 208 Amman St - Al Qusais<br /> Industrial Area 4 - Dubai
              </p>
              <p>
                <a href="tel:+971 56 545 8853" target="_blank"><i class="fas fa-phone"></i> +971 56 545 8853</a>
              </p>
            </div>
            <button class="arrow-btn">
              <i class="fas fa-chevron-right"></i>
            </button>
          </div>
        </div>
        <!-- Card 4 -->
        <div class="col-md-4 m-2">
          <div class="location-card">
            <img src="assets/img/location-3.png" class="location-img" alt="Location 3">
            <div class="location-details">
              <p>
                <i class="fas fa-map-marker-alt"></i>Abu Amr Al Basri St - Al Rahmaniya Suburb - Kshishah 6 - Sharjah, <br /> Entrance C. Basement Level
              </p>
              <p>
                <a href="tel:+971 56 545 8853" target="_blank"><i class="fas fa-phone"></i> +971 56 545 8853</a>
              </p>
            </div>
            <button class="arrow-btn">
              <i class="fas fa-chevron-right"></i>
            </button>
          </div>
        </div>
      </div>
  </div>
</section>
<!-- location Sectin  End-->
<!-- Ifram Sectin  Start -->
<div class="container py-4" style="height: 75vh;">
  <div class="h-100 w-100 mt-4">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3612.7654729905844!2d55.22656!3d25.109799099999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6957dcc6da79%3A0x17d16321848b8d94!2s16%2029th%20St%20-%20Al%20Quoz%20-%20Al%20Quoz%20Industrial%20Area%204%20-%20Dubai%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2s!4v1741388163770!5m2!1sen!2s" frameborder="0" class="h-100 rounded-4 w-100"></iframe>
  </div>
</div>
<br />
<!-- Ifram Sectin  End -->

<!-- sticky-icons Section Start -->
<?php include('sticky-icons.php'); ?>

<!-- sticky-icons Section End -->
<!-- sticky-icons Section Start -->

<?php include('sticky-icons-mobile.php'); ?>


<!-- sticky-icons Section End -->
<?php include('f-new.php'); ?>