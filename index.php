
<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>E-Comace Web Project</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/vendor.css">
    <link rel="stylesheet" type="text/css" href="style.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
<style>
  /* General Styles */
body {
    background-color: #f8f9fa;
    font-family: Arial, sans-serif;
}
/* Container */
.container {
    max-width: 1100px;
}

/* Product Card */
.card {
    border: none;
    border-radius: 10px;
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
}
    .navbar {
            background-color:#FFD700; /* Dark background color */
        }
        .navbar-brand {
            color: #ffffff !important;
        }
        .navbar-nav .nav-link {
            color: #ffffff !important;
        }
        .navbar-nav .nav-link:hover {
            color: #f8f9fa !important; /* Light color on hover */
        }
.card:hover {
    transform: scale(1.03);
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
}

/* Product Image */
.card img {
    max-height: 200px;
    object-fit: cover;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

/* Product Title */
.card-title {
    font-size: 1.2rem;
    font-weight: bold;
    color: #333;
}
/* General Styles */
body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.uf-contact-form-01 {
    padding: 50px 0;
}

.uf-ct-01-text-primary {
    color: #007bff; /* Primary color for text */
}

.uf-img-contact-form-01 {
    max-width: 100%;
    height: auto;
    display: block;
    margin: 0 auto;
}

.uf-ct-01-btn-primary {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 12px 30px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.uf-ct-01-btn-primary:hover {
    background-color: #0056b3;
}

.form-label {
    font-weight: bold;
    color: #333;
}

.form-text {
    font-size: 14px;
    color: #777;
}

.bg-white {
    background-color: white !important;
}

.rounded-4 {
    border-radius: 1rem;
}

.shadow {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.text-center {
    text-align: center;
}

.text-uppercase {
    text-transform: uppercase;
}

.fw-bold {
    font-weight: 700;
}

/* Media Queries for responsiveness */
@media (max-width: 768px) {
    .uf-contact-form-01 .col-md-6 {
        margin-bottom: 30px;
    }

    .uf-img-contact-form-01 {
        display: block;
        margin: 0 auto;
    }
}

/* Container for overall padding and alignment */
.container {
    max-width: 1200px;
    margin: 0 auto;
}

/* Adjustments for form inputs */
.form-control {
    padding: 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid #ccc;
    width: 100%;
    margin-bottom: 15px;
}

.form-control:focus {
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.25);
}

/* Price Styles */
.card .text-muted {
    font-size: 0.9rem;
}

.card .fw-bold {
    font-size: 1.1rem;
    color: #28a745;
}

/* Rating */
.rating {
    color: #ffcc00;
    font-size: 1.1rem;
}

/* Buttons */
.btn-primary {
    background-color: #007bff;
    border: none;
    transition: 0.3s;
}

.btn-primary:hover {
    background-color: #0056b3;
}

.btn-success {
    background-color: #28a745;
    border: none;
    transition: 0.3s;
}

.btn-success:hover {
    background-color: #218838;
}

/* Buy Now Modal */
.modal-content {
    border-radius: 10px;
    padding: 20px;
}

.modal-title {
    font-weight: bold;
}
 /* Custom Footer Styles */
    footer {
      background-color: #1c2331;
      color: white;
    }

    .social-links i {
      font-size: 24px;
      margin-right: 15px;
    }

    .social-links a {
      color: white;
      text-decoration: none;
    }

    .footer-links h6 {
      font-weight: bold;
      text-transform: uppercase;
    }

    .footer-links a {
      color: white;
      text-decoration: none;
      display: block;
      padding: 3px 0;
    }

    .footer-links a:hover {
      color:rgb(77, 255, 202);
    }

    .footer-bottom {
      background-color: rgba(0, 0, 0, 0.2);
      padding: 10px;
      text-align: center;
    }

    .footer-bottom a {
      color: white;
      text-decoration: none;
    }

    .footer-bottom a:hover {
      color:rgb(77, 255, 145);
    }

.btn-close {
    outline: none;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .card img {
        max-height: 180px;
    }
    
    .card-title {
        font-size: 1rem;
    }
}


</style>
  </head>
  <body>

    <header>
      <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">E-Commerce</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    </header>
    
    <section style="background-image: url('images/image11.jpg');background-repeat: no-repeat;background-size: cover;">
      <div class="container-lg">
        <div class="row">
          <div class="col-lg-6 pt-5 mt-5">
            <p class="fs-4">ඉන්ටර්නෙට් වෙළෙඳාම (e-commerce) යනු, ඩිජිටල් වේදිකාවන් මඟින් භාණ්ඩ හා සේවාවන් මිලදී ගැනීම සහ විකිණීමේ ක්‍රියාවලියයි. මෑත
            කාලයේදී ඉන්ටර්නෙට් වෙළෙඳාම වේගයෙන් වර්ධනය වී, පාරිභෝගිකයන්ට නිවසේ සිටම භාණ්ඩ ලබා ගැනීමේ පහසුව ලබා දී තිබේ. </p>
            <div class="d-flex gap-3">
              <a href="#" class="btn btn-primary text-uppercase fs-6 rounded-pill px-4 py-3 mt-3">Start Shopping</a>
              <a href="#" class="btn btn-dark text-uppercase fs-6 rounded-pill px-4 py-3 mt-3">Join Now</a>
            </div>
            <div class="row my-5">
              <div class="col">
                <div class="row text-dark">
                  <div class="col-auto"><p class="fs-1 fw-bold lh-sm mb-0">14k+</p></div>
                  <div class="col"><p class="text-uppercase lh-sm mb-0">Product Varieties</p></div>
                </div>
              </div>
              <div class="col">
                <div class="row text-dark">
                  <div class="col-auto"><p class="fs-1 fw-bold lh-sm mb-0">50k+</p></div>
                  <div class="col"><p class="text-uppercase lh-sm mb-0">Happy Customers</p></div>
                </div>
              </div>
              <div class="col">
                <div class="row text-dark">
                  <div class="col-auto"><p class="fs-1 fw-bold lh-sm mb-0">10+</p></div>
                  <div class="col"><p class="text-uppercase lh-sm mb-0">Store Locations</p></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="row row-cols-1 row-cols-sm-3 row-cols-lg-3 g-0 justify-content-center">
          <div class="col">
            <div class="card border-0 bg-primary rounded-0 p-4 text-light">
              <div class="row">
                <div class="col-md-3 text-center">
                  <svg width="60" height="60"><use xlink:href="#fresh"></use></svg>
                </div>
                <div class="col-md-9">
                  <div class="card-body p-0">
                    <h5 class="text-light">Fresh from farm</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipi elit.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card border-0 bg-secondary rounded-0 p-4 text-light">
              <div class="row">
                <div class="col-md-3 text-center">
                  <svg width="60" height="60"><use xlink:href="#organic"></use></svg>
                </div>
                <div class="col-md-9">
                  <div class="card-body p-0">
                    <h5 class="text-light">100% Organic</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipi elit.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card border-0 bg-danger rounded-0 p-4 text-light">
              <div class="row">
                <div class="col-md-3 text-center">
                  <svg width="60" height="60"><use xlink:href="#delivery"></use></svg>
                </div>
                <div class="col-md-9">
                  <div class="card-body p-0">
                    <h5 class="text-light">Free delivery</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipi elit.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      
      </div>
    </section>

    <section class="py-5 overflow-hidden">
      <div class="container-lg">
        <div class="row">
          <div class="col-md-12">

            <div class="section-header d-flex flex-wrap justify-content-between mb-5">
              <h2 class="section-title">Category</h2>

              <div class="d-flex align-items-center">
                <a href="#" class="btn btn-primary me-2">View All</a>
                <div class="swiper-buttons">
                  <button class="swiper-prev category-carousel-prev btn btn-yellow">❮</button>
                  <button class="swiper-next category-carousel-next btn btn-yellow">❯</button>
                </div>
              </div>
            </div>
            
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">

            <div class="category-carousel swiper">
              <div class="swiper-wrapper">
                <a href="Fruits_Veges.php" class="nav-link swiper-slide text-center">
                  <img src="images/category-thumb-1.jpg" class="rounded-circle" alt="Category Thumbnail">
                  <h4 class="fs-6 mt-3 fw-normal category-title">Fruits & Veges</h4>
                </a>
                <a href="Breads_Sweets.php" class="nav-link swiper-slide text-center">
                  <img src="images/category-thumb-2.jpg" class="rounded-circle" alt="Category Thumbnail">
                  <h4 class="fs-6 mt-3 fw-normal category-title">Breads & Sweets</h4>
                </a>
                <a href="category.html" class="nav-link swiper-slide text-center">
                  <img src="images/category-thumb-3.jpg" class="rounded-circle" alt="Category Thumbnail">
                  <h4 class="fs-6 mt-3 fw-normal category-title">Fruits & Veges</h4>
                </a>
                <a href="Beverages.php" class="nav-link swiper-slide text-center">
                  <img src="images/category-thumb-4.jpg" class="rounded-circle" alt="Category Thumbnail">
                  <h4 class="fs-6 mt-3 fw-normal category-title">Beverages</h4>
                </a>
                <a href="Meat Products.php" class="nav-link swiper-slide text-center">
                  <img src="images/category-thumb-5.jpg" class="rounded-circle" alt="Category Thumbnail">
                  <h4 class="fs-6 mt-3 fw-normal category-title">Meat Products</h4>
                </a>
                <a href="Breads.php" class="nav-link swiper-slide text-center">
                  <img src="images/category-thumb-6.jpg" class="rounded-circle" alt="Category Thumbnail">
                  <h4 class="fs-6 mt-3 fw-normal category-title">Breads</h4>
                </a>
                <a href="Fruits_Veges.php" class="nav-link swiper-slide text-center">
                  <img src="images/category-thumb-7.jpg" class="rounded-circle" alt="Category Thumbnail">
                  <h4 class="fs-6 mt-3 fw-normal category-title">Fruits & Veges</h4>
                </a>
                <a href="Breads-Sweets.php" class="nav-link swiper-slide text-center">
                  <img src="images/category-thumb-8.jpg" class="rounded-circle" alt="Category Thumbnail">
                  <h4 class="fs-6 mt-3 fw-normal category-title">Breads & Sweets</h4>
                </a>
                <a href="Fruits_Veges.php" class="nav-link swiper-slide text-center">
                  <img src="images/category-thumb-1.jpg" class="rounded-circle" alt="Category Thumbnail">
                  <h4 class="fs-6 mt-3 fw-normal category-title">Fruits & Veges</h4>
                </a>
                <a href="Beverages.php" class="nav-link swiper-slide text-center">
                  <img src="images/category-thumb-1.jpg" class="rounded-circle" alt="Category Thumbnail">
                  <h4 class="fs-6 mt-3 fw-normal category-title">Beverages</h4>
                </a>
                <a href="Meat Products.php" class="nav-link swiper-slide text-center">
                  <img src="images/category-thumb-1.jpg" class="rounded-circle" alt="Category Thumbnail">
                  <h4 class="fs-6 mt-3 fw-normal category-title">Meat Products</h4>
                </a>
                <a href="Beverages.php" class="nav-link swiper-slide text-center">
                  <img src="images/category-thumb-1.jpg" class="rounded-circle" alt="Category Thumbnail">
                  <h4 class="fs-6 mt-3 fw-normal category-title">Breads</h4>
                </a>
                
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="pb-5">
      <div class="container-lg">

        <div class="row">
          <div class="col-md-12">

            <div class="section-header d-flex flex-wrap justify-content-between my-4">
              
              <h2 class="section-title">Best selling products</h2>

              <div class="d-flex align-items-center">
                <a href="#" class="btn btn-primary rounded-1">View All</a>
              </div>
            </div>
            
          </div>
        </div>
        
        <!-- Product Section -->

    <div class="row">
      <div class="col-md-12">
        <div class="product-grid row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4 row-cols-xxl-4">
          <!-- Product Item 1 -->
          <div class="col">
            <div class="product-item">
              <figure>
                <a href="index.html" title="Product Title">
                  <img src="images/product-thumb-23.png" alt="Product Thumbnail" class="tab-image">
                </a>
              </figure>
              <div class="d-flex flex-column text-center">
                <h3 class="fs-6 fw-normal">Whole Wheat Sandwich Bread</h3>
                <div>
                  <span class="rating">
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                  </span>
                  <span>(222)</span>
                </div>
                <div class="d-flex justify-content-center align-items-center gap-2">
                  <del>$24.00</del>
                  <span class="text-dark fw-semibold">$18.00</span>
                  <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                </div>
                <div class="button-area p-3 pt-0">
                  <div class="row g-1 mt-2">
                    <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                    <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart" data-bs-toggle="modal" data-bs-target="#paymentModal"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                    <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Product Item 2 -->
          <div class="col">
            <div class="product-item">
              <figure>
                <a href="index.html" title="Product Title">
                  <img src="images/product-thumb-20.png" alt="Product Thumbnail" class="tab-image">
                </a>
              </figure>
              <div class="d-flex flex-column text-center">
                <h3 class="fs-6 fw-normal">Organic Almonds</h3>
                <div>
                  <span class="rating">
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                  </span>
                  <span>(150)</span>
                </div>
                <div class="d-flex justify-content-center align-items-center gap-2">
                  <del>$15.00</del>
                  <span class="text-dark fw-semibold">$12.00</span>
                  <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">20% OFF</span>
                </div>
                <div class="button-area p-3 pt-0">
                  <div class="row g-1 mt-2">
                    <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                    <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart" data-bs-toggle="modal" data-bs-target="#paymentModal"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                    <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Product Item 3 -->
          <div class="col">
            <div class="product-item">
              <figure>
                <a href="index.html" title="Product Title">
                  <img src="images/product-thumb-19.png" alt="Product Thumbnail" class="tab-image">
                </a>
              </figure>
              <div class="d-flex flex-column text-center">
                <h3 class="fs-6 fw-normal">Organic Oats</h3>
                <div>
                  <span class="rating">
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-empty"></use></svg>
                  </span>
                  <span>(100)</span>
                </div>
                <div class="d-flex justify-content-center align-items-center gap-2">
                  <del>$10.00</del>
                  <span class="text-dark fw-semibold">$8.00</span>
                  <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                </div>
                <div class="button-area p-3 pt-0">
                  <div class="row g-1 mt-2">
                    <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                    <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart" data-bs-toggle="modal" data-bs-target="#paymentModal"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                    <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Product Item 4 -->
          <div class="col">
            <div class="product-item">
              <figure>
                <a href="index.html" title="Product Title">
                  <img src="images/product-thumb-21.png" alt="Product Thumbnail" class="tab-image">
                </a>
              </figure>
              <div class="d-flex flex-column text-center">
                <h3 class="fs-6 fw-normal">Avocado Oil</h3>
                <div>
                  <span class="rating">
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                  </span>
                  <span>(400)</span>
                </div>
                <div class="d-flex justify-content-center align-items-center gap-2">
                  <del>$25.00</del>
                  <span class="text-dark fw-semibold">$20.00</span>
                  <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">20% OFF</span>
                </div>
                <div class="button-area p-3 pt-0">
                  <div class="row g-1 mt-2">
                    <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                    <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart" data-bs-toggle="modal" data-bs-target="#paymentModal"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                    <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Add more product items (5-8) following the same structure -->

        </div>
      </div>
    </div>
  </div>

  <!-- Payment Modal -->
  <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="paymentModalLabel">Payment Information</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/process-payment" method="POST">
            <div class="mb-3">
              <label for="name" class="form-label">Name on Card</label>
              <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
              <label for="card-number" class="form-label">Card Number</label>
              <input type="text" class="form-control" id="card-number" name="card-number" required>
            </div>
            <div class="mb-3 row">
              <div class="col">
                <label for="expiry-date" class="form-label">Expiry Date</label>
                <input type="month" class="form-control" id="expiry-date" name="expiry-date" required>
              </div>
              <div class="col">
                <label for="cvv" class="form-label">CVV</label>
                <input type="text" class="form-control" id="cvv" name="cvv" required>
              </div>
            </div>
            <div class="mb-3">
              <button type="submit" class="btn btn-primary w-100">Pay Now</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS and Popper -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
  
  <!-- Optional: JS for modal, cart actions -->
  <script>
    // Additional JavaScript for handling cart interactions, etc.
    document.querySelectorAll('.btn-cart').forEach((button) => {
      button.addEventListener('click', function() {
        alert('Product added to cart! Proceed to payment.');
      });
    });
  </script>
    </section>


    <!-------------------------second  product  card------------------------>
     <section class="pb-5">
      <div class="container-lg">

        <div class="row">
          <div class="col-md-12">

            <div class="section-header d-flex flex-wrap justify-content-between my-4">
              
              <h2 class="section-title">New selling products</h2>

              <div class="d-flex align-items-center">
                <a href="#" class="btn btn-primary rounded-1">View All</a>
              </div>
            </div>
            
          </div>
        </div>
        
        <!-- Product Section -->

    <div class="row">
      <div class="col-md-12">
        <div class="product-grid row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4 row-cols-xxl-4">
          <!-- Product Item 1 -->
          <div class="col">
            <div class="product-item">
              <figure>
                <a href="index.html" title="Product Title">
                  <img src="images/product-thumb-23.png" alt="Product Thumbnail" class="tab-image">
                </a>
              </figure>
              <div class="d-flex flex-column text-center">
                <h3 class="fs-6 fw-normal">Whole Wheat Sandwich Bread</h3>
                <div>
                  <span class="rating">
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                  </span>
                  <span>(222)</span>
                </div>
                <div class="d-flex justify-content-center align-items-center gap-2">
                  <del>$24.00</del>
                  <span class="text-dark fw-semibold">$18.00</span>
                  <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                </div>
                <div class="button-area p-3 pt-0">
                  <div class="row g-1 mt-2">
                    <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                    <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart" data-bs-toggle="modal" data-bs-target="#paymentModal"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                    <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Product Item 2 -->
          <div class="col">
            <div class="product-item">
              <figure>
                <a href="index.html" title="Product Title">
                  <img src="images/product-thumb-20.png" alt="Product Thumbnail" class="tab-image">
                </a>
              </figure>
              <div class="d-flex flex-column text-center">
                <h3 class="fs-6 fw-normal">Organic Almonds</h3>
                <div>
                  <span class="rating">
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                  </span>
                  <span>(150)</span>
                </div>
                <div class="d-flex justify-content-center align-items-center gap-2">
                  <del>$15.00</del>
                  <span class="text-dark fw-semibold">$12.00</span>
                  <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">20% OFF</span>
                </div>
                <div class="button-area p-3 pt-0">
                  <div class="row g-1 mt-2">
                    <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                    <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart" data-bs-toggle="modal" data-bs-target="#paymentModal"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                    <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Product Item 3 -->
          <div class="col">
            <div class="product-item">
              <figure>
                <a href="index.html" title="Product Title">
                  <img src="images/product-thumb-20.png" alt="Product Thumbnail" class="tab-image">
                </a>
              </figure>
              <div class="d-flex flex-column text-center">
                <h3 class="fs-6 fw-normal">Organic Almonds</h3>
                <div>
                  <span class="rating">
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                  </span>
                  <span>(150)</span>
                </div>
                <div class="d-flex justify-content-center align-items-center gap-2">
                  <del>$15.00</del>
                  <span class="text-dark fw-semibold">$12.00</span>
                  <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">20% OFF</span>
                </div>
                <div class="button-area p-3 pt-0">
                  <div class="row g-1 mt-2">
                    <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                    <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart" data-bs-toggle="modal" data-bs-target="#paymentModal"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                    <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
<!-- Product Item 4 -->
          <div class="col">
            <div class="product-item">
              <figure>
                <a href="index.html" title="Product Title">
                  <img src="images/product-thumb-20.png" alt="Product Thumbnail" class="tab-image">
                </a>
              </figure>
              <div class="d-flex flex-column text-center">
                <h3 class="fs-6 fw-normal">Organic Almonds</h3>
                <div>
                  <span class="rating">
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                  </span>
                  <span>(150)</span>
                </div>
                <div class="d-flex justify-content-center align-items-center gap-2">
                  <del>$15.00</del>
                  <span class="text-dark fw-semibold">$12.00</span>
                  <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">20% OFF</span>
                </div>
                <div class="button-area p-3 pt-0">
                  <div class="row g-1 mt-2">
                    <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                    <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart" data-bs-toggle="modal" data-bs-target="#paymentModal"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                    <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
<!-- Product Item 2 -->
          <div class="col">
            <div class="product-item">
              <figure>
                <a href="index.html" title="Product Title">
                  <img src="images/product-thumb-20.png" alt="Product Thumbnail" class="tab-image">
                </a>
              </figure>
              <div class="d-flex flex-column text-center">
                <h3 class="fs-6 fw-normal">Organic Almonds</h3>
                <div>
                  <span class="rating">
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                  </span>
                  <span>(150)</span>
                </div>
                <div class="d-flex justify-content-center align-items-center gap-2">
                  <del>$15.00</del>
                  <span class="text-dark fw-semibold">$12.00</span>
                  <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">20% OFF</span>
                </div>
                <div class="button-area p-3 pt-0">
                  <div class="row g-1 mt-2">
                    <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                    <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart" data-bs-toggle="modal" data-bs-target="#paymentModal"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                    <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
<!-- Product Item 2 -->
          <div class="col">
            <div class="product-item">
              <figure>
                <a href="index.html" title="Product Title">
                  <img src="images/product-thumb-20.png" alt="Product Thumbnail" class="tab-image">
                </a>
              </figure>
              <div class="d-flex flex-column text-center">
                <h3 class="fs-6 fw-normal">Organic Almonds</h3>
                <div>
                  <span class="rating">
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                  </span>
                  <span>(150)</span>
                </div>
                <div class="d-flex justify-content-center align-items-center gap-2">
                  <del>$15.00</del>
                  <span class="text-dark fw-semibold">$12.00</span>
                  <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">20% OFF</span>
                </div>
                <div class="button-area p-3 pt-0">
                  <div class="row g-1 mt-2">
                    <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                    <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart" data-bs-toggle="modal" data-bs-target="#paymentModal"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                    <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
<!-- Product Item 2 -->
          <div class="col">
            <div class="product-item">
              <figure>
                <a href="index.html" title="Product Title">
                  <img src="images/product-thumb-20.png" alt="Product Thumbnail" class="tab-image">
                </a>
              </figure>
              <div class="d-flex flex-column text-center">
                <h3 class="fs-6 fw-normal">Organic Almonds</h3>
                <div>
                  <span class="rating">
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                  </span>
                  <span>(150)</span>
                </div>
                <div class="d-flex justify-content-center align-items-center gap-2">
                  <del>$15.00</del>
                  <span class="text-dark fw-semibold">$12.00</span>
                  <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">20% OFF</span>
                </div>
                <div class="button-area p-3 pt-0">
                  <div class="row g-1 mt-2">
                    <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                    <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart" data-bs-toggle="modal" data-bs-target="#paymentModal"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                    <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
<!-- Product Item 2 -->
          <div class="col">
            <div class="product-item">
              <figure>
                <a href="index.html" title="Product Title">
                  <img src="images/product-thumb-20.png" alt="Product Thumbnail" class="tab-image">
                </a>
              </figure>
              <div class="d-flex flex-column text-center">
                <h3 class="fs-6 fw-normal">Organic Almonds</h3>
                <div>
                  <span class="rating">
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                  </span>
                  <span>(150)</span>
                </div>
                <div class="d-flex justify-content-center align-items-center gap-2">
                  <del>$15.00</del>
                  <span class="text-dark fw-semibold">$12.00</span>
                  <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">20% OFF</span>
                </div>
                <div class="button-area p-3 pt-0">
                  <div class="row g-1 mt-2">
                    <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                    <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart" data-bs-toggle="modal" data-bs-target="#paymentModal"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                    <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
<!-- Product Item 2 -->
          <div class="col">
            <div class="product-item">
              <figure>
                <a href="index.html" title="Product Title">
                  <img src="images/product-thumb-20.png" alt="Product Thumbnail" class="tab-image">
                </a>
              </figure>
              <div class="d-flex flex-column text-center">
                <h3 class="fs-6 fw-normal">Organic Almonds</h3>
                <div>
                  <span class="rating">
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                  </span>
                  <span>(150)</span>
                </div>
                <div class="d-flex justify-content-center align-items-center gap-2">
                  <del>$15.00</del>
                  <span class="text-dark fw-semibold">$12.00</span>
                  <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">20% OFF</span>
                </div>
                <div class="button-area p-3 pt-0">
                  <div class="row g-1 mt-2">
                    <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                    <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart" data-bs-toggle="modal" data-bs-target="#paymentModal"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                    <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
<!-- Product Item 2 -->
          <div class="col">
            <div class="product-item">
              <figure>
                <a href="index.html" title="Product Title">
                  <img src="images/product-thumb-20.png" alt="Product Thumbnail" class="tab-image">
                </a>
              </figure>
              <div class="d-flex flex-column text-center">
                <h3 class="fs-6 fw-normal">Organic Almonds</h3>
                <div>
                  <span class="rating">
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                  </span>
                  <span>(150)</span>
                </div>
                <div class="d-flex justify-content-center align-items-center gap-2">
                  <del>$15.00</del>
                  <span class="text-dark fw-semibold">$12.00</span>
                  <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">20% OFF</span>
                </div>
                <div class="button-area p-3 pt-0">
                  <div class="row g-1 mt-2">
                    <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                    <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart" data-bs-toggle="modal" data-bs-target="#paymentModal"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                    <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
<!-- Product Item 2 -->
          <div class="col">
            <div class="product-item">
              <figure>
                <a href="index.html" title="Product Title">
                  <img src="images/product-thumb-20.png" alt="Product Thumbnail" class="tab-image">
                </a>
              </figure>
              <div class="d-flex flex-column text-center">
                <h3 class="fs-6 fw-normal">Organic Almonds</h3>
                <div>
                  <span class="rating">
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                  </span>
                  <span>(150)</span>
                </div>
                <div class="d-flex justify-content-center align-items-center gap-2">
                  <del>$15.00</del>
                  <span class="text-dark fw-semibold">$12.00</span>
                  <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">20% OFF</span>
                </div>
                <div class="button-area p-3 pt-0">
                  <div class="row g-1 mt-2">
                    <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                    <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart" data-bs-toggle="modal" data-bs-target="#paymentModal"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                    <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
<!-- Product Item 2 -->
          <div class="col">
            <div class="product-item">
              <figure>
                <a href="index.html" title="Product Title">
                  <img src="images/product-thumb-20.png" alt="Product Thumbnail" class="tab-image">
                </a>
              </figure>
              <div class="d-flex flex-column text-center">
                <h3 class="fs-6 fw-normal">Organic Almonds</h3>
                <div>
                  <span class="rating">
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                  </span>
                  <span>(150)</span>
                </div>
                <div class="d-flex justify-content-center align-items-center gap-2">
                  <del>$15.00</del>
                  <span class="text-dark fw-semibold">$12.00</span>
                  <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">20% OFF</span>
                </div>
                <div class="button-area p-3 pt-0">
                  <div class="row g-1 mt-2">
                    <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                    <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart" data-bs-toggle="modal" data-bs-target="#paymentModal"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                    <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
<!-- Product Item 2 -->
          <div class="col">
            <div class="product-item">
              <figure>
                <a href="index.html" title="Product Title">
                  <img src="images/product-thumb-20.png" alt="Product Thumbnail" class="tab-image">
                </a>
              </figure>
              <div class="d-flex flex-column text-center">
                <h3 class="fs-6 fw-normal">Organic Almonds</h3>
                <div>
                  <span class="rating">
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                  </span>
                  <span>(150)</span>
                </div>
                <div class="d-flex justify-content-center align-items-center gap-2">
                  <del>$15.00</del>
                  <span class="text-dark fw-semibold">$12.00</span>
                  <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">20% OFF</span>
                </div>
                <div class="button-area p-3 pt-0">
                  <div class="row g-1 mt-2">
                    <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                    <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart" data-bs-toggle="modal" data-bs-target="#paymentModal"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                    <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
<!-- Product Item 2 -->
          <div class="col">
            <div class="product-item">
              <figure>
                <a href="index.html" title="Product Title">
                  <img src="images/product-thumb-20.png" alt="Product Thumbnail" class="tab-image">
                </a>
              </figure>
              <div class="d-flex flex-column text-center">
                <h3 class="fs-6 fw-normal">Organic Almonds</h3>
                <div>
                  <span class="rating">
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                  </span>
                  <span>(150)</span>
                </div>
                <div class="d-flex justify-content-center align-items-center gap-2">
                  <del>$15.00</del>
                  <span class="text-dark fw-semibold">$12.00</span>
                  <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">20% OFF</span>
                </div>
                <div class="button-area p-3 pt-0">
                  <div class="row g-1 mt-2">
                    <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                    <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart" data-bs-toggle="modal" data-bs-target="#paymentModal"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                    <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <!-- Product Item 3 -->
          <div class="col">
            <div class="product-item">
              <figure>
                <a href="index.html" title="Product Title">
                  <img src="images/product-thumb-19.png" alt="Product Thumbnail" class="tab-image">
                </a>
              </figure>
              <div class="d-flex flex-column text-center">
                <h3 class="fs-6 fw-normal">Organic Oats</h3>
                <div>
                  <span class="rating">
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-empty"></use></svg>
                  </span>
                  <span>(100)</span>
                </div>
                <div class="d-flex justify-content-center align-items-center gap-2">
                  <del>$10.00</del>
                  <span class="text-dark fw-semibold">$8.00</span>
                  <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                </div>
                <div class="button-area p-3 pt-0">
                  <div class="row g-1 mt-2">
                    <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                    <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart" data-bs-toggle="modal" data-bs-target="#paymentModal"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                    <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Product Item 4 -->
          <div class="col">
            <div class="product-item">
              <figure>
                <a href="index.html" title="Product Title">
                  <img src="images/product-thumb-21.png" alt="Product Thumbnail" class="tab-image">
                </a>
              </figure>
              <div class="d-flex flex-column text-center">
                <h3 class="fs-6 fw-normal">Avocado Oil</h3>
                <div>
                  <span class="rating">
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                  </span>
                  <span>(400)</span>
                </div>
                <div class="d-flex justify-content-center align-items-center gap-2">
                  <del>$25.00</del>
                  <span class="text-dark fw-semibold">$20.00</span>
                  <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">20% OFF</span>
                </div>
                <div class="button-area p-3 pt-0">
                  <div class="row g-1 mt-2">
                    <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                    <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart" data-bs-toggle="modal" data-bs-target="#paymentModal"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                    <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Add more product items (5-8) following the same structure -->

        </div>
      </div>
    </div>
  </div>

  <!-- Payment Modal -->
  <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="paymentModalLabel">Payment Information</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/process-payment" method="POST">
            <div class="mb-3">
              <label for="name" class="form-label">Name on Card</label>
              <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
              <label for="card-number" class="form-label">Card Number</label>
              <input type="text" class="form-control" id="card-number" name="card-number" required>
            </div>
            <div class="mb-3 row">
              <div class="col">
                <label for="expiry-date" class="form-label">Expiry Date</label>
                <input type="month" class="form-control" id="expiry-date" name="expiry-date" required>
              </div>
              <div class="col">
                <label for="cvv" class="form-label">CVV</label>
                <input type="text" class="form-control" id="cvv" name="cvv" required>
              </div>
            </div>
            <div class="mb-3">
              <button type="submit" class="btn btn-primary w-100">Pay Now</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS and Popper -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
  
  <!-- Optional: JS for modal, cart actions -->
  <script>
    // Additional JavaScript for handling cart interactions, etc.
    document.querySelectorAll('.btn-cart').forEach((button) => {
      button.addEventListener('click', function() {
        alert('Product added to cart! Proceed to payment.');
      });
    });
  </script>
    </section>
<!--------------------banner----------------------->
    <section class="py-3">
      <div class="container-lg">
        <div class="row">
          <div class="col-md-12">

            <div class="banner-blocks">
            
              <div class="banner-ad d-flex align-items-center large bg-info block-1" style="background: url('images/banner-ad-1.jpg') no-repeat; background-size: cover;">
                <div class="banner-content p-5">
                  <div class="content-wrapper text-light">
                    <h3 class="banner-title text-light">Items on SALE</h3>
                    <p>Discounts up to 30%</p>
                    <a href="#" class="btn-link text-white">Shop Now</a>
                  </div>
                </div>
              </div>
              
              <div class="banner-ad bg-success-subtle block-2" style="background:url('images/banner-ad-2.jpg') no-repeat;background-size: cover">
                <div class="banner-content align-items-center p-5">
                  <div class="content-wrapper text-light">
                    <h3 class="banner-title text-light">Combo offers</h3>
                    <p>Discounts up to 50%</p>
                    <a href="#" class="btn-link text-white">Shop Now</a>
                  </div>
                </div>
              </div>

              <div class="banner-ad bg-danger block-3" style="background:url('images/banner-ad-3.jpg') no-repeat;background-size: cover">
                <div class="banner-content align-items-center p-5">
                  <div class="content-wrapper text-light">
                    <h3 class="banner-title text-light">Discount Coupons</h3>
                    <p>Discounts up to 40%</p>
                    <a href="#" class="btn-link text-white">Shop Now</a>
                  </div>
                </div>
              </div>

            </div>
            <!-- / Banner Blocks -->
              
          </div>
        </div>
      </div>
    </section>
 
  
             

    <section id="featured-products" class="products-carousel">
    <div class="container-lg overflow-hidden py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header d-flex flex-wrap justify-content-between my-4">
                    <h2 class="section-title">Featured products</h2>
                    <div class="d-flex align-items-center">
                        <a href="#" class="btn btn-primary me-2">View All</a>
                    </div>
                </div>
            </div>
        </div>
      
        <!-- Product List -->
        <div class="row">
            <div class="col-md-12">
                <div class="swiper">
                    <div class="swiper-wrapper" id="product-list">
                        <!-- Products will be loaded here via JavaScript -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Payment Modal -->
<div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="paymentModalLabel">Secure Payment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="paymentForm">
                    <p id="productDetails"></p>
                    <div class="mb-3">
                        <label for="cardNumber" class="form-label">Card Number</label>
                        <input type="text" class="form-control" id="cardNumber" placeholder="**** **** **** ****" required>
                    </div>
                    <div class="mb-3">
                        <label for="expiry" class="form-label">Expiry Date</label>
                        <input type="text" class="form-control" id="expiry" placeholder="MM/YY" required>
                    </div>
                    <div class="mb-3">
                        <label for="cvv" class="form-label">CVV</label>
                        <input type="text" class="form-control" id="cvv" placeholder="***" required>
                    </div>
                    <div class="mb-3">
                        <label for="nameOnCard" class="form-label">Name on Card</label>
                        <input type="text" class="form-control" id="nameOnCard" required>
                    </div>
                    <button type="submit" class="btn btn-success w-100">Pay Now</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    fetch("fetch_products.php")
        .then(response => response.json())
        .then(products => {
            let productList = document.getElementById("product-list");
            productList.innerHTML = ""; // Clear existing items

            products.forEach(product => {
                let productHTML = `
                    <div class="product-item swiper-slide">
                        <figure>
                            <a href="#" title="${product.name}">
                                <img src="images/${product.image}" alt="Product Thumbnail" class="tab-image">
                            </a>
                        </figure>
                        <div class="d-flex flex-column text-center">
                            <h3 class="fs-6 fw-normal">${product.name}</h3>
                            <div>
                                <span class="rating">⭐⭐⭐⭐⭐</span>
                                <span>(${product.reviews})</span>
                            </div>
                            <div class="d-flex justify-content-center align-items-center gap-2">
                                <del>$${product.old_price}</del>
                                <span class="text-dark fw-semibold">$${product.price}</span>
                                <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">${product.discount}% OFF</span>
                            </div>
                            <div class="button-area p-3 pt-0">
                                <div class="row g-1 mt-2">
                                    <div class="col-3">
                                        <input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1">
                                    </div>
                                    <div class="col-7">
                                        <button class="btn btn-primary rounded-1 p-2 fs-7 btn-buy-now" data-bs-toggle="modal" data-bs-target="#paymentModal" data-product="${product.name}" data-price="${product.price}">
                                            <i class="fas fa-shopping-cart"></i> Buy Now
                                        </button>
                                    </div>
                                    <div class="col-2">
                                        <a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><i class="fas fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>`;
                productList.innerHTML += productHTML;
            });

            // Add event listeners for "Buy Now" buttons
            document.querySelectorAll(".btn-buy-now").forEach(button => {
                button.addEventListener("click", function() {
                    let productName = this.getAttribute("data-product");
                    let productPrice = this.getAttribute("data-price");
                    document.getElementById("productDetails").innerHTML = `<strong>Product:</strong> ${productName} <br> <strong>Price:</strong> $${productPrice}`;
                });
            });
        });

    document.getElementById("paymentForm").addEventListener("submit", function(event) {
        event.preventDefault();
        alert("Payment successful! Thank you for your purchase.");
        let paymentModal = new bootstrap.Modal(document.getElementById('paymentModal'));
        paymentModal.hide();
    });
});
</script>
      </section>
             

    <section id="latest-blog" class="pb-4">
      <div class="container-lg">
        <div class="row">
          <div class="section-header d-flex align-items-center justify-content-between my-4">
            <h2 class="section-title">Our Recent Blog</h2>
            <a href="#" class="btn btn-primary">View All</a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <article class="post-item card border-0 shadow-sm p-3">
              <div class="image-holder zoom-effect">
                <a href="#">
                  <img src="images/post-thumbnail-1.jpg" alt="post" class="card-img-top">
                </a>
              </div>
              <div class="card-body">
                <div class="post-meta d-flex text-uppercase gap-3 my-2 align-items-center">
                  <div class="meta-date"><svg width="16" height="16"><use xlink:href="#calendar"></use></svg>22 Aug 2021</div>
                  <div class="meta-categories"><svg width="16" height="16"><use xlink:href="#category"></use></svg>tips & tricks</div>
                </div>
                <div class="post-header">
                  <h3 class="post-title">
                    <a href="#" class="text-decoration-none">Top 10 casual look ideas to dress up your kids</a>
                  </h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipi elit. Aliquet eleifend viverra enim tincidunt donec quam. A in arcu, hendrerit neque dolor morbi...</p>
                </div>
              </div>
            </article>
          </div>
          <div class="col-md-4">
            <article class="post-item card border-0 shadow-sm p-3">
              <div class="image-holder zoom-effect">
                <a href="#">
                  <img src="images/post-thumbnail-2.jpg" alt="post" class="card-img-top">
                </a>
              </div>
              <div class="card-body">
                <div class="post-meta d-flex text-uppercase gap-3 my-2 align-items-center">
                  <div class="meta-date"><svg width="16" height="16"><use xlink:href="#calendar"></use></svg>25 Aug 2021</div>
                  <div class="meta-categories"><svg width="16" height="16"><use xlink:href="#category"></use></svg>trending</div>
                </div>
                <div class="post-header">
                  <h3 class="post-title">
                    <a href="#" class="text-decoration-none">Latest trends of wearing street wears supremely</a>
                  </h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipi elit. Aliquet eleifend viverra enim tincidunt donec quam. A in arcu, hendrerit neque dolor morbi...</p>
                </div>
              </div>
            </article>
          </div>
          <div class="col-md-4">
            <article class="post-item card border-0 shadow-sm p-3">
              <div class="image-holder zoom-effect">
                <a href="#">
                  <img src="images/post-thumbnail-3.jpg" alt="post" class="card-img-top">
                </a>
              </div>
              <div class="card-body">
                <div class="post-meta d-flex text-uppercase gap-3 my-2 align-items-center">
                  <div class="meta-date"><svg width="16" height="16"><use xlink:href="#calendar"></use></svg>28 Aug 2021</div>
                  <div class="meta-categories"><svg width="16" height="16"><use xlink:href="#category"></use></svg>inspiration</div>
                </div>
                <div class="post-header">
                  <h3 class="post-title">
                    <a href="#" class="text-decoration-none">10 Different Types of comfortable clothes ideas</a>
                  </h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipi elit. Aliquet eleifend viverra enim tincidunt donec quam. A in arcu, hendrerit neque dolor morbi...</p>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>
             
   <div class="container mt-4">
    <h2 class="text-center mb-4">Product List</h2>
    <div class="row">
        <?php
        $query = "SELECT * FROM products";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
        ?>
                <div class="col-md-4 mb-4">
                    <div class="card p-3">
                        <img src="<?php echo $row['image']; ?>" class="card-img-top" alt="Product Image">
                        <div class="card-body text-center">
                            <h5 class="card-title"><?php echo $row['name']; ?></h5>
                            <p class="text-muted"><del>$<?php echo number_format($row['price'], 2); ?></del></p>
                            <p class="fw-bold text-dark">$<?php echo number_format($row['discount_price'], 2); ?></p>
                            <p>⭐ <?php echo number_format($row['rating'], 1); ?> / 5</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#paymentModal">Buy Now</button>
                        </div>
                    </div>
                </div>
        <?php
            }
        } else {
            echo "<p class='text-center'>No products found.</p>";
        }
        $conn->close();
        ?>
    </div>
