<!DOCTYPE html>
<html lang="en">

<head>
<title>Joyful Paws | Supplies Shop</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="author" content="">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <style>
    .modal-header {
    position: relative;
}

.close {
    position: absolute;
    top: -20px;
    right: 0;
}
.modal-header .close {
    background-color: transparent;
    border: none;
    font-size: 40px;
    font-family:monospace;
}
.product {
    position: relative;
    display: inline-block;
}

.product-image {
    transition: filter 0.3s ease;
}

.product-overlay {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 100%;
    height: 100%;
    background-color: rgba(255, 255, 255, 0.9);
    padding: 10px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.3s ease, visibility 0.3s ease;
    text-align: center;
}

.product:hover .product-image {
    filter: brightness(80%);
}

.product:hover .product-overlay {
    opacity: 1;
    visibility: visible;
}

.product-title, .product-description, .product-price {
    margin-bottom: 5px;
}

.headerShop {
    width: 100vw; 
    height: 300px;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center; 
}

.headerShop img {
    width: 100%; 
    height: auto; 
}

.btn-group {
    display: flex;
    gap: 10px; 
}


.btn-group a:hover {
    color: #ffff99; 
}


    </style>
</head>
<link rel="icon" href="images/Paws.png">
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
    <!-- --------------------------------------------------------------------------------------------------------------------->
    <br>
    <div class="headerShop">
    <img src="images/shop.png" >
</div>
  </header>
    <br><br>
<!-- --------------------------------------------------------------------------------------------------------------------->
<!-- --------------------------------------------------------------------------------------------------------------------->
<main>

<div class="container">
      <nav class="main-menu d-flex navbar navbar-expand-lg ">

        

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

          <div class="offcanvas-header justify-content-center">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>

          <div class="offcanvas-body justify-content-between">
          <div class="btn-group" role="group" aria-label="Filter by Category">
    <a href="#" class="btn btn-secondary" data-category="all">All Categories</a>
    <a href="#" class="btn btn-secondary" data-category="food">Food</a>
    <a href="#" class="btn btn-secondary" data-category="clothes">Clothes</a>
    <a href="#" class="btn btn-secondary" data-category="toy">Toys</a>
</div>


          
            <div class="d-none d-lg-flex align-items-end">
            

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
        <li class="">
            <a href="#" class="mx-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart" aria-controls="offcanvasCart" onclick="showCartItems()">
                <iconify-icon icon="mdi:cart" class="fs-1 position-relative"></iconify-icon>
                <span class="position-absolute translate-middle badge rounded-circle bg-primary pt-2" id="cart-badge">0</span>
            </a>
        </li>
    </ul>
</div> </ul>  </div>  </div> </div> </nav> </div>

    <!-- Content -->
   

<!-- HTML Code -->
<div class="container mt-4">
    <div class="row">
        <!-- Product 1 -->
        <div class="col-md-4" data-category="food">
    <div class="product-card">
        <div class="card mb-4 product">
            <div class="product-overlay">
                <h5 class="product-title">Applaws 100% Natural Complete 7.5KG Bag Grain Free Cat Food Chicken And SalmonOpens</h5>
                <p class="product-description">- All-natural food made from chicken, extra salmon and natural extracts for large cats.<br>- Grain-free<br>- Contains natural prebiotics and probiotics which may encourage the presence of bacteria</p>
                <p class="product-price"><strong>price : 25.00 SAR</strong></p>
            </div>
            <img src="images/Product1.jpg" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
            <h5 class="card-title">Applaws 100% Natural Complete 7.5KG Bag Grain Free Cat Food Chicken </h5>
            <p class="card-text">25.00 SAR</p>
            <button class="btn btn-primary btn-block" onclick="addToCart('Applaws 100% Natural Complete 7.5KG Bag Grain Free Cat Food Chicken ', 25)">Add to Cart</button>
        </div>
    </div>
</div>

