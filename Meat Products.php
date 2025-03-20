<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meat Product</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
       <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Swiper CSS (for the product carousel) -->
    <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome for Icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
  <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .section {
            padding: 60px 0;
        }
        .navbar {
            margin-bottom: 20px;
        }
        .hero {
            background: #3498db;
            color: white;
            text-align: center;
            padding: 80px 0;
        }
        .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
        }
        /* Basic reset and layout */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body and container styling */
body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f9;
    color: #333;
}

/* Section Styling */
#featured-products {
    background-color: #fff;
    padding: 50px 0;
}

#featured-products .section-header {
    margin-bottom: 30px;
}

#featured-products .section-title {
    font-size: 2rem;
    font-weight: bold;
    color: #333;
}

/* Search and Filter styling */
#featured-products .row.mb-4 {
    margin-top: 20px;
}

#searchInput,
#filterCategory {
    font-size: 1rem;
    padding: 10px;
}

#filterCategory {
    max-width: 250px;
}

/* Product Card Styling */
.product-card {
    margin-bottom: 30px;
    display: flex;
    justify-content: center;
}

.product-card .card {
    border: 1px solid #ddd;
    border-radius: 10px;
    overflow: hidden;
    width: 100%;
    transition: box-shadow 0.3s ease;
}

