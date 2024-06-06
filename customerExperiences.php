<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Joyful Paws | Customer Experiences</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="author" content="">
  <meta name="keywords" content="">
  <meta name="description" content="">

  <!-- Added start -->
  <link rel="icon" href="images/Paws.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <!-- Added end -->

  <link rel="stylesheet" href="css/swiper.css" />
  <link rel="stylesheet" href="css/bootstrap.css" />


  <link rel="stylesheet" type="text/css" href="css/vendor.css">
  <link rel="stylesheet" type="text/css" href="style.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Chilanka&family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

  <style>
    /* a{
        text-decoration: none;
    } */
    #testimonials{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        width:100%;
    }
    .testimonial-heading{
        letter-spacing: 1px;
        margin: 30px 0px;
        padding: 10px 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    
    .testimonial-heading span{
        font-size: 1.3rem;
        color: #252525;
        margin-bottom: 10px;
        letter-spacing: 2px;
        text-transform: uppercase;
    }
    .testimonial-box-container{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        width:100%;
    }
    .testimonial-box{
        width:700px;
        box-shadow: 2px 2px 25px rgba(0,0,0,0.1);
        background-color: #ffffff;
        padding: 20px;
        margin: 15px;
        cursor: pointer;
    }
    .profile-img{
        width:50px;
        height: 50px;
        border-radius: 50%;
        overflow: hidden;
        margin-right: 10px;
    }
    .profile-img img{
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }
    .profile{
        display: flex;
        align-items: center;
    }
    .name-user{
        display: flex;
        flex-direction: column;
    }
    .name-user strong{
        color: #3d3d3d;
        font-size: 1.1rem;
        letter-spacing: 0.5px;
    }
    .name-user span{
        color: #979797;
        font-size: 0.8rem;
    }
    .reviews{
        color: #f9d71c;
    }
    .box-top{
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }
    .client-comment p{
        font-size: 0.9rem;
        color: #4b4b4b;
    }
    
    @media(max-width:1060px){
        .testimonial-box{
            width:45%;
            padding: 10px;
        }
    }
    @media(max-width:790px){
        .testimonial-box{
            width:100%;
        }
        .testimonial-heading h1{
            font-size: 1.4rem;
        }
    }
    @media(max-width:340px){
        .box-top{
            flex-wrap: wrap;
            margin-bottom: 10px;
        }
        .reviews{
            margin-top: 10px;
        }
    }
    ::selection{
        color: #ffffff;
        background-color: #252525;
    }

    /* Rating */
    input.star {
      display: none;
    }

    label.star {
      float: right;
      padding: 10px;
      font-size: 36px;
      color: #4A148C;
      transition: all .2s;
    }

    input.star:checked ~ label.star:before {
      content: '\f005';
      color: #FD4;
      transition: all .25s;
    }

    input.star-5:checked ~ label.star:before {
      color: #FE7;
      text-shadow: 0 0 20px #952;
      animation: shake 0.5s ease;
    }

    input.star-1:checked ~ label.star:before {
      color: #F62;
    }

    label.star:hover {
      transform: rotate(-15deg) scale(1.3);
    }

    @keyframes shake {
      0% { transform: rotate(0); }
      25% { transform: rotate(-10deg); }
      50% { transform: rotate(10deg); }
      75% { transform: rotate(-5deg); }
      100% { transform: rotate(0); }
    }

    .rating {
        float: left;
    }

    .rating label {
        color: #DEDEDE;
        float: right;
        font-size: 2em;
        margin-left: 0.1rem;
    }

    .rating input[type="radio"] {
        display: none;
    }

    .rating input[type="radio"]:checked ~ label {
        color: orange;
    }
  </style>

</head>

<body>

    <?php
    if (isset($_SESSION['message'])) {
        $message = $_SESSION['message'];
        $message_type = $_SESSION['message_type'];
        echo "<div class='alert alert-$message_type' role='alert'>$message</div>";
        unset($_SESSION['message']);
        unset($_SESSION['message_type']);
    }
    ?>



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

  <div class="preloader-wrapper">
    <div class="preloader">
    </div>
  </div>

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
                  <li><a href="adoption.php" class="dropdown-item">Adoption</a></li>
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

            <div class="col-sm-8 col-lg-4 d-flex justify-content-end gap-5 align-items-center mt-4 mt-sm-0 justify-content-center justify-content-sm-end">
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
 
  <section id="banner" class="py-3" style="background: #F9F3EC;">
    <div class="container">
      <div class="hero-content py-5 my-3">
        <h2 class="display-1 mt-3 mb-0">Customer Experience<span class="text-primary">s</span> </h2>
        <nav class="breadcrumb">
          <a class="breadcrumb-item nav-link" href="index.php">Home</a>
          <a class="breadcrumb-item nav-link" href="index.php#categories">Services</a>
          <span class="breadcrumb-item active" aria-current="page">Customer Experiences</span>
        </nav>
      </div>
    </div>
  </section>

  <section class="faqs-wrap">
    <div class="container py-5 my-5">
      <div class="row my-4">
        <div class="inquiry-item">
          <h3 class="section-title mb-3 text-center">Reviews</h3>
          <p class="text-center">Discover what our customers say! 💬</p>

          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <?php
                // Connect to the database and retrieve data
                include('myConfig.php');
                

                $sql = "SELECT firstName, middleName, lastName, rating, feedback FROM CustomerExperiences";
                $result = mysqli_query($conn, $sql);

                // Check if data exists and create carousel-item elements
                if (mysqli_num_rows($result) > 0) {
                  $active = true;
                  while($row = mysqli_fetch_assoc($result)) {
                    // Create carousel-item element and determine if it's active or not
                    echo "<div class='carousel-item" . ($active ? " active" : "") . "'>";
                    // // Display user name inside carousel-item
                    // echo "<p>" . $row["firstName"] . " " . $row["lastName"] . "</p>";
                    
                    //card
                    echo "<section id='testimonials'>";
                    echo "<div class='testimonial-box-container'>";
                    echo "<div class='testimonial-box'>";
                    echo "<div class='box-top'>";
                    echo "<div class='profile'>";
                    echo "<div class='profile-img'>";
                    echo "<img src='images/paws.png' />";
                    echo "</div>";
                    echo "<div class='name-user'>";
                    echo "<strong>" . $row['firstName'] . " " . $row['middleName'] . " " . $row['lastName'] . "</strong>";
                    echo "<span>Rating: " . $row['rating'] . "/5 </span>";
                    echo "</div>";
                    echo "</div>";
                    echo "<div class='reviews'>";
                    for ($i = 1; $i <= 5; $i++) {
                      if ($i <= $row['rating']) {
                          echo "<i class='fas fa-star'></i>"; // Print a filled star
                      } else {
                          echo "<i class='far fa-star'></i>"; // Print an empty star
                      }
                    }
                    // echo "<i class='fas fa-star'></i>";
                    // echo "<i class='fas fa-star'></i>";
                    // echo "<i class='fas fa-star'></i>";
                    // echo "<i class='fas fa-star'></i>";
                    // echo "<i class='far fa-star'></i>";
                    echo "</div>";
                    echo "</div>";
                    echo "<div class='client-comment'>";
                    echo "<p>" . $row['feedback'] . ".</p>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</section>";
                    echo "</div>";
                    // Update active value for carousel-item
                    $active = false;
                  }
                } else {
                    // If no records found
                    echo "0 results";
                }
                // Close database connection
                mysqli_close($conn);
              ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="false"></span>
              <iconify-icon icon="ic:baseline-keyboard-arrow-left" class="pagination-arrow fs-1"></iconify-icon>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <iconify-icon icon="ic:baseline-keyboard-arrow-right" class="pagination-arrow fs-1"></iconify-icon>
              <span class="visually-hidden">Next</span>
            </button>
        
          </div>

        </div>
      </div>
    </div>
  </section>

  
  <section id="register" style="background: url('images/background-img.png') no-repeat;">
        <div class="container">
            <div class="row my-5 py-5">
                <div class="offset-md-3 col-md-6 my-5">
                    <h2 class="display-3 fw-normal text-center">Share & Rate<br><span class="text-primary display-6">Your Feedback Matters! Rate Us and Share Your Experience!</span></h2>
                    <form action="insertExp.php" method="post">
                        <div class="form-input d-flex mb-3">
                            <input type="text" name="firstName" required="required" placeholder="First Name.." class="form-control ps-3 me-3">
                            <input type="text" name="middleName" required="required" placeholder="Middle Name.." class="form-control ps-3 me-3">
                            <input type="text" name="lastName" required="required" placeholder="Last Name.." class="form-control ps-3">
                        </div>
                        <div class="mb-3">
                            <div class="rating d-flex form-control mb-3">
                                <div class="text-White-60 my-0">
                                    <h6>Overall Satisfaction</h6>
                                </div>
                                <input type="radio" id="star5" name="rating" value="5" class="star-5" />
                                <label class="star" for="star5"><span class="fa fa-star"></span></label>

                                <input type="radio" id="star4" name="rating" value="4" class="star-4" />
                                <label class="star" for="star4"><span class="fa fa-star"></span></label>

                                <input type="radio" id="star3" name="rating" value="3" class="star-3" />
                                <label class="star" for="star3"><span class="fa fa-star"></span></label>

                                <input type="radio" id="star2" name="rating" value="2" class="star-2" />
                                <label class="star" for="star2"><span class="fa fa-star"></span></label>

                                <input type="radio" id="star1" name="rating" value="1" class="star-1" />
                                <label class="star" for="star1"><span class="fa fa-star"></span></label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="feedback" required="required" placeholder="Write Your Feedback Here.." class="form-control ps-3 me-3">
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" name="submitCustomerExpButton" class="btn btn-dark btn-lg rounded-1">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

  

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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>