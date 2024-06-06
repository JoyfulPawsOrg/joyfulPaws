<!DOCTYPE html>
<html lang="en">

<head>
  <title>Joyful Paws | Emergency Request</title>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="author" content="">
  <meta name="keywords" content="">
  <meta name="description" content="">
<style> 
label{
  font-size: 25px;
}
legend{
  font-weight: 800;
  font-size: 20px;
}
input{
  width: 350px;
 padding: 15px;
 border: 1px solid #c09754;
 border-radius: 20px;
 color: #000;
 placeholder-color: #000
;
 font-size: 20px;
}

input:hover {
  border: 1px solid #d7bc95;
    transform: scale(1.1,1.1);
    box-shadow: 5px 5px 30px 15px rgb(196,148,100,0.25), -5 px -5px 30px 15px rgb(196,148,100,0.22);
}

select{
  width: 350px;
 padding: 10px;
 border: 1px solid #c09754
;
 border-radius: 20px;
 color: #000;
 placeholder-color: #000;
 font-size: 20px;
}
select:hover {
  border: 1px solid #d7bc95;

    transform: scale(1.1,1.1);
    box-shadow: 5px 5px 30px 15px rgb(196,148,100,0.25), -5 px -5px 30px 15px rgb(196,148,100,0.22);
}
.buttonstyle{
  width: 60%;
  height: 80px;
  padding: 10px 15px 15px 15px;
  border: none;
  background-color: #d7bc95;
  color: #fff;
  cursor: pointer;
  border-radius: 300px;
  margin-top: 20px;
  margin-left: 18%;
  font-size: 25px;
  font-weight:bold;
}
button:hover {
  background-color: #C39B79;
}
body{
  margin-left: 50%;
  margin-right: 50%;
  
}
.back{
  background-image: url(images/background.png);
  background-repeat: no-repeat;
}
textarea{
  border: 1px solid #c09754;
  border-radius: 20px; 
}
.card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .75em;
padding-right: .75em;
}
.card-registration .select-arrow {
top: 13px;
}
</style>
<link rel="icon" href="images/Paws.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<link rel="stylesheet" href="css/swiper.css" />
<link rel="stylesheet" href="css/bootstrap.css" />


<link rel="stylesheet" type="text/css" href="css/vendor.css">
<link rel="stylesheet" type="text/css" href="style.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Chilanka&family=Montserrat:wght@300;400;500&display=swap"
  rel="stylesheet">
  
</head>

<body>
<!--
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
-->
  <!--
  <div class="preloader-wrapper">
    <div class="preloader">
    </div>
  </div>

  <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasCart" aria-labelledby="My Cart">
    <div class="offcanvas-header justify-content-center">
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Your cart</span>
          <span class="badge bg-primary rounded-circle pt-2">3</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Grey Hoodie</h6>
              <small class="text-body-secondary">Brief description</small>
            </div>
            <span class="text-body-secondary">$12</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Dog Food</h6>
              <small class="text-body-secondary">Brief description</small>
            </div>
            <span class="text-body-secondary">$8</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Soft Toy</h6>
              <small class="text-body-secondary">Brief description</small>
            </div>
            <span class="text-body-secondary">$5</span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span class="fw-bold">Total (USD)</span>
            <strong>$20</strong>
          </li>
        </ul>

        <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
      </div>
    </div>
  </div>-->
