<?php
// Get the current page URL
$currentUrl = $_SERVER['REQUEST_URI'];
?>

<!DOCTYPE html>
<html lang="en">
<!---------------------------------------head---------------------------------------------------->

<head>
  <title>Joyful Paws | Check up service</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="author" content="">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="icon" href="images/Paws.png">
  <style>
    #phone {
      max-width: fit-content;
      outline: 0;
    }

    #phone:valid {
      border-color: #15495F;
    }

    #phone:focus:invalid {
      border-color: #C63710;
    }

    #bookBtn {
      padding: 12px 70px;
      font-size: larger;
    }
  </style>
  <link rel="stylesheet" href="css/swiper.css" />
  <link rel="stylesheet" href="css/bootstrap.css" />

  <link rel="stylesheet" type="text/css" href="css/vendor.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Chilanka&family=Montserrat:wght@300;400;500&display=swap"
    rel="stylesheet">

    <script>
        // Get the current page URL
        var currentUrl = window.location.href;
        // You can now use 'currentUrl' in your JavaScript code
    </script>
</head>
<!---------------------------------------body---------------------------------------------------->

<body>
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <defs>
      <symbol xmlns="http://www.w3.org/2000/svg" id="link" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M12 19a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm5 0a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm0-4a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm-5 0a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm7-12h-1V2a1 1 0 0 0-2 0v1H8V2a1 1 0 0 0-2 0v1H5a3 3 0 0 0-3 3v14a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V6a3 3 0 0 0-3-3Zm1 17a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-9h16Zm0-11H4V6a1 1 0 0 1 1-1h1v1a1 1 0 0 0 2 0V5h8v1a1 1 0 0 0 2 0V5h1a1 1 0 0 1 1 1ZM7 15a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm0 4a1 1 0 1 0-1-1a1 1 0 0 0 1 1Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="arrow-right" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M17.92 11.62a1 1 0 0 0-.21-.33l-5-5a1 1 0 0 0-1.42 1.42l3.3 3.29H7a1 1 0 0 0 0 2h7.59l-3.3 3.29a1 1 0 0 0 0 1.42a1 1 0 0 0 1.42 0l5-5a1 1 0 0 0 .21-.33a1 1 0 0 0 0-.76Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="category" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M19 5.5h-6.28l-.32-1a3 3 0 0 0-2.84-2H5a3 3 0 0 0-3 3v13a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3v-10a3 3 0 0 0-3-3Zm1 13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-13a1 1 0 0 1 1-1h4.56a1 1 0 0 1 .95.68l.54 1.64a1 1 0 0 0 .95.68h7a1 1 0 0 1 1 1Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="calendar" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M19 4h-2V3a1 1 0 0 0-2 0v1H9V3a1 1 0 0 0-2 0v1H5a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3Zm1 15a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-7h16Zm0-9H4V7a1 1 0 0 1 1-1h2v1a1 1 0 0 0 2 0V6h6v1a1 1 0 0 0 2 0V6h2a1 1 0 0 1 1 1Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="heart" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M20.16 4.61A6.27 6.27 0 0 0 12 4a6.27 6.27 0 0 0-8.16 9.48l7.45 7.45a1 1 0 0 0 1.42 0l7.45-7.45a6.27 6.27 0 0 0 0-8.87Zm-1.41 7.46L12 18.81l-6.75-6.74a4.28 4.28 0 0 1 3-7.3a4.25 4.25 0 0 1 3 1.25a1 1 0 0 0 1.42 0a4.27 4.27 0 0 1 6 6.05Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="plus" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M19 11h-6V5a1 1 0 0 0-2 0v6H5a1 1 0 0 0 0 2h6v6a1 1 0 0 0 2 0v-6h6a1 1 0 0 0 0-2Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="minus" viewBox="0 0 24 24">
        <path fill="currentColor" d="M19 11H5a1 1 0 0 0 0 2h14a1 1 0 0 0 0-2Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="cart" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M8.5 19a1.5 1.5 0 1 0 1.5 1.5A1.5 1.5 0 0 0 8.5 19ZM19 16H7a1 1 0 0 1 0-2h8.491a3.013 3.013 0 0 0 2.885-2.176l1.585-5.55A1 1 0 0 0 19 5H6.74a3.007 3.007 0 0 0-2.82-2H3a1 1 0 0 0 0 2h.921a1.005 1.005 0 0 1 .962.725l.155.545v.005l1.641 5.742A3 3 0 0 0 7 18h12a1 1 0 0 0 0-2Zm-1.326-9l-1.22 4.274a1.005 1.005 0 0 1-.963.726H8.754l-.255-.892L7.326 7ZM16.5 19a1.5 1.5 0 1 0 1.5 1.5a1.5 1.5 0 0 0-1.5-1.5Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="check" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M18.71 7.21a1 1 0 0 0-1.42 0l-7.45 7.46l-3.13-3.14A1 1 0 1 0 5.29 13l3.84 3.84a1 1 0 0 0 1.42 0l8.16-8.16a1 1 0 0 0 0-1.47Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="trash" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M10 18a1 1 0 0 0 1-1v-6a1 1 0 0 0-2 0v6a1 1 0 0 0 1 1ZM20 6h-4V5a3 3 0 0 0-3-3h-2a3 3 0 0 0-3 3v1H4a1 1 0 0 0 0 2h1v11a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8h1a1 1 0 0 0 0-2ZM10 5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v1h-4Zm7 14a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V8h10Zm-3-1a1 1 0 0 0 1-1v-6a1 1 0 0 0-2 0v6a1 1 0 0 0 1 1Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="star-outline" viewBox="0 0 15 15">
        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
          d="M7.5 9.804L5.337 11l.413-2.533L4 6.674l2.418-.37L7.5 4l1.082 2.304l2.418.37l-1.75 1.793L9.663 11L7.5 9.804Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="star-solid" viewBox="0 0 15 15">
        <path fill="currentColor"
          d="M7.953 3.788a.5.5 0 0 0-.906 0L6.08 5.85l-2.154.33a.5.5 0 0 0-.283.843l1.574 1.613l-.373 2.284a.5.5 0 0 0 .736.518l1.92-1.063l1.921 1.063a.5.5 0 0 0 .736-.519l-.373-2.283l1.574-1.613a.5.5 0 0 0-.283-.844L8.921 5.85l-.968-2.062Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="search" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39ZM11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="user" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M15.71 12.71a6 6 0 1 0-7.42 0a10 10 0 0 0-6.22 8.18a1 1 0 0 0 2 .22a8 8 0 0 1 15.9 0a1 1 0 0 0 1 .89h.11a1 1 0 0 0 .88-1.1a10 10 0 0 0-6.25-8.19ZM12 12a4 4 0 1 1 4-4a4 4 0 0 1-4 4Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="close" viewBox="0 0 15 15">
        <path fill="currentColor"
          d="M7.953 3.788a.5.5 0 0 0-.906 0L6.08 5.85l-2.154.33a.5.5 0 0 0-.283.843l1.574 1.613l-.373 2.284a.5.5 0 0 0 .736.518l1.92-1.063l1.921 1.063a.5.5 0 0 0 .736-.519l-.373-2.283l1.574-1.613a.5.5 0 0 0-.283-.844L8.921 5.85l-.968-2.062Z" />
      </symbol>

    </defs>
  </svg>

  <!-- code deleted-->

  <!---------------------------------------header---------------------------------------------------->

  <header>
    <div class="container py-2">
      <div class="row py-4 pb-0 pb-sm-4 align-items-center ">

        <div class="col-sm-4 col-lg-3 text-center text-sm-start">
          <div class="main-logo">
            <a href="index.php">
              <img src="images/joyfulPawsLogo.png" alt="logo" class="img-fluid">
            </a>
          </div>
        </div>

      </div>
    </div>

    <div class="container-fluid">
      <hr class="m-0">
    </div>

    <div class="container">
      <nav class="main-menu d-flex navbar navbar-expand-lg ">

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

          <div class="offcanvas-header justify-content-center">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>

          <div class="offcanvas-body justify-content-between">


            <ul class="navbar-nav menu-list list-unstyled d-flex gap-md-3 mb-0">
              <li class="nav-item">
                <a href="index.php" class="nav-link active">Home</a>
              </li>
              <li class="nav-item">
                <a href="index.php#register" class="nav-link">About Us</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" id="pages" data-bs-toggle="dropdown"
                  aria-expanded="false">Services</a>
                <ul class="dropdown-menu" aria-labelledby="pages">
                  <li><a href="#" class="dropdown-item">Pet spa</a></li>
                  <li><a href="adoptionform.php" class="dropdown-item">Adoption</a></li>
                  <li><a href="medical-services.php" class="dropdown-item">Medical services</a></li>
                  <li><a href="Emergency.php" class="dropdown-item">Emergency care</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="SuppliesShop.php" class="nav-link">Supplies shop</a>
              </li>
              <li class="nav-item">
                <a href="customerExperiences.php" class="nav-link">Customer experiences</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link fw-bold text-dark">JOIN US</a>
              </li>
            </ul>

            <div
              class="col-sm-8 col-lg-4 d-flex justify-content-end gap-5 align-items-center mt-4 mt-sm-0 justify-content-center justify-content-sm-end">
              <div class="social-links">
                <ul class="d-flex list-unstyled gap-2">
                  <li class="social">
                    <a href="#">
                      <iconify-icon class="social-icon" icon="ri:facebook-fill"></iconify-icon>
                    </a>
                  </li>
                  <li class="social">
                    <a href="#">
                      <iconify-icon class="social-icon" icon="ri:twitter-fill"></iconify-icon>
                    </a>
                  </li>
                  <li class="social">
                    <a href="#">
                      <iconify-icon class="social-icon" icon="ri:pinterest-fill"></iconify-icon>
                    </a>
                  </li>
                  <li class="social">
                    <a href="#">
                      <iconify-icon class="social-icon" icon="ri:instagram-fill"></iconify-icon>
                    </a>
                  </li>
                  <li class="social">
                    <a href="#">
                      <iconify-icon class="social-icon" icon="ri:youtube-fill"></iconify-icon>
                    </a>
                  </li>

                </ul>
              </div>
            </div>
          </div>
        </div>

      </nav>



    </div>
  </header>
  <!---------------------------------------page contents---------------------------------------------------->
  <!---------------------------------------topic---------------------------------------------------->
  <section id="banner" class="py-3" style="background: #F9F3EC;">
    <div class="container">
      <div class="hero-content py-5 my-3">
        <h2 class="display-1 mt-3 mb-0">Check-up <span class="text-primary"> Service</span></h2>
        <nav class="breadcrumb">
          <a class="breadcrumb-item nav-link" href="index.php">Home</a>
          <a class="breadcrumb-item nav-link" href="index.php">Services</a>
          <span class="breadcrumb-item active" aria-current="medical-services.php">Medical Services</span>
          <span class="breadcrumb-item active" aria-current="page">Check-up Service</span>
        </nav>
      </div>
    </div>
  </section>
  <!---------------------------------------images---------------------------------------------------->
  <section id="selling-product">
    <div class="container my-md-5 py-5">
      <div class="row g-md-5">
        <div class="col-lg-6">
          <div class="row">
            <div class="col-md-12">
              <!-- product-large-slider -->
              <div class="swiper product-large-slider">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img src="images/checkUp4.jpg" class="img-fluid" />
                  </div>
                  <div class="swiper-slide">
                    <img src="images/checkUp1.jpg" class="img-fluid" />
                  </div>
                  <div class="swiper-slide">
                    <img src="images/checkUp03.jpg" class="img-fluid" />
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 mt-2">
              <!-- product-thumbnail-slider -->
              <div thumbsSlider="" class="swiper product-thumbnail-slider">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img src="images/checkUp4.jpg" class="img-fluid" />
                  </div>
                  <div class="swiper-slide">
                    <img src="images/checkUp1.jpg" class="img-fluid" />
                  </div>
                  <div class="swiper-slide">
                    <img src="images/checkUp03.jpg" class="img-fluid" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mt-5 ">
          <div class="product-info">
            <div class="element-header">
              <!---------------------------------------Form section---------------------------------------------------->
              <h2 itemprop="name" class="display-6">Pet Insurance</h2>
            </div>
            <div class="product-price pt-3 pb-3">
              <strong class="text-primary display-6 fw-bold">100.00 SAR</strong><del class="ms-2"></del>
              <div class="rating-container d-flex gap-0 align-items-center">
                <span class="rating secondary-font">
                  <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                  <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                  <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                  <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                  <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                  5.0</span>
              </div>
            </div>
            <p>Even if a pet seems healthy, there may be underlying health issues
              that are not readily apparent. Through physical exams and diagnostic tests,
              veterinarians can identify early signs of disease or conditions that may not be obvious to you.
            </p>

            <div>
              <h2>Book an appointment</h2>
            </div>
            <form action="sarahInsert.php" method="post">
              <div class="form-group">
                <label class="control-label" for="name">Pet's name</label>
                <input id="name" name="petName" type="text" placeholder="Name" required class="form-control input-md">
              </div>
              <br>
              <div class="form-group">
                <label for="contactInfo">Phone number (for contact)</label>
                <div class="input-group">
                  <span class="input-group-text" id="basic-addon1">+966</span>
                  <input type="tel" id="phone" name="contactInfo" placeholder="50-000-0000" required
                    pattern="[0-9]{2}[0-9]{3}[0-9]{4}">
                </div>
              </div>
              <br>
              <div class="form-group">
                <label for="ControlSelect">Kind of pet</label>
                <select class="form-control" name="petType" required>
                  <option value="">Select your pet type</option>
                  <option value="Cat">Cat</option>
                  <option value="Dog">Dog</option>
                  <option value="Rabbit">Rabbit</option>
                </select>
              </div>
              <br>
              <div>
                <label for="petGender">Pet's gender</label>
                <div class="form-group">
                  <input class="form-check-input" type="radio" name="petGender" value="Male" required>
                  <label class="form-check-label" for="malebtn">
                    Male
                  </label>
                </div>
                <div class="form-group">
                  <input class="form-check-input" type="radio" name="petGender" value="Female" required>
                  <label class="form-check-label" for="femalebtn">
                    Female
                  </label>
                </div>
                <br>
                <div class="form-group">
                  <label for="">Appointment date & time</label>
                  <input type="date" name="appointmentDate" class="form-control" id="date" placeholder="YYYY-MM-DD"
                    required>

                  <select class="form-control" id="ControlSelect" name="appointmentTime" required>
                    <option value="">Select your preferred time </option>
                    <option value="8 am">8 am</option>
                    <option value="9 am">9 am</option>
                    <option value="10 am">10 am</option>
                    <option value="11 am">11 am</option>
                    <option value="12 pm">12 pm</option>
                    <option value="1 pm">1 pm</option>
                    <option value="2 pm">2 pm</option>
                    <option value="3 pm">3 pm</option>
                    <option value="4 pm">4 pm</option>
                    <option value="5 pm">5 pm</option>
                    <option value="6 pm">6 pm</option>
                    <option value="7 pm">7 pm</option>
                    <option value="8 pm">8 pm</option>
                    <option value="9 pm">9 pm</option>
                    <option value="10 pm">10 pm</option>
                    <option value="11 pm">11 pm</option>
                    <option value="12 am">12 am</option>
                    <option value="1 am">1 am</option>
                    <option value="2 am">2 am</option>

                  </select>
                </div>
              </div>
              <br>
              <div class="form-group">
                <label for="addInfo">Additionl notes you'd like to add</label>
                <textarea class="form-control" name="addInfo" id="addInfo" rows="3"></textarea>
              </div>
              <br>
              <div class="form-group mb-3">
                <button type="submit" class="btn btn-primary" name="CUToDB" id="bookBtn"> Book </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
    </div>
    </div>
  </section>
  <!---------------------------------------describtions section---------------------------------------------------->
  <section class="product-info-tabs py-md-5">
    <div class="container">
      <div class="row">
        <div class="d-flex flex-column flex-md-row align-items-start gap-5">
          <div class="nav flex-row flex-wrap flex-md-column nav-pills me-3 col-lg-3" id="v-pills-tab" role="tablist"
            aria-orientation="vertical">
            <button class="nav-link fs-5 mb-2 text-start active" id="v-pills-description-tab" data-bs-toggle="pill"
              data-bs-target="#v-pills-description" type="button" role="tab" aria-controls="v-pills-description"
              aria-selected="false" tabindex="-1">Description</button>
            <button class="nav-link fs-5 mb-2 text-start" id="v-pills-additional-tab" data-bs-toggle="pill"
              data-bs-target="#v-pills-additional" type="button" role="tab" aria-controls="v-pills-additional"
              aria-selected="true" tabindex="-1">Instructions</button>
          </div>
          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade active show" id="v-pills-description" role="tabpanel"
              aria-labelledby="v-pills-description-tab" tabindex="0">
              <h2>Pet Check-up Process</h2>
              <p>When you bring your beloved pet in for a check-up at our clinic,
                our dedicated team of veterinarians and veterinary technicians is committed
                to providing comprehensive care tailored to your pet's individual needs.
                <br> Here's what you can expect during the check-up process:
              </p>
              <ul style="list-style-type:disc;" class="list-unstyled ps-4">
                <li><b>Welcome & Paperwork:</b> Reception staff greets you and helps with paperwork.</li>
                <li><b>Health History Review:</b> Vet reviews your pet's medical history.</li>
                <li><b>Physical Examination:</b> Vet conducts a thorough check-up, assessing various health aspects.
                </li>
                <li><b>Diagnostic Tests (if needed):</b> Additional tests recommended based on findings.</li>
                <li><b>Preventive Care Recommendations:</b> Personalized advice on vaccinations, parasite prevention,
                  diet, etc.</li>
                <li><b>Client Education:</b> Open communication, answering questions, and providing guidance.</li>
                <li><b>Follow-up Planning:</b> Schedule any necessary follow-up care or treatments.</li>
              </ul>
            </div>
            <div class="tab-pane fade" id="v-pills-additional" role="tabpanel" aria-labelledby="v-pills-additional-tab"
              tabindex="0">
              <h2>Owner Instructions</h2>
              <p>Here are some informations and instructions that we should inform you of before and after you book an
                appointment with us:
              </p>
              <dl style="list-style-type:disc;" class="list-unstyled ps-4">
                <dt><b>Schedule an Appointment:</b></dt>
                <dd>Schedule via our official website.</dd>
                <dt><b>Bring Records:</b></dt>
                <dd> Bring pet's medical history and vaccination records.</dd>
                <dt><b>Physical Examination:</b></dt>
                <dd>Vet conducts a thorough check-up, assessing various health aspects.</dd>
                <dt><b>Secure Transportation:</b></dt>
                <dd>Use carrier or leash for safety.</dd>
                <dt><b>Be on time for appointment.</b></dt>
                <dt><b>Check In:</b></dt>
                <dd> Provide info to reception upon arrival.</dd>
                <dt><b>Be Patient:</b></dt>
                <dd> Respect wait times and other owners.</dd>
                <dt><b>Follow Vet's Advice:</b></dt>
                <dd> Listen to veterinarian's recommendations.</dd>
                <dt><b>Shaving:</b></dt>
                <dd>During your pet's appointment, we may recommend shaving a portion of their hair for a thorough
                  examination,
                  ensuring their comfort and safety throughout the process.</dd>
              </dl>
              <p>
                Thank you for choosing our clinic. We're here for you and your pet's well-being!
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</body>