<!-- Product 2 -->
<div class="col-md-4" data-category="food">
    <div class="product-card">
        <div class="card mb-4 product">
            <div class="product-overlay">
                <h5 class="product-title">Schesir Tuna and Chicken in Jelly Wet Food for Adult Cats, 85 grams</h5>
                <p class="product-description">- All ingredients are selected 100% natural.<br>- The ingredients are steamed and prepared by hand<br>- No preservatives or added colors<br>- Only sustainably caught tuna</p>
                <p class="product-price"><strong>price: 10.00 SAR</strong></p>
            </div>
            <img src="images/Product2.jpg" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
            <h5 class="card-title">Schesir Tuna and Chicken in Jelly Wet Food for Adult Cats, 85 grams</h5>
            <p class="card-text">10.00 SAR</p>
            <button class="btn btn-primary btn-block" onclick="addToCart('Schesir Tuna and Chicken in Jelly Wet Food for Adult Cats, 85 grams', 10)">Add to Cart</button>
        </div>
    </div>
</div>

<!-- Product 3 -->
<div class="col-md-4" data-category="food">
    <div class="product-card">
        <div class="card mb-4 product">
            <div class="product-overlay">
                <h5 class="product-title">Applaws Home Care Plus Fish Flavor with Salmon dry food for sterilized cats</h5>
                <p class="product-description">This cat food is rich in vital vitamins and minerals such as Vitamin A, Vitamin D3, Vitamin E, selenium, iodine, iron, copper, manganese, zinc, taurine, and Omega 3 and Omega 6 fatty acids.</p>
                <p class="product-price"><strong>price: 202.00 SAR</strong></p>
            </div>
            <img src="images/Product3.jpg" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
            <h5 class="card-title">Applaws Home Care Plus Fish Flavor with Salmon dry food for sterilized cats</h5>
            <p class="card-text">202.00 SAR</p>
            <button class="btn btn-primary btn-block" onclick="addToCart('Applaws Home Care Plus Fish Flavor with Salmon dry food for sterilized cats', 202)">Add to Cart</button>
        </div>
    </div>
</div>





<div class="container mt-4">
    <div class="row">
        <!-- Product 4 -->
        <div class="col-md-4" data-category="food">
            <div class="card mb-4 product">
                <div class="product-overlay">
                    <h5 class="product-title">Versele Laga Xo Light Mix for Curling and Budgies 750 grams</h5>
                    <p class="product-description">-Excellent seeds and puffed grains<br>
                        -For large parrots, curlews, and budgies: seeds<br> with light, swollen grains<br>
                        -With 35% puffed corn, puffed wheat and pearl kernels</p>
                    <p class="product-price"><strong>price : 34.00 SAR</strong></p>
                </div>
                <img src="images/Product4.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
                <h5 class="card-title">Versele Laga Xo Light Mix <br>for Curling and Budgies <br> 750 grams </h5>
                <p class="card-text">34.00 SAR</p>
                <button class="btn btn-primary btn-block" onclick="addToCart('Versele Laga Xo Light Mix for Curling and Budgies 750 grams', 34)">Add to Cart</button>
            </div>
        </div>

        <!-- Product 5 -->
        <div class="col-md-4" data-category="food">
            <div class="card mb-4 product">
                <div class="product-overlay">
                    <h5 class="product-title">Zolux Nutrimeal Premium Millet Stick Treats for Rare Birds, 110 grams</h5>
                    <p class="product-description"> -100% natural formula and veterinarian approved<br>
                        -No additives or added sugar<br>
                        -Rich in yellow millet 52%<br>
                        -4% crushed sea shell to aid the digestive system </p>
                    <p class="product-price"><strong>price: 12.00 SAR</strong></p>
                </div>
                <img src="images/Product5.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
                <h5 class="card-title">Zolux Nutrimeal Premium Millet<br> Stick Treats for Rare Birds,<br> 110 grams</h5>
                <p class="card-text">12.00 SAR </p>
                <button class="btn btn-primary btn-block" onclick="addToCart('Zolux Nutrimeal Premium Millet Stick Treats for Rare Birds, 110 grams', 12)">Add to Cart</button>
            </div>
        </div>

        <!-- Product 6 -->
        <div class="col-md-4" data-category="food">
            <div class="card mb-4 product">
                <div class="product-overlay">
                    <h5 class="product-title">Bravery dry food for small, medium and large dogs</h5>
                    <p class="product-description">-Rich in protein<br>
                        - the product are manufactured according to international standards.<br>
                        -100% natural ingredients, free of preservatives and artificial colors</p>
                    <p class="product-price"><strong>price: 98.00 SAR</strong></p>
                </div>
                <img src="images/Product6.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
                <h5 class="card-title">Bravery dry food<br> for small, medium and <br>large dogs</h5>
                <p class="card-text">98.00 SAR   </p>
                <button class="btn btn-primary btn-block" onclick="addToCart('Bravery dry food for small, medium and large dogs', 98)">Add to Cart</button>
            </div>
        </div>
    </div>