</div>

<!-- Payment Modal -->
<div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Complete Your Purchase</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="process_payment.php" method="POST">
                    <div class="mb-3">
                        <label for="cardNumber" class="form-label">Card Number</label>
                        <input type="text" class="form-control" id="cardNumber" name="cardNumber" required>
                    </div>
                    <div class="mb-3">
                        <label for="expiryDate" class="form-label">Expiry Date</label>
                        <input type="text" class="form-control" id="expiryDate" name="expiryDate" placeholder="MM/YY" required>
                    </div>
                    <div class="mb-3">
                        <label for="cvv" class="form-label">CVV</label>
                        <input type="text" class="form-control" id="cvv" name="cvv" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Pay Now</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    

    <section class="py-4">
      <div class="container-lg">
        <h2 class="my-4">People are also looking for</h2>
        <a href="#" class="btn btn-warning me-2 mb-2">Blue diamon almonds</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Angie’s Boomchickapop Corn</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Salty kettle Corn</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Chobani Greek Yogurt</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Sweet Vanilla Yogurt</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Foster Farms Takeout Crispy wings</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Warrior Blend Organic</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Chao Cheese Creamy</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Chicken meatballs</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Blue diamon almonds</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Angie’s Boomchickapop Corn</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Salty kettle Corn</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Chobani Greek Yogurt</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Sweet Vanilla Yogurt</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Foster Farms Takeout Crispy wings</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Warrior Blend Organic</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Chao Cheese Creamy</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Chicken meatballs</a>
      </div>
    </section>

    <section class="py-5">
      <div class="container-lg">
        <div class="row row-cols-1 row-cols-sm-3 row-cols-lg-5">
          <div class="col">
            <div class="card mb-3 border border-dark-subtle p-3">
              <div class="text-dark mb-3">
                <svg width="32" height="32"><use xlink:href="#package"></use></svg>
              </div>
              <div class="card-body p-0">
                <h5>Free delivery</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipi elit.</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-3 border border-dark-subtle p-3">
              <div class="text-dark mb-3">
                <svg width="32" height="32"><use xlink:href="#secure"></use></svg>
              </div>
              <div class="card-body p-0">
                <h5>100% secure payment</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipi elit.</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-3 border border-dark-subtle p-3">
              <div class="text-dark mb-3">
                <svg width="32" height="32"><use xlink:href="#quality"></use></svg>
              </div>
              <div class="card-body p-0">
                <h5>Quality guarantee</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipi elit.</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-3 border border-dark-subtle p-3">
              <div class="text-dark mb-3">
                <svg width="32" height="32"><use xlink:href="#savings"></use></svg>
              </div>
              <div class="card-body p-0">
                <h5>guaranteed savings</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipi elit.</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-3 border border-dark-subtle p-3">
              <div class="text-dark mb-3">
                <svg width="32" height="32"><use xlink:href="#offers"></use></svg>
              </div>
              <div class="card-body p-0">
                <h5>Daily offers</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipi elit.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<!---footer  page--->

