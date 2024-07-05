<?php include('./includes/header.php'); ?>
<header class="mt-5 text-center text-dark">
    <div class="heading_container heading_center">
        <h2 class="display-4">Website Development Services</h2>
    </div>
    <p class="lead">Build a strong online presence with our expert website development services.</p>
</header>

<!-- Services Section -->
<section class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-6">
            <div class="heading_container heading_center">
                <h2>Our Website Development Services</h2>
            </div>
            <p>At [Your Digital Agency Name], we offer comprehensive website development services to create robust, scalable, and visually appealing websites. Our team of skilled developers uses the latest technologies and best practices to deliver high-performing websites tailored to your business needs.</p>
            <ul>
                <li>Custom Website Development</li>
                <li>E-commerce Solutions</li>
                <li>Content Management Systems (CMS)</li>
                <li>Responsive Web Design</li>
                <li>Website Maintenance and Support</li>
            </ul>
        </div>
        <div class="col-md-6">
            <img src="./images/webs.jpg" class="img-fluid border-radius" alt="Website Development" >
        </div>
    </div>
</section>

<!-- Portfolio Section -->
<section class="container mt-5 mb-5">
    <div class="heading_container heading_center">
        <h2>Our Portfolio</h2>
    </div>
    <div class="row mt-3">
        <div class="col-md-4 mt-3">
            <div class="card">
                <img src="./images/ecom.jpg" class="card-img-top" alt="Website Project 1">
                <div class="card-body">
                    <h5 class="card-title text-center">E-commerce Website</h5>
                    <p class="card-text text-justify pb-1">
                    We developed a fully functional e-commerce platform with a seamless shopping experience, integrated payment gateways, and responsive design.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-3">
            <div class="card">
                <img src="./images/corp.png" class="card-img-top" alt="Website Project 2">
                <div class="card-body">
                    <h5 class="card-title text-center">Corporate Website</h5>
                    <p class="card-text text-justify p-2">
                    A professional corporate website with a clean, modern design, intuitive navigation, and optimized performance to enhance the brand's online presence.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-3">
            <div class="card">
                <img src="./images/port.jpg" class="card-img-top" alt="Website Project 3">
                <div class="card-body">
                    <h5 class="card-title text-center">Portfolio Website</h5>
                    <p class="card-text text-justify p-1">
                    A visually stunning portfolio website showcasing the client's work, with a focus on user experience and interactive design elements.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="client_section">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>What Our Clients Say</h2>
        </div>
    </div>
    <div id="customCarousel2" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 mx-auto">
                            <div class="box">
                                <div class="img-box">
                                    <img src="images/client.jpg" alt="">
                                </div>
                                <div class="detail-box">
                                    <div class="client_info">
                                        <div class="client_name">
                                            <h5>
                                                John Doe
                                            </h5>
                                            <h6>
                                                Customer
                                            </h6>
                                        </div>
                                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                                    </div>
                                    <p>
                                    The team at [Your Digital Agency Name] delivered an exceptional website that exceeded our expectations. Highly recommend!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 mx-auto">
                            <div class="box">
                                <div class="img-box">
                                    <img src="images/client.jpg" alt="">
                                </div>
                                <div class="detail-box">
                                    <div class="client_info">
                                        <div class="client_name">
                                            <h5>
                                                Jane Smith
                                            </h5>
                                            <h6>
                                                Customer
                                            </h6>
                                        </div>
                                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                                    </div>
                                    <p>
                                    Their expertise in web development is unparalleled. The site is fast, responsive, and looks fantastic!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 mx-auto">
                            <div class="box">
                                <div class="img-box">
                                    <img src="images/client.jpg" alt="">
                                </div>
                                <div class="detail-box">
                                    <div class="client_info">
                                        <div class="client_name">
                                            <h5>
                                                Michael Brown
                                            </h5>
                                            <h6>
                                                Customer
                                            </h6>
                                        </div>
                                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                                    </div>
                                    <p>
                                    We are extremely satisfied with the website development services provided. Professional and efficient!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ol class="carousel-indicators">
            <li data-target="#customCarousel2" data-slide-to="0" class="active"></li>
            <li data-target="#customCarousel2" data-slide-to="1"></li>
            <li data-target="#customCarousel2" data-slide-to="2"></li>
        </ol>
    </div>
</section>
<!-- end client section -->

<script src="js/jquery-3.4.1.min.js"></script>
<!-- popper js -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<!-- bootstrap js -->
<script src="js/bootstrap.js"></script>
<script src="js/custom.js"></script>
<?php include('./includes/footer.php'); ?>