</div>

<!----------------------------------------------------------------------------------------------------- -->
<!-- Product 7 -->
<div class="container mt-4">
    <div class="row">
        <div class="col-md-4" data-category="clothes">
            <div class="card mb-4 product">
                <div class="product-overlay">
                    <h5 class="product-title">Summer clothes for small dogs, red</h5>
                    <p class="product-description">- Different kind of clothes for hot summer for your pet<br>
                        -Let him enjoy the summer with fashion</p>
                    <p class="product-price"><strong>price : 35.00 SAR</strong></p>
                </div>
                <img src="images/Product7.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
                <h5 class="card-title">Summer clothes for small dogs, red </h5>
                <p class="card-text">35.00 SAR</p>
                <button class="btn btn-primary btn-block" onclick="addToCart('Summer clothes for small dogs, red', 35)">Add to Cart</button>
            </div>
        </div>

        <!-- Product 8 -->
        <div class="col-md-4" data-category="clothes">
            <div class="card mb-4 product">
                <div class="product-overlay">
                    <h5 class="product-title">Zolux Legend winter clothing jacket for cats and small dogs, beige color</h5>
                    <p class="product-description">- Warmth in cold weather<br>
                        -Elegant and modern<br>
                        -Comfortable fit<br>
                        -Easy to use<br>
                        -Versatile use indoors and outdoors<br>
                        -Great gift idea<br></p>
                    <p class="product-price"><strong>price: 100.00 SAR</strong></p>
                </div>
                <img src="images/Product8.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
                <h5 class="card-title">Zolux Legend winter clothing jacket , beige </h5>
                <p class="card-text">100.00 SAR   </p>
                <button class="btn btn-primary btn-block" onclick="addToCart('Zolux Legend winter clothing jacket for cats and small dogs, beige color', 100)">Add to Cart</button>
            </div>
        </div>

        <!-- Product 9 -->
        <div class="col-md-4" data-category="clothes">
            <div class="card mb-4 product">
                <div class="product-overlay">
                    <h5 class="product-title">Summer clothes for small dogs, Pink</h5>
                    <p class="product-description">- Different kind of clothes for hot summer for your pet<br>
                        -Let him enjoy the summer with fashion</p>
                    <p class="product-price"><strong>price : 35.00 SAR</strong></p>
                </div>
                <img src="images/Product9.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
                <h5 class="card-title">Summer clothes for small dogs, Pink </h5>
                <p class="card-text">35.00 SAR</p>
                <button class="btn btn-primary btn-block" onclick="addToCart('Summer clothes for small dogs, Pink', 35)">Add to Cart</button>
            </div>
        </div>
    </div>
</div>

