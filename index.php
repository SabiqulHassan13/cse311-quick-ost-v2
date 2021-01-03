<?php 
$title = "Quick OST";
include "includes/header.php";
?>
    <!-- navbar section starts -->
    <header id="header_area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 p-0">
                    <div id="main_menu">
                        <nav class="navbar fixed-sticky-top navbar-expand-lg">
                            <a class="navbar-brand" href="#"><img src="images/logo.png" alt=""></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#header_area">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#about_us_part">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#products-part">Products</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#contact-us-part">Contact Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="http://localhost/quickost_db/form.php" target="_blank">Register</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="http://localhost/quickost_db/view.php" target="_blank">DB-display</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- navbar ends -->

    <!-- banner section starts -->
    <section id="banner_part">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="banner text-center">
                       <div class="overlay">
                           <h2>Welcome to Our Tailor Shop Quick OST</h2>
                        <h5>The perfect place to order your school uniform and accessories</h5><br>
                        <button class="btn btn-warning text-white btn-md">Get Started</button>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner section ends -->

    <!-- about us section starts -->
    <div id="about_us_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="jumbotron">
                        <h2 class="text-center">About Us</h2>
                        <hr class="my-2">

                        <ul>
                            <li>You can easily order our tailors from home to sew your dress according to your measurements</li>
                            <li>You can easily take the measurements of your dress accoding to our guidelines</li>
                            <li>Fill the measurement form for a particular dress</li>
                            <li>You can get discount for using b-Kash, ATM cards etc *condition apply</li>
                            <li>You will recieve a text message on your contact no and an email after your order is ready</li>
                            <li>You can take home delivery service or you can take your order by showing your payment receit</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- about us section ends -->

    <hr class="my-4">
    <!-- products section starts -->
    <div id="products-part">
        <div class="container product-content">
            <h2 class="text-center">Our Products list</h2><br>
            <div class="row">
                <div class="card-deck">
                    <div class=".col-md-4 card">
                        <div class="inner_product_img">
                            <img class="card-img-top" src="images/p1-boys-shirt.jpg" alt="Card image cap">
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">White Shirt for boys</h5>
                            <p class="card-text">
                                Product ID #101 <br>
                                Product Price #100$
                            </p>
                            <a href="product-shirt-details.html" target="_blank" class="btn btn-primary">Read More...</a>
                        </div>
                    </div>
                    <div class=".col-md-4 card">
                        <div class="inner_product_img">
                            <img class="card-img-top" src="images/p2-boys-school-pant-.jpg" alt="Card image cap">
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Black Pant for boys</h5>
                            <p class="card-text">
                                Product ID #102 <br>
                                Product Price #100$
                            </p>
                            <a href="#" class="btn btn-primary">Read More...</a>
                        </div>
                    </div>
                    <div class=".col-md-4 card">
                        <div class="inner_product_img">
                            <img class="card-img-top" src="images/p3-black-tie.jpg" alt="Card image cap">
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Black Tie</h5>
                            <p class="card-text">
                                Product ID #103 <br>
                                Product Price #100$
                            </p>
                            <a href="#" class="btn btn-primary">Read More...</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- products section ends -->

    <hr class="my-4">
    <!-- user tesimonial starts -->
    <div class="testimonials">
        <div class="container">
            <h2>Testimonials</h2>
            <p class="text-center">Here are testimonials of our customers</p>
            <div class="row">
                <div class="col-md-4 text-center">
                    <div class="profile">
                        <img src="images/student1.jpg" alt="" class="user">
                        <blockquote>
                            QuickOST is an awesome uniform service!!! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, enim.
                        </blockquote>
                        <h4>John Smith <span>Student at NSU, BD</span></h4>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="profile">
                        <img src="images/student2.jpg" alt="" class="user">
                        <blockquote>
                            QuickOST is an awesome uniform service!!! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, enim.
                        </blockquote>
                        <h4>Ros Kupper <span>Student at NSU, BD</span></h4>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="profile">
                        <img src="images/student3.jpg" alt="" class="user">
                        <blockquote>
                            QuickOST is an awesome uniform service!!! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, enim.
                        </blockquote>
                        <h4>Catherine Stone <span>Student at NSU, BD</span></h4>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- user tesimonial ends -->




    <!-- footer section starts -->
    <footer>
        <div id="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="single-footer" id="contact-us-part">
                            <h4 class="text-warning">About QuickOST</h4>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, reprehenderit?</p>

                            <h4 class="text-warning">Social Site Links</h4>
                            <ul class="footer-social list-inline">
                                <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                <li><a href=""><i class="fa fa-pinterest"></i></a></li>
                                <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                <li><a href=""><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-footer">
                            <h4 class="text-warning">Contact Info</h4>

                            <p>(+88)015xx-aaabbb</p>
                            <p>quick.ost@org.bd</p>
                            <p>Bashundhara, NSU, BD</p>

                            <h4 class="text-warning">Important Links</h4>

                        </div>
                    </div>

                    <div class="col-md-5 col-sm-6">
                        <div class="single-footer">
                            <h4 class="text-warning">Contact Us</h4>
                            <form id="contact-us-form" class=" text-info">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Your Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputSubject">Subject of your message</label>
                                    <input type="text" class="form-control" id="exampleInputSubject" placeholder="Enter your subject">
                                </div>
                                <div class="form-group shadow-textarea">
                                    <label for="exampleFormControlTextarea6">Your Message</label>
                                    <textarea class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="3" placeholder="Write your message here..."></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 p-0 m-0">
                        <div class="copyright-area text-center">
                            <p>Copyright &copy; 2019. All rights reserved by QuickOST</p> <br>
                            <p>Designed by QuickOST team members</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer section ends -->
    
    









    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/fa-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>