<section class="uf-contact-form-01 mx-auto">
    <div class="container">
        <div class="row justify-content-center bg-white rounded-4 shadow py-5 gx-5 px-lg-5">
            <div class="col-md-6 text-center">
                <h2 class="uf-ct-01-text-primary text-uppercase fw-bold">Contact Us</h2>
                <p>Send Message <a href="mailto:abcd@gmail.com" class="text-decoration-none">abcd@gmail.com</a></p>
                <img src="images/21726902_6509980.svg" alt="Plane Image" class="uf-img-contact-form-01 pt-4 d-md-block d-none">
            </div>
            <div class="col-md-6">
                <form action="#" method="post">
                    <div class="mb-3">
                        <label for="uf-imail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="uf-imail" aria-describedby="emailHelp" required>
                        <div id="emailHelp" class="form-text uf-ct-01-text-primary">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="uf-iname" class="form-label">Your name</label>
                        <input type="text" class="form-control" id="uf-iname" required>
                    </div>
                    <div class="mb-3">
                        <label for="uf-itextarea" class="form-label">Your message</label>
                        <textarea class="form-control" id="uf-itextarea" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-lg uf-ct-01-btn-primary">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
  <script>
  // Wait for the DOM to be fully loaded
  document.addEventListener('DOMContentLoaded', function () {

    // Get the form element
    const form = document.querySelector('form');
    
    // Get the form fields
    const emailField = document.getElementById('uf-imail');
    const nameField = document.getElementById('uf-iname');
    const messageField = document.getElementById('uf-itextarea');
    
    // Form submission event listener
    form.addEventListener('submit', function (event) {
      // Prevent the form from submitting if there are validation errors
      event.preventDefault();

      // Validate the fields
      let isValid = true;

      // Check if email is valid
      if (!validateEmail(emailField.value)) {
        alert("Please enter a valid email address.");
        isValid = false;
      }

      // Check if the name is provided
      if (nameField.value.trim() === "") {
        alert("Please enter your name.");
        isValid = false;
      }

      // Check if the message is provided
      if (messageField.value.trim() === "") {
        alert("Please enter your message.");
        isValid = false;
      }

      // If everything is valid, submit the form
      if (isValid) {
        form.submit(); // In a real-world scenario, this would send the form data
        alert("Your message has been sent successfully!");
      }
    });

    // Function to validate email format
    function validateEmail(email) {
      const regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
      return regex.test(email);
    }

  });