<!-- Product 10 -->
<div class="container mt-4">
    <div class="row">
        <div class="col-md-4" data-category="clothes">
            <div class="card mb-4 product">
                <div class="product-overlay">
                    <h5 class="product-title">Zolux Braca Hoodie, waterproof winter clothing for cats and small dogs, green color</h5>
                    <p class="product-description">-water resistant <br>
                                                  -Adjustable size <br>
                                                  -Durable construction<br>
                                                  -Easy to clean<br>
                                                 -Versatile design<br></p>
                    <p class="product-price"><strong>price : 150.00 SAR</strong></p>
                </div>
                <img src="images/Product10.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
                <h5 class="card-title">Zolux Braca Hoodie, waterproof winter clothing for cats and small dogs, green color </h5>
                <p class="card-text">150.00 SAR</p>
                <button class="btn btn-primary btn-block" onclick="addToCart('Zolux Braca Hoodie, waterproof winter clothing for cats and small dogs, green color', 150)">Add to Cart</button>
            </div>
        </div>

        <!-- Product 11 -->
        <div class="col-md-4" data-category="clothes">
            <div class="card mb-4 product">
                <div class="product-overlay">
                    <h5 class="product-title">Zolux "Move" comfortable red collar in multiple sizes for dogs</h5>
                    <p class="product-description"> -Adjustable and expandable collar<br>
                                                   -Lined with neoprene, very comfortable to wear<br>
                                                   -Waterproof and with reflective strips<br>
                                                   -Available in four sizes to suit all types of dogs<br> </p>
                    <p class="product-price"><strong>price: 26.00 SAR</strong></p>
                </div>
                <img src="images/Product11.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
                <h5 class="card-title">Zolux "Move" comfortable  <br>red collar in multiple <br> sizes for dogs</h5>
                <p class="card-text">26.00 SAR </p>
                <button class="btn btn-primary btn-block" onclick="addToCart('Zolux Movecomfortable red collar in multiple sizes for dogs', 26)">Add to Cart</button>
            </div>
        </div>

        <!-- Product 12-->
        <div class="col-md-4" data-category="clothes">
            <div class="card mb-4 product">
                <div class="product-overlay">
                    <h5 class="product-title">Hermitage Handcrafted Italian Leather Dog Collar - Medium</h5>
                    <p class="product-description">Quality, elegance and exclusive design are the hallmarks 
                      of the Hermitage collection Inspired by the famous museum in Saint Petersburg, 
                      Hermitage collars and leashes are handcrafted from soft quilted 100% Italian leather in Valenza</p>
                    <p class="product-price"><strong>price: 136.00 SAR</strong></p>
                </div>
                <img src="images/Product12.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
                <h5 class="card-title">Hermitage Handcrafted <br>Italian Leather Dog Collar<br> - Medium</h5>
                <p class="card-text">136.00 SAR   </p>
                <button class="btn btn-primary btn-block" onclick="addToCart('Hermitage Handcrafted Italian Leather Dog Collar - Medium', 136)">Add to Cart</button>
            </div>
        </div>
    </div>
</div>


<!----------------------------------------------------------------------------------------------------- -->