.product-card .card:hover {
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.card-img-top {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-bottom: 1px solid #ddd;
}

.card-body {
    padding: 15px;
}

.card-title {
    font-size: 1.2rem;
    font-weight: bold;
    color: #333;
    margin-bottom: 10px;
}

.card-text {
    font-size: 1rem;
    color: #777;
    margin-bottom: 15px;
}

.payment-btn {
    background-color: #28a745;
    color: #fff;
    border: none;
    padding: 10px 20px;
    font-size: 1rem;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}
  .contact-btn-container {
      text-align: -5px;    
}

        .contact-btn {
            font-size: 18px;
            padding: 15px 30px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .contact-btn:hover {
            background-color:rgb(6, 179, 0);
        }

        .contact-info {
            margin-top: 20px;
            font-size: 18px;
        }
.payment-btn:hover {
    background-color:rgb(245, 12, 32);
}

/* Modal Styling */
.modal-content {
    border-radius: 10px;
    padding: 30px;
}

.modal-header {
    border-bottom: 1px solid #ddd;
}

.modal-title {
    font-size: 1.5rem;
    color: #333;
}

.btn-close {
    background-color: transparent;
    border: none;
    font-size: 1.5rem;
    color: #333;
}

.modal-body {
    padding: 20px 0;
}

.modal-body input {
    margin-bottom: 15px;
    font-size: 1rem;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    width: 100%;
}

.modal-body button {
    width: 100%;
    padding: 12px;
    font-size: 1.1rem;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
/* Custom Styles */
    .footer {
      background-color:rgb(31, 245, 12);
      color: white;
    }

    .footer .social-media {
      background-color:rgb(19, 26, 0);
    }

    .footer h6 {
      color: #fff;
      font-weight: bold;
    }

    .footer hr {
      width: 60px;
      background-color: #7c4dff;
      height: 2px;
    }

    .footer .text-white {
      color: white;
    }

    .footer .text-white:hover {
      color: #7c4dff;
    }

    .footer .fab {
      font-size: 20px;
    }
.modal-body button:hover {
    background-color: #0056b3;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .product-card {
        width: 100%;
        margin-bottom: 20px;
    }

    .modal-body input {
        font-size: 0.9rem;
    }

    .modal-body button {
        font-size: 1rem;
    }
}

@media (max-width: 576px) {
    .card-body {
        padding: 10px;
    }

    .card-title {
        font-size: 1rem;
    }

    .card-text {
        font-size: 0.9rem;
    }

    .payment-btn {
        font-size: 0.9rem;
    }
}

    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">E-Commace</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <div id="home" class="hero">
        <h1>Fruits & Veges</h1>
    </div>

    <!-- product Section -->
   <section id="featured-products" class="products-carousel">
    <div class="container-lg overflow-hidden py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header d-flex flex-wrap justify-content-between my-4">
                    <h2 class="section-title">Featured Products</h2>
                    <div class="d-flex align-items-center">
                        <a href="#" class="btn btn-primary me-2">View All</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Search and Filter Section -->
        <div class="row mb-4">
            <div class="col-md-6">
                <input type="text" id="searchInput" class="form-control" placeholder="Search products...">
            </div>
            <div class="col-md-6">
                <select id="filterCategory" class="form-select">
                    <option value="">Filter by Category</option>
                    <option value="electronics">Electronics</option>
                    <option value="clothing">Clothing</option>
                    <option value="accessories">Accessories</option>
                </select>
            </div>
        </div>

        <!-- Product List -->
        <div class="row" id="product-list">
            <!-- Product 1 to Product 24 -->
            <div class="col-md-3 product-card" data-category="electronics">
                <div class="card">
                    <img src="images/Meat Product/image 001.jpg" class="card-img-top" alt="Product 1">
                    <div class="card-body">
                        <h5 class="card-title">Product 1</h5>
                        <p class="card-text">$199.99</p>
                        <button class="btn btn-success payment-btn" data-product-id="1" data-product-name="Product 1" data-product-price="199.99">Pay Now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 product-card" data-category="clothing">
                <div class="card">
                    <img src="images/Meat Product/image 002.jpg" class="card-img-top" alt="Product 2">
                    <div class="card-body">
                        <h5 class="card-title">Product 2</h5>
                        <p class="card-text">$49.99</p>
                        <button class="btn btn-success payment-btn" data-product-id="2" data-product-name="Product 2" data-product-price="49.99">Pay Now</button>
                    </div>
                </div>
            </div>
            <!-- Product 3 to Product 24 -->
            <div class="col-md-3 product-card" data-category="electronics">
                <div class="card">
                    <img src="images/Meat Product/image 003.jpg" class="card-img-top" alt="Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Product 3</h5>
                        <p class="card-text">$399.99</p>
                        <button class="btn btn-success payment-btn" data-product-id="3" data-product-name="Product 3" data-product-price="399.99">Pay Now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 product-card" data-category="clothing">
                <div class="card">
                    <img src="images/Meat Product/image 004.jpg" class="card-img-top" alt="Product 4">
                    <div class="card-body">
                        <h5 class="card-title">Product 4</h5>
                        <p class="card-text">$79.99</p>
                        <button class="btn btn-success payment-btn" data-product-id="4" data-product-name="Product 4" data-product-price="79.99">Pay Now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 product-card" data-category="accessories">
                <div class="card">
                    <img src="images/Meat Product/image 005.jpg" class="card-img-top" alt="Product 5">
                    <div class="card-body">
                        <h5 class="card-title">Product 5</h5>
                        <p class="card-text">$19.99</p>
                        <button class="btn btn-success payment-btn" data-product-id="5" data-product-name="Product 5" data-product-price="19.99">Pay Now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 product-card" data-category="electronics">
                <div class="card">
                    <img src="images/Meat Product/image 006.jpg" class="card-img-top" alt="Product 6">
                    <div class="card-body">
                        <h5 class="card-title">Product 6</h5>
                        <p class="card-text">$499.99</p>
                        <button class="btn btn-success payment-btn" data-product-id="6" data-product-name="Product 6" data-product-price="499.99">Pay Now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 product-card" data-category="clothing">
                <div class="card">
                    <img src="images/Meat Product/image 007.jpg" class="card-img-top" alt="Product 7">
                    <div class="card-body">
                        <h5 class="card-title">Product 7</h5>
                        <p class="card-text">$89.99</p>
                        <button class="btn btn-success payment-btn" data-product-id="7" data-product-name="Product 7" data-product-price="89.99">Pay Now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 product-card" data-category="accessories">
                <div class="card">
                    <img src="images/Meat Product/image 008.jpg" class="card-img-top" alt="Product 8">
                    <div class="card-body">
                        <h5 class="card-title">Product 8</h5>
                        <p class="card-text">$29.99</p>
                        <button class="btn btn-success payment-btn" data-product-id="8" data-product-name="Product 8" data-product-price="29.99">Pay Now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 product-card" data-category="electronics">
                <div class="card">
                    <img src="images/Meat Product/image 009.jpg" class="card-img-top" alt="Product 9">
                    <div class="card-body">
                        <h5 class="card-title">Product 9</h5>
                        <p class="card-text">$599.99</p>
                        <button class="btn btn-success payment-btn" data-product-id="9" data-product-name="Product 9" data-product-price="599.99">Pay Now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 product-card" data-category="clothing">
                <div class="card">
                    <img src="images/Meat Product/image 110.jpg" class="card-img-top" alt="Product 10">
                    <div class="card-body">
                        <h5 class="card-title">Product 10</h5>
                        <p class="card-text">$59.99</p>
                        <button class="btn btn-success payment-btn" data-product-id="10" data-product-name="Product 10" data-product-price="59.99">Pay Now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 product-card" data-category="accessories">
                <div class="card">
                    <img src="images/Meat Product/image 111.jpg" class="card-img-top" alt="Product 11">
                    <div class="card-body">
                        <h5 class="card-title">Product 11</h5>
                        <p class="card-text">$79.99</p>
                        <button class="btn btn-success payment-btn" data-product-id="11" data-product-name="Product 11" data-product-price="79.99">Pay Now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 product-card" data-category="electronics">
                <div class="card">
                    <img src="images/Meat Product/image 112.jpg" class="card-img-top" alt="Product 12">
                    <div class="card-body">
                        <h5 class="card-title">Product 12</h5>
                        <p class="card-text">$199.99</p>
                        <button class="btn btn-success payment-btn" data-product-id="12" data-product-name="Product 12" data-product-price="199.99">Pay Now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 product-card" data-category="clothing">
                <div class="card">
                    <img src="images/Meat Product/image 113.jpg" class="card-img-top" alt="Product 13">
                    <div class="card-body">
                        <h5 class="card-title">Product 13</h5>
                        <p class="card-text">$129.99</p>
                        <button class="btn btn-success payment-btn" data-product-id="13" data-product-name="Product 13" data-product-price="129.99">Pay Now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 product-card" data-category="accessories">
                <div class="card">
                    <img src="images/Meat Product/image 114.jpg" class="card-img-top" alt="Product 14">
                    <div class="card-body">
                        <h5 class="card-title">Product 14</h5>
                        <p class="card-text">$15.99</p>
                        <button class="btn btn-success payment-btn" data-product-id="14" data-product-name="Product 14" data-product-price="15.99">Pay Now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 product-card" data-category="electronics">
                <div class="card">
                    <img src="images/Meat Product/image 115.jpg" class="card-img-top" alt="Product 15">
                    <div class="card-body">
                        <h5 class="card-title">Product 15</h5>
                        <p class="card-text">$499.99</p>
                        <button class="btn btn-success payment-btn" data-product-id="15" data-product-name="Product 15" data-product-price="499.99">Pay Now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 product-card" data-category="clothing">
                <div class="card">
                    <img src="images/Meat Product/image 116.jpg" class="card-img-top" alt="Product 16">
                    <div class="card-body">
                        <h5 class="card-title">Product 16</h5>
                        <p class="card-text">$69.99</p>
                        <button class="btn btn-success payment-btn" data-product-id="16" data-product-name="Product 16" data-product-price="69.99">Pay Now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 product-card" data-category="accessories">
                <div class="card">
                    <img src="images/Meat Product/image 117.jpg" class="card-img-top" alt="Product 17">
                    <div class="card-body">
                        <h5 class="card-title">Product 17</h5>
                        <p class="card-text">$45.99</p>
                        <button class="btn btn-success payment-btn" data-product-id="17" data-product-name="Product 17" data-product-price="45.99">Pay Now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 product-card" data-category="electronics">
                <div class="card">
                    <img src="images/Meat Product/image 118.jpg" class="card-img-top" alt="Product 18">
                    <div class="card-body">
                        <h5 class="card-title">Product 18</h5>
                        <p class="card-text">$399.99</p>
                        <button class="btn btn-success payment-btn" data-product-id="18" data-product-name="Product 18" data-product-price="399.99">Pay Now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 product-card" data-category="clothing">
                <div class="card">
                    <img src="images/Meat Product/image 119.jpg" class="card-img-top" alt="Product 19">
                    <div class="card-body">
                        <h5 class="card-title">Product 19</h5>
                        <p class="card-text">$99.99</p>
                        <button class="btn btn-success payment-btn" data-product-id="19" data-product-name="Product 19" data-product-price="99.99">Pay Now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 product-card" data-category="accessories">
                <div class="card">
                    <img src="images/Meat Product/image 120.jpg" class="card-img-top" alt="Product 20">
                    <div class="card-body">
                        <h5 class="card-title">Product 20</h5>
                        <p class="card-text">$25.99</p>
                        <button class="btn btn-success payment-btn" data-product-id="20" data-product-name="Product 20" data-product-price="25.99">Pay Now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 product-card" data-category="electronics">
                <div class="card">
                    <img src="images/Meat Product/image 121.jpg" class="card-img-top" alt="Product 21">
                    <div class="card-body">
                        <h5 class="card-title">Product 21</h5>
                        <p class="card-text">$159.99</p>
                        <button class="btn btn-success payment-btn" data-product-id="21" data-product-name="Product 21" data-product-price="159.99">Pay Now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 product-card" data-category="clothing">
                <div class="card">
                    <img src="images/Meat Product/image 122.jpg" class="card-img-top" alt="Product 22">
                    <div class="card-body">
                        <h5 class="card-title">Product 22</h5>
                        <p class="card-text">$49.99</p>
                        <button class="btn btn-success payment-btn" data-product-id="22" data-product-name="Product 22" data-product-price="49.99">Pay Now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 product-card" data-category="accessories">
                <div class="card">
                    <img src="images/Meat Product/image 123.jpg" class="card-img-top" alt="Product 23">
                    <div class="card-body">
                        <h5 class="card-title">Product 23</h5>
                        <p class="card-text">$34.99</p>
                        <button class="btn btn-success payment-btn" data-product-id="23" data-product-name="Product 23" data-product-price="34.99">Pay Now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 product-card" data-category="electronics">
                <div class="card">
                    <img src="images/Meat Product/image 124.jpg" class="card-img-top" alt="Product 24">
                    <div class="card-body">
                        <h5 class="card-title">Product 24</h5>
                        <p class="card-text">$899.99</p>
                        <button class="btn btn-success payment-btn" data-product-id="24" data-product-name="Product 24" data-product-price="899.99">Pay Now</button>
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
                <h5 class="modal-title" id="paymentModalLabel">Payment Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Payment Form -->
                <form id="paymentForm">
                    <div class="mb-3">
                        <label for="paymentProductName" class="form-label">Product Name</label>
                        <input type="text" id="paymentProductName" class="form-control" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="paymentAmount" class="form-label">Amount</label>
                        <input type="text" id="paymentAmount" class="form-control" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="cardNumber" class="form-label">Card Number</label>
                        <input type="text" class="form-control" id="cardNumber" placeholder="1234 5678 1234 5678" required>
                    </div>
                    <div class="mb-3">
                        <label for="expirationDate" class="form-label">Expiration Date</label>
                        <input type="text" class="form-control" id="expirationDate" placeholder="MM/YY" required>
                    </div>
                    <div class="mb-3">
                        <label for="cvv" class="form-label">CVV</label>
                        <input type="text" class="form-control" id="cvv" placeholder="123" required>
                    </div>
                    <div class="mb-3">
                        <label for="billingAddress" class="form-label">Billing Address</label>
                        <input type="text" class="form-control" id="billingAddress" placeholder="123 Street Name" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit Payment</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS & jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0-alpha1/js/bootstrap.bundle.min.js"></script>
<script>
    // Handling the Payment Button Click
    $('.payment-btn').on('click', function () {
        var productName = $(this).data('product-name');
        var productPrice = $(this).data('product-price');

        $('#paymentProductName').val(productName);
        $('#paymentAmount').val('$' + productPrice);

        $('#paymentModal').modal('show');
    });

    // Payment Form Submission
    $('#paymentForm').on('submit', function (event) {
        event.preventDefault();
        alert('Payment submitted successfully!');
        $('#paymentModal').modal('hide');
    });

    // Product Search and Filter Logic
    $('#searchInput').on('input', function () {
        var query = $(this).val().toLowerCase();
        $('.product-card').each(function () {
            var productName = $(this).find('.card-title').text().toLowerCase();
            $(this).toggle(productName.indexOf(query) !== -1);
        });
    });

    $('#filterCategory').on('change', function () {
        var selectedCategory = $(this).val();
        $('.product-card').each(function () {
            var category = $(this).data('category');
            $(this).toggle(selectedCategory === '' || category === selectedCategory);
        });
    });
</script>
    <!-- Services Section -->
   

    <!-- Contact Section -->
    <div class="contact-btn-container">
        <!-- Button to trigger contact action -->
        <button id="contactButton" class="contact-btn">Contact Us</button>

        <!-- Displaying contact number after button click -->
        <div id="contactInfo" class="contact-info" style="display: none;">
            <p>Call us now: <strong>+1 234 567 890</strong></p>
        </div>
    </div>

    <!-- Bootstrap 5 JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <!-- Custom JavaScript -->
    <script>
        // Add event listener to the button
        document.getElementById('contactButton').addEventListener('click', function() {
            // Display the contact info
            const contactInfo = document.getElementById('contactInfo');
            contactInfo.style.display = 'block';

            // Optional: Open the phone dialer (for mobile devices)
            window.location.href = 'tel:+1234567890';
        });
    </script>

    <!-- Footer -->
  <!-- Footer -->
  <footer class="footer text-center text-lg-start text-white">
    <!-- Section: Social media -->
    <section class="social-media d-flex justify-content-between p-4">
      <div class="me-5">
        <span>Get connected with us on social networks:</span>
      </div>

      <div>
        <a href="" class="text-white me-4">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-github"></i>
        </a>
      </div>
    </section>

    <!-- Section: Links  -->
    <section>
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <h6>E-Commace</h6>
            <hr>
            <p>
              Here you can use rows and columns to organize your footer content.
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </p>
          </div>

          <!-- Grid column -->
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

          <!-- Grid column -->
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


          <!-- Grid column -->
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

  <!-- Bootstrap JS and dependencies -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