<section id="insta" class="my-5">
  <div class="row g-0 py-5">
    <div class="col instagram-item  text-center position-relative">
      <a href="#">
        <img src="images/insta1.jpg" alt="insta-img" class="img-fluid rounded-3">
      </a>
    </div>
    <div class="col instagram-item  text-center position-relative">
      <a href="#">
        <img src="images/insta2.jpg" alt="insta-img" class="img-fluid rounded-3">
      </a>
    </div>
    <div class="col instagram-item  text-center position-relative">
      <a href="#">
        <img src="images/insta3.jpg" alt="insta-img" class="img-fluid rounded-3">
      </a>
    </div>
    <div class="col instagram-item  text-center position-relative">
      <a href="#">
        <img src="images/insta4.jpg" alt="insta-img" class="img-fluid rounded-3">
      </a>
    </div>
    <div class="col instagram-item  text-center position-relative">
      <a href="#">
        <img src="images/insta5.jpg" alt="insta-img" class="img-fluid rounded-3">
      </a>
    </div>
    <div class="col instagram-item  text-center position-relative">
      <a href="#">
        <img src="images/insta6.jpg" alt="insta-img" class="img-fluid rounded-3">
      </a>
    </div>
  </div>
</section>





<footer id="footer" class="my-5">
  <div class="container py-5 my-5">
    <div class="row">
      <div class="col-md-3">
        <div class="footer-menu">
          <img src="images/joyfulPawsLogo.png" alt="logo" class="img-fluid">
          <p class="blog-paragraph fs-6 mt-3">Subscribe to our newsletterto get new updates.</p>
          <div class="social-links">
            <ul class="d-flex list-unstyled gap-2">
              <li class="social">
                <a href="#">
                  <iconify-icon class="social-icon" icon="ri:facebook-fill"></iconify-icon>
                </a>
              </li>
              <li class="social">
                <a href="#">
                  <iconify-icon class="social-icon" icon="ri:twitter-fill"></iconify-icon>
                </a>
              </li>
              <li class="social">
                <a href="#">
                  <iconify-icon class="social-icon" icon="ri:pinterest-fill"></iconify-icon>
                </a>
              </li>
              <li class="social">
                <a href="#">
                  <iconify-icon class="social-icon" icon="ri:instagram-fill"></iconify-icon>
                </a>
              </li>
              <li class="social">
                <a href="#">
                  <iconify-icon class="social-icon" icon="ri:youtube-fill"></iconify-icon>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="footer-menu">
          <h3>Quick Links</h3>
          <ul class="menu-list list-unstyled">
            <li class="menu-item">
              <a href="index.php" class="nav-link">Home</a>
            </li>
            <li class="menu-item">
              <a href="index.php#register" class="nav-link">About us</a>
            </li>
            <li class="menu-item">
              <a href="index.php#categories" class="nav-link">Services</a>
            </li>
            <li class="menu-item">
              <a href="customerExperiences.php" class="nav-link">Customer experiences</a>
            </li>
            <li class="menu-item">
              <a href="#" class="nav-link">JOIN US</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-3">
        <div class="footer-menu">
          <h3>Services</h3>
          <ul class="menu-list list-unstyled">
            <li class="menu-item">
              <a href="#" class="nav-link">Pet spa</a>
            </li>
            <li class="menu-item">
              <a href="adoptionform.php" class="nav-link">Adoption</a>
            </li>
            <li class="menu-item">
              <a href="SuppliesShop.php" class="nav-link">Supplies Shop</a>
            </li>
            <li class="menu-item">
              <a href="medical-services.php" class="nav-link">Medical services</a>
            </li>
            <li class="menu-item">
              <a href="Emergency.php" class="nav-link">Emergency care</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-3">
        <h3>Contacts</h3>
        <div class="support-box d-none d-xl-block">
          <span class="fs-6 primary-font text-muted">Phone</span>
          <h6 class="mb-0">+966 0177440000</h6>
        </div>
        <br>
        <div class="support-box d-none d-xl-block">
          <span class="fs-6 primary-font text-muted">Email</span>
          <h6 class="mb-0">joyfulPaws@gmail.com</h6>
        </div>
      </div>

    </div>
  </div>
</footer>

<div id="footer-bottom">
  <div class="container">
    <hr class="m-0">
    <div class="row mt-3">
      <div class="col-md-6 copyright">
        <p class="secondary-font">© 2023 Waggy. All rights reserved.</p>
      </div>
      <div class="col-md-6 text-md-end">
        <p class="secondary-font">Free HTML Template by <a href="https://templatesjungle.com/" target="_blank"
            class="text-decoration-underline fw-bold text-black-50"> TemplatesJungle</a> </p>
      </div>
    </div>
  </div>
</div>


<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/swiper.js"></script>
<script src="js/bootstrap.bundle.js"></script>
<script src="js/plugins.js"></script>
<script src="js/script.js"></script>
<script src="js/iconify.js"></script>

</html>