<!-- Product 13 -->
<div class="container mt-4">
    <div class="row">
        <div class="col-md-4" data-category="toy">
            <div class="card mb-4 product">
                <div class="product-overlay">
                    <h5 class="product-title">Zolux Chiquitos Dog Toy and Blanket</h5>
                    <p class="product-description">-Sloth blanket<br>
                                                   -Plush and velvety soft, made from 100% recycled materials.<br>
                                                  -It is characterized by meeting the different needs of caregivers and dogs.<br>
                                                   -suitable for dogs of all breeds, sizes and ages.</p>
                    <p class="product-price"><strong>price : 100.00 SAR</strong></p>
                </div>
                <img src="images/Product13.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
                <h5 class="card-title">Zolux Chiquitos Dog Toy <br>and Blanket</h5>
                <p class="card-text">100.00 SAR</p>
                <button class="btn btn-primary btn-block" onclick="addToCart('Zolux Chiquitos Dog Toy and Blanket', 100)">Add to Cart</button>
            </div>
        </div>

        <!-- Product 14 -->
        <div class="col-md-4" data-category="toy">
            <div class="card mb-4 product">
                <div class="product-overlay">
                    <h5 class="product-title">Zolux 15 cm bone-shaped rubber football toy for dogs</h5>
                    <p class="product-description">The main function of toys is to stimulate mental
                       and emotional stimulation to the dog and allow him to chew.
                        Playing with this type of object can also be an important 
                        factor in modifying unwanted behaviors.</p>
                    <p class="product-price"><strong>price: 15.00 SAR</strong></p>
                </div>
                <img src="images/Product14.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
                <h5 class="card-title">Zolux 15 cm bone-shaped <br>rubber football toy for dogs </h5>
                <p class="card-text">15.00 SAR   </p>
                <button class="btn btn-primary btn-block" onclick="addToCart('Zolux 15 cm bone-shaped rubber football toy for dogs', 15)">Add to Cart</button>
            </div>
        </div>

        <!-- Product 15 -->
        <div class="col-md-4" data-category="toy">
            <div class="card mb-4 product">
                <div class="product-overlay">
                    <h5 class="product-title">GoDog Green Dragon Dog Toy</h5>
                    <p class="product-description">It is every dog's favorite toy.
                       These toys are made of fur and are padded and contain 
                       technology that can withstand chewing and can also withstand heavy play. Minimal padding gives these toys a fun "fluffy" feel that dogs love</p>
                    <p class="product-price"><strong>price : 60.00 SAR</strong></p>
                </div>
                <img src="images/Product15.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
                <h5 class="card-title">GoDog Green Dragon<br> Dog Toy </h5>
                <p class="card-text">60.00 SAR</p>
                <button class="btn btn-primary btn-block" onclick="addToCart('GoDog Green Dragon Dog Toy', 60)">Add to Cart</button>
            </div>
        </div>
    </div>
</div>

<!-- Product 16 -->
<div class="container mt-4">

    <div class="row">
        <div class="col-md-4" data-category="toy">
            <div class="card mb-4 product">
                <div class="product-overlay">
                    <h5 class="product-title">Zolux Chiquitos Llama toy and pillow for dogs</h5>
                    <p class="product-description">A pillow in the shape of a mother animal
                                           Plush and velvety soft, made from 100% recycled materials.
                                          It is characterized by meeting the different needs of caregivers and dogs.
                                         Chiquitos is suitable for dogs of all breeds, sizes and ages.</p>
                    <p class="product-price"><strong>price : 40.00 SAR</strong></p>
                </div>
                <img src="images/Product16.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
                <h5 class="card-title">Zolux Chiquitos Llama toy and pillow for dogs </h5>
                <p class="card-text">40.00 SAR</p>
                <button class="btn btn-primary btn-block" onclick="addToCart('Zolux Chiquitos Llama toy and pillow for dogs', 40)">Add to Cart</button>
            </div>
        </div>


        
        <!-- Product 17 -->
        <div class="col-md-4" data-category="toy">
            <div class="card mb-4 product">
                <div class="product-overlay">
                    <h5 class="product-title">Zolux Titan rubber toy with rope, yellow, for dogs</h5>
                    <p class="product-description"> -Highly resistant toy made of natural rubber<br>
                                                    -This material is not only durable but is also friendly to your dog's teeth<br>
                                                     -The specific shape allows you to use it as a food dispenser while playing with your dog </p>
                    <p class="product-price"><strong>price: 30.00 SAR</strong></p>
                </div>
                <img src="images/Product17.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
                <h5 class="card-title">Zolux Titan rubber toy with rope, yellow, for dogs</h5>
                <p class="card-text">30.00 SAR </p>
                <button class="btn btn-primary btn-block" onclick="addToCart('Zolux Titan rubber toy with rope, yellow, for dogs', 30)">Add to Cart</button>
            </div>
        </div>

        <!-- Product 18-->
        <div class="col-md-4" data-category="toy">
            <div class="card mb-4 product">
                <div class="product-overlay">
                    <h5 class="product-title">Zolux Koala Teether Stuffed Toy for Puppies</h5>
                    <p class="product-description">
                    -A great way to keep your dog entertained and active.<br>
                    -Easy to handle.<br>
                    -This toy is perfect for dogs who love to play and chew.<br>
                    -Made of durable materials that can withstand even the toughest chewers.<br>
                   </p>
                    <p class="product-price"><strong>price: 15.00 SAR</strong></p>
                </div>
                <img src="images/Product18.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
                <h5 class="card-title">Zolux Koala Teether Stuffed Toy for Puppies</h5>
                <p class="card-text">15.00 SAR   </p>
                <button class="btn btn-primary btn-block" onclick="addToCart('Zolux Koala Teether Stuffed Toy for Puppies', 15)">Add to Cart</button>
            </div>
        </div>
    </div>