</script>

</script>

 <!-- Footer -->
  <footer class="text-center text-lg-start">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-between p-4" style="background-color:rgb(187, 206, 81);">
      <div class="me-5">
        <span>Get connected with us on social networks:</span>
      </div>
      <div class="social-links">
        <a href="" class="me-4"><i class="fab fa-facebook-f"></i></a>
        <a href="" class="me-4"><i class="fab fa-twitter"></i></a>
        <a href="" class="me-4"><i class="fab fa-google"></i></a>
        <a href="" class="me-4"><i class="fab fa-instagram"></i></a>
        <a href="" class="me-4"><i class="fab fa-linkedin"></i></a>
        <a href="" class="me-4"><i class="fab fa-github"></i></a>
      </div>
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links -->
    <section>
      <div class="container text-center text-md-start mt-5">
        <div class="row mt-3">
          <!-- Company Info -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 footer-links">
            <h6>Company name</h6>
            <hr style="width: 60px; background-color: #7c4dff; height: 2px;">
            <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </div>

         
        <!-- Customer Service -->
        <div class="col-lg-2 col-md-6 mb-4 footer-links">
          <h6>Customer Service</h6>
          <hr style="width: 60px; background-color: #7c4dff; height: 2px;">
          <p><a href="#!">FAQ</a></p>
          <p><a href="#!">Order Tracking</a></p>
          <p><a href="#!">Returns & Exchanges</a></p>
          <p><a href="#!">Shipping Info</a></p>
          <p><a href="#!">Privacy Policy</a></p>
        </div>

          <!-- Useful Links -->
          <!-- Quick Links -->
        <div class="col-lg-2 col-md-6 mb-4 footer-links">
          <h6>Useful links</h6>
          <hr style="width: 60px; background-color: #7c4dff; height: 2px;">
          <p><a href="#!">Home</a></p>
          <p><a href="#!">Shop</a></p>
          <p><a href="#!">Categories</a></p>
          <p><a href="#!">About Us</a></p>
          <p><a href="#!">Contact</a></p>
        </div>

          <!-- Contact Info -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 footer-links">
            <h6>Contact</h6>
            <hr style="width: 60px; background-color: #7c4dff; height: 2px;">
            <p><i class="fas fa-home mr-3"></i>Ampara Road, Mahaoya</p>
            <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
            <p><i class="fas fa-phone mr-3"></i> + 011 234 567 88</p>
            <p><i class="fas fa-print mr-3"></i> + 011 234 567 89</p>
          </div>
        </div>
      </div>
    </section>
  </footer>
</div>



    
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
     <!-- Bootstrap JS and dependencies -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="js/plugins.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>