<!--
  <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasSearch"
    aria-labelledby="Search">
    <div class="offcanvas-header justify-content-center">
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">

      <div class="order-md-last">
        <h4 class="text-primary text-uppercase mb-3">
          Search
        </h4>
        <div class="search-bar border rounded-2 border-dark-subtle">
          <form id="search-form" class="text-center d-flex align-items-center" action="" method="">
            <input type="text" class="form-control border-0 bg-transparent" placeholder="Search Here" />
            <iconify-icon icon="tabler:search" class="fs-4 me-3"></iconify-icon>
          </form>
        </div>
      </div>
    </div>
  </div> -->

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

  <!------------------------------------------------------------------------------------------------------------>


  <section class="h-100 " style="background-image: url(images/backgroundEm.jpg);">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
          <div class="card card-registration my-4">
            <div class="row g-4">
              <div class="col-xl-4 d-none d-xl-block " style="background-color:  rgb(252,251,247, 0.5); ">
                <img src="images/petCare.png "
                  alt="Sample photo" class="img-fluid"
                  style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem; margin-top: 60%;" />

                  <h1 style="font-weight: 1000; text-align: center; font-size:4 em;">    Emergency Request</h1>
              </div>



              <div class="col-xl-8">
                <div class="card-body p-md-5 text-black">
                  <form name="EmergencyForm" class="form-group" action="inserE.php" method="post" enctype="multipart/form-data" onsubmit="return validationForm()" >

                  <h3 class="mb-5 text-uppercase">Emergency Details</h3>
  
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <fieldset >
                        <legend> Contact You</legend>
                         <label for="phone" class="form-label" >Phone *: </label>
                         <input style="letter-spacing:2px;font-family:'Font Awesome 5 Free'; font-weight:501;" type="number" id="phone" name="phone" class=" mt-2 mb-4 ps-3" placeholder=" &#xf095; phone number ">
                       </fieldset>
                  </div>
                <!--------------ROW 2------------------------------->
                  <div class="row">
                    <fieldset >
                      <legend> Address </legend>
                      <div class="row">
                        <div class="col-md-6 mb-4">
                          <div data-mdb-input-init class="form-outline">
                            <label for="inputAddress" class="form-label">Address*: </label>
                            <input style="letter-spacing:2px;font-family:'Font Awesome 5 Free'; font-weight:501;" type="text"  name="iAddress" placeholder=" &#xf3c5; street number name">
                          </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <div data-mdb-input-init class="form-outline">
                            <label for="inputCity" class="form-label">City*:</label>
                            <input style="letter-spacing:2px;font-family:'Font Awesome 5 Free'; font-weight:501;" type="text"   name="City" placeholder=" &#xf64f; name the city">
                          </div>
                        </div>
                      </div>                                        
                        <div class="col-md-8">
                        <label for="inputState" class="form-label">Region*:</label>
                        <br>
                        <select id="inputState" name = "inputState">
                          <option selected>Choose...</option>
                          <option>Riyadh</option>
                          <option>Makkah</option>
                          <option>Madinah</option>
                          <option>Eastern Province</option>
                          <option>Asir</option>
                          <option>Tabuk</option>
                          <option>Hail</option>
                          <option>Northern Borders</option>
                          <option>Jizan</option>
                          <option>Najran</option>
                          <option>Al Bahah</option>
                          <option>Al Jawf</option>
                          <option>Al-Qassim</option>  
                        </select>
                        </fieldset>
                  </div>
                  <!--------------- ROW 3-------------------------->
                  <div class="row">


                    <fieldset style="margin-top: 5%;">
                      <legend> Pet Information: </legend>
                      <div class="row">
                        <div class="col-md-6 mb-4">
                          <div data-mdb-input-init class="form-outline">
                            
                            <label for="type">Pet Type*:</label>
                            <input  style="letter-spacing:2px;font-family:'Font Awesome 5 Free'; font-weight:501;"  type="text" id="type" name="pettype" class=" mt-2 mb-4 ps-3" placeholder=" &#xf6d3; pet type">
                          </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <div data-mdb-input-init class="form-outline">
                            <label for="lname">Pet Status*:</label>
                            <input style="letter-spacing:2px;font-family:'Font Awesome 5 Free'; font-weight:501;" type="text" id="lname" name="petstatus" class=" mt-2 mb-4 ps-3" placeholder=" &#xf0f1; pet status">
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6 mb-4">
                        <div data-mdb-input-init class="form-outline">
                          <label for="photo">Pet Photo*:</label>
                          <i class="fa-regular fa-image">  </i>
                          <input    type="file" id="photo" name="photo" class=" mt-2 mb-4 ps-3"  >
                         </div>
                      </div>     
                      
                      
                      
                    </fieldset>
                      <legend> Last Seen: </legend>
                      <div class="row">
                        <div class="col-md-6 mb-4">
                          <div data-mdb-input-init class="form-outline">

                            <label for="date" class="form-label">date*: </label><br>
                            <input type="date" id="date" name="date" class=" mt-2 mb-4 ps-3"><br>
                          </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <div data-mdb-input-init class="form-outline">
                            <label for="time" class="form-label">Time*: </label><br>
                            <input type="time" id="time" name="time" class=" mt-2 mb-4 ps-3">
                          </div>
                        </div>
                      </div>
                    </fieldset> 
                  <div class=" pt-6">
                    <button type="submit" class="buttonstyle" name="submit" >Request Emergency care</button>
                  </div>
                 </div>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

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
  
  <script src="js/validate.js"></script>
  <script src="js/jquery-1.11.0.min.js"></script>
  <script src="js/swiper.js"></script>
  <script src="js/bootstrap.bundle.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
  <script src="js/iconify.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
</body>

</html>