</div>


















<!----------------------------------------------------------------------------------------------------- -->

    <!-- Modal -->
    <form id="checkoutForm" method="POST" action="insert.php">
    <div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cartModalLabel">Shopping Cart</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul id="cartItemList" class="list-group">
                        
                    </ul>
                </div>
                <div class="modal-footer">
               
                    <input type="hidden" id="totalPriceInput" name="totalPrice">
                    <input type="submit" id="checkoutButton" name="checkoutButton" class="btn btn-primary" value="Checkout">
                </div>
            </div>
        </div>
    </div>
</form>

</main>





<section id="register" style="background: url('images/shop2.png') no-repeat; background-size: cover; height: 540px;" class="my-5">
    <div class="container my-5 ">
      <div class="row my-5 py-5">
        <div class="offset-md-3 col-md-6 my-5 ">
            <h2 class="display-3 fw-normal text-start" style="margin-left: -170px;"> <br> Shop in our world full <span class="text-primary"><br>of beautiful surprises <br>for your pet</span> </h2>
        </div>
      </div>
    </div>
</section>


  <section id="service" class="mt-5 pt-2">
    <div class="container py-5 my-5">
      <div class="row g-md-5 pt-4">
        <div class="col-md-3 my-3">
          <div class="card">
            <div>
              <iconify-icon class="service-icon text-primary" icon="la:shopping-cart"></iconify-icon>
            </div>
            <h3 class="card-title py-2 m-0">Convenient shopping</h3>
            <div class="card-text">
              <p class="blog-paragraph fs-6">Shop hassle-free, anytime, anywhere.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 my-3">
          <div class="card">
            <div>
              <iconify-icon class="service-icon text-primary" icon="la:user-check"></iconify-icon>
            </div>
            <h3 class="card-title py-2 m-0">Complete reliability</h3>
            <div class="card-text">
              <p class="blog-paragraph fs-6">Trust in every purchase, every time.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 my-3">
          <div class="card">
            <div>
              <iconify-icon class="service-icon text-primary" icon="la:tag"></iconify-icon>
            </div>
            <h3 class="card-title py-2 m-0">Special prices</h3>
            <div class="card-text">
              <p class="blog-paragraph fs-6">Discover exclusive deals just for you.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 my-3">
          <div class="card">
            <div>
              <iconify-icon class="service-icon text-primary" icon="la:award"></iconify-icon>
            </div>
            <h3 class="card-title py-2 m-0">Quality Guarantee</h3>
            <div class="card-text">
              <p class="blog-paragraph fs-6">Assured quality, satisfaction guaranteed.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

<!-- --------------------------------------------------------------->
<!-- --------------------------------------------------------------->
  


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

<!-- ---------------------------------------------------------------------------------->
<!-- jQuery and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom Script -->
   
 <script>
    let cartItems = [];


function addToCart(productName, price) {
    // Check if the product is already in the cart
    let existingItem = cartItems.find(item => item.name === productName);

    if (existingItem) {
        // If the product is already in the cart, increase its quantity
        existingItem.quantity++;
    } else {
        // If the product is not in the cart, add it with quantity 1
        cartItems.push({ name: productName, price: price, quantity: 1 });

   

    }

    updateCartBadge();
    updateExternalCartBadge();
}

function removeCartItem(index) {
    cartItems.splice(index, 1);

    updateCartBadge(); 
    showCartItems();
}

function showCartItems() {
    let cartItemList = document.getElementById("cartItemList");
    cartItemList.innerHTML = "";

    let totalPrice = 0; 
    cartItems.forEach((item, index) => {
        let li = document.createElement("li");
        li.classList.add("list-group-item", "d-flex", "justify-content-between", "align-items-center");

        // Display product name, quantity, and total price for each item
        let itemTotal = item.price * item.quantity;
        li.innerHTML = `${item.name} <br>- Quantity: ${item.quantity} <br>- Total: ${itemTotal} SAR`;


        // Create delete button for each item
        let deleteButton = document.createElement("button");
        deleteButton.innerHTML = "&#10006;";
        deleteButton.classList.add("btn", "btn-danger");
        deleteButton.addEventListener("click", () => {
            removeCartItem(index); 
        });
        li.appendChild(deleteButton);

        cartItemList.appendChild(li);

        totalPrice += itemTotal; 
    });

    

    // Add total price to the bottom of the cart
    let totalItem = document.createElement("li");
    totalItem.classList.add("list-group-item", "fw-bold", "text-end");
    totalItem.textContent = `Total Price: ${totalPrice} SAR `;
    cartItemList.appendChild(totalItem);
    document.getElementById("totalPriceInput").value = totalPrice;
    $('#cartModal').modal('show');

}

function updateCartBadge() {
    let totalQuantity = cartItems.reduce((total, item) => total + item.quantity, 0);
    let cartBadge = document.getElementById("cart-badge");
    cartBadge.textContent = totalQuantity;
}

function updateExternalCartBadge() {
    // Calculate the total number of items in the cart
    let totalItems = cartItems.reduce((total, item) => total + item.quantity, 0);

    // Update the external cart badge
    let externalCartBadge = document.getElementById("external-cart-badge");
    if (externalCartBadge) {
        externalCartBadge.textContent = totalItems;
    }
}

document.addEventListener("DOMContentLoaded", function() {
    const categoryLinks = document.querySelectorAll('.btn-group a');

    categoryLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault(); 

            const selectedCategory = this.getAttribute("data-category");
            const products = document.querySelectorAll(".col-md-4[data-category]");

            products.forEach(product => {
                const category = product.getAttribute("data-category");

                if (selectedCategory === "all" || category === selectedCategory) {
                    product.style.display = "block";
                } else {
                    product.style.display = "none";
                }
            });
        });
    });
});




document.querySelectorAll('.product').forEach(item => {
    item.addEventListener('mousemove', function(e) {
        const info = this.querySelector('.product-info');
        const xOffset = e.clientX - this.offsetLeft + 10;
        const yOffset = e.clientY - this.offsetTop + 10;

        info.style.left = xOffset + 'px';
        info.style.top = yOffset + 'px';
    });
});


document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("checkoutButton").addEventListener("click", function() {
        let totalPrice = calculateTotalPrice(); 
        if (totalPrice > 0) {
            saveTotalPrice(totalPrice); 
        } else {
            alert("Your cart is empty!"); 
            window.location.href = "SuppliesShop.php";
        }
    });
});

function calculateTotalPrice() {
    let totalPrice = 0;
    cartItems.forEach(item => {
        totalPrice += item.price * item.quantity;
    });
    return totalPrice;
}

function saveTotalPrice(totalPrice) {
  let serializedProductNames = JSON.stringify(productNames);

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "insert.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  

let data = "totalPrice=" + totalPrice;
data += "&productNames=" + encodeURIComponent(serializedProductNames);


    xhr.send(data);
}


document.querySelector('.close').addEventListener('click', function() {
        $('#cartModal').modal('hide');
    });
    </script>



  <script src="js/jquery-1.11.0.min.js"></script>
  <script src="js/swiper.js"></script>
  <script src="js/bootstrap.bundle.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
  <script src="js/iconify.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>