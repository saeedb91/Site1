
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Travel Agency</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">

    <script type="text/javascript">
      $('body').scrollspy({
    target: '.dotted-scrollspy'
    });
    </script>
</head>
 
<body>
  <header>
    <!-- Start your project here-->
    <nav id="navbar-example" class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
      <div class="container">
        <a class="navbar-brand" href="#">
          <strong>TR</strong>
        </a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!--Links-->
          <ul class="navbar-nav mr-auto smooth-scroll">
            <li class="nav-item">
              <a class="nav-link" href="#home">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="#explore" data-offset="100">Explore</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="#destinations" data-offset="100">Hotels</a>
            </li>
                  
            <li class="nav-item">
              <a class="nav-link" href="#explore" data-offset="100">Gallery</a>
            </li>
             
            <li class="nav-item">
              <a class="nav-link" href="#contact" data-offset="100">Contact</a>
            </li>
          </ul>

            <!--Social Icons-->
          <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
              <a class="nav-link">
                <i class="fa fa-facebook"></i>
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link">
                <i class="fa fa-twitter"></i>
              </a>
            </li>
                        
            <li class="nav-item">
              <a class="nav-link">
                <i class="fa fa-instagram"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
    <!--/Navbar-->
   

  <!--Intro Section-->
  <section id="home" class="view intro-video">
    <video playsinline autoplay muted loop>
      <source src="./vid/Tropical.mp4" type="video/mp4">
    </video>
                       
    <div class="full-bg-img flex-center mask rgba-blue-light white-text">
      
      <ul class="animated fadeInUp col-md-12 list-unstyled">
        <li>
          <h1 class="font-weight-bold text-uppercase">TRAVEL</h1>
        </li>
        
        <li>
          <hr style="width: 500px; background-color: #FFFFFF; ">
          <h4 class="font-weight-bold text-uppercase py-4">Once a year, go somewhere you have never been before.</h4>
        </li>
                            
        <li>
          <a target="_blank" href="explore" class="btn btn-lg btn-indigo btn-rounded">EXPLORE</a>
        </li>
      </ul>
    </div>           
  </section>
  <!--Intro Section-->

  <!--Explore Section-->
  <section id="explore">
    <div id="multi-item-example" class="carousel slide carousel-multi-item mt-5" data-ride="carousel">
    
      <h4 class="text-center font-weight-bold wow fadeIn" data-wow-delay="0.2s">
          EXPLORE DESTINATION
      </h4>
      <hr style="width: 500px;">
          
      <!--Controls-->
      <div class="controls-top mb-5">
        <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
        <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
      </div>
      <!--/.Controls-->


      <!--Slides-->
      <div class="carousel-inner" role="listbox">
        <!--First slide-->
        <div class="carousel-item active">

          <div class="col-md-4">
            <div class="card mb-2">
              <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">France</h4>
                    <p class="card-text"> One of the most geographically diverse countries in Europe.</p>
                    <a class="btn btn-primary">See more</a>
                </div>
            </div>
          </div>

          <div class="col-md-4 clearfix d-none d-md-block">
            <div class="card mb-2">
              <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">Finland</h4>
                  <p class="card-text">The Archipelago Sea, an extension of the Baltic, contains the largest archipelago in the world, with estimates hovering around 50,000 islands.</p>
                  <a class="btn btn-primary">See more</a>
              </div>
            </div>
          </div>

          <div class="col-md-4 clearfix d-none d-md-block">
            <div class="card mb-2">
              <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">Morocco</h4>
                <p class="card-text">The cultural hub in the heart of the north African country is in the midst of an artistic renaissance</p>
                <a class="btn btn-primary">See more</a>
              </div>
            </div>
          </div>
        </div>
        <!--/.First slide-->

            <!--Second slide-->
        <div class="carousel-item">

          <div class="col-md-4">
            <div class="card mb-2">
              <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">Canada</h4>
                <p class="card-text">It is wonderful to feel the grandness of Canada in the raw.</p>
                <a class="btn btn-primary">See more</a>
              </div>
            </div>
          </div>

          <div class="col-md-4 clearfix d-none d-md-block">
            <div class="card mb-2">
              <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">Croatia</h4>
                <p class="card-text">Croatia is a nature-lovers dream with crystalline waters and breathtaking scenery.</p>
                <a class="btn btn-primary">See more</a>
              </div>
            </div>
          </div>

          <div class="col-md-4 clearfix d-none d-md-block">
            <div class="card mb-2">
              <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">The Bahamas</h4>
                <p class="card-text">A multibillion-dollar hotel and casino on Nassau’s Cable Beach will be fully operational by this spring</p>
                <a class="btn btn-primary">See more</a>
              </div>
            </div>
          </div>
        </div>
        <!--/.Second slide-->

        
      </div>
        <!--/.Slides--> 
    </div>
  </section> 
    <!--/Explore section-->



  <!--Facts Section-->
    <section id="facts">        
      <div class="streak streak-photo streak-long-2 mt-5" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/47.jpg');">
        <div class="flex-center mask rgba-black-light">
          <div class="container">

            <!-- Section heading -->
            <h3 class="text-center mb-5 pb-4 white-text font-weight-bold wow fadeIn" data-wow-delay="0.2s">
              <strong>Some facts about us</strong>
            </h3>

            <!--First row-->
            <div class="row text-center">

              <!--First column-->
              <div class="col-md-3 mb-2">
                <h1 class="white-text mb-1 font-weight-bold">+950</h1>
                  <p class="white-text text-uppercase mt-3">Happy clients</p>
              </div>
              <!--/First column-->

              <!--Second column-->
              <div class="col-md-3 mb-2">
                <h1 class="white-text mb-1 font-weight-bold">+150</h1>
                <p class="white-text text-uppercase mt-3">Projects completed</p>
              </div>
              <!--/Second column-->

              <!--Third column-->
              <div class="col-md-3 mb-2">
                <h1 class="white-text mb-1 font-weight-bold">+85</h1>
                  <p class="white-text text-uppercase mt-3">Destinations</p>
              </div>
              <!--/Third column-->

              <!--Fourth column-->
              <div class="col-md-3">
                <h1 class="white-text mb-1 font-weight-bold">+246</h1>
                <p class="white-text text-uppercase mt-3">Country visited</p>
              </div>
              <!--/Fourth column-->
            </div>
            <!--First row-->
          </div>
        </div>
      </div>
    </section>
      <!--/Streak-->

    
  

                <!--Section: destination-->
  <section id="destinations" class="section mt-4 mb-2">
    <div class="container">
      <!--Section heading-->
      <h4 class="text-center mb-5 mt-5 pt-4 font-weight-bold wow fadeIn" data-wow-delay="0.2s">
       <strong>HOTELS</strong>
      </h4>

      <!-- Grid row -->
      <div class="row">
        <!-- Grid column -->
        <div class="col-md-6 col-lg-3">
          <!--Card-->
          <div class="card card-personal mb-4">
            <!--Card image-->
            <div class="view overlay">
              <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/10.jpg" alt="Card image cap">
              <a href="#!">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
            <!--Card image-->

            <!--Card content-->
            <div class="card-body text-center">
              <!--Title-->
              <a>
                <h5 class="font-weight-bold text-uppercase my-4">TATRA MOUNTAIN</h5>
              </a>

              <!--Text-->
              <p class="grey-text mt-2 font-small">Hotel:
                <!--Review-->
                <i class="fa fa-star blue-text ml-2"> </i>
                <i class="fa fa-star blue-text"> </i>
                <i class="fa fa-star blue-text"> </i>
                <i class="fa fa-star blue-text"> </i>
              </p>
              
              <p class="grey-text mt-2 font-small">Price:
                <strong class="blue-text">$350.00</strong>
              </p>
              
              <p class="grey-text mt-2 font-small">Duration:
                <strong class="dark-grey-text">10 days</strong>
              </p>

              <p class="grey-text mt-2 font-small">Person:
                <strong class="dark-grey-text">3</strong>
              </p>

              <hr>
              <!--Grid column-->
              <div class="col-12 text-center">
                <button class="btn btn-blue btn-sm font-weight-bold btn-rounded">
                  <strong>Book a room</strong>
                </button>
              </div>
              <!--Grid column-->
            </div>
            <!--Card content-->
          </div>
          <!--Card-->
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6 col-lg-3">
          <!--Card-->
          <div class="card card-personal mb-4">
            <!--Card image-->
            <div class="view overlay">
              <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/29.jpg" alt="Card image cap">
              <a href="#!">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
            <!--Card image-->

            <!--Card content-->
            <div class="card-body text-center">
              <!--Title-->
              <a>
                <h5 class="font-weight-bold text-uppercase my-4">
                  <strong>GREECE</strong>
                </h5>
              </a>
              <!--Text-->
              <p class="grey-text mt-2 font-small">Hotel:
                <!--Review-->
                <i class="fa fa-star blue-text ml-2"> </i>
                <i class="fa fa-star blue-text"> </i>
                <i class="fa fa-star blue-text"> </i>
                <i class="fa fa-star blue-text"> </i>
              </p>
              
              <p class="grey-text mt-2 font-small">Price:
                <strong class="blue-text">$350.00</strong>
              </p>
              
              <p class="grey-text mt-2 font-small">Duration:
                <strong class="dark-grey-text">6 days</strong>
              </p>

              <p class="grey-text mt-2 font-small">Person:
                <strong class="dark-grey-text">2</strong>
              </p>
              <hr>
              <!--Grid column-->
              <div class="col-12 text-center">
                <button class="btn btn-blue btn-sm font-weight-bold btn-rounded">
                  <strong>Book a room</strong>
                </button>
              </div>
              <!--Grid column-->
            </div>
            <!--Card content-->
          </div>
          <!--Card-->
        </div>
        <!-- Grid column -->                        
                
        <!-- Grid column -->
        <div class="col-md-6 col-lg-3">
          <!--Card-->
          <div class="card card-personal mb-4">
            <!--Card image-->
            <div class="view overlay">
              <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/49.jpg" alt="Card image cap">
              <a href="#!">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
            <!--Card image-->

            <!--Card content-->
            <div class="card-body text-center">
              <!--Title-->
              <a>
                <h5 class="font-weight-bold text-uppercase my-4">
                  <strong>ICELAND</strong>
                </h5>
              </a>
              <!--Text-->
              <p class="grey-text mt-2 font-small">Hotel:
              <!--Review-->
                <i class="fa fa-star blue-text ml-2"> </i>
                <i class="fa fa-star blue-text"> </i>
                <i class="fa fa-star blue-text"> </i>
                <i class="fa fa-star blue-text"> </i>
              </p>
              
              <p class="grey-text mt-2 font-small">Price:
                <strong class="blue-text">$350.00</strong>
              </p>
              
              <p class="grey-text mt-2 font-small">Duration:
                <strong class="dark-grey-text">8 days</strong>
              </p>

              <p class="grey-text mt-2 font-small">Person:
                <strong class="dark-grey-text">2</strong>
              </p>
              <hr>
              <!--Grid column-->
              <div class="col-12 text-center">
                <button class="btn btn-blue btn-sm font-weight-bold btn-rounded">
                  <strong>Book a room</strong>
                </button>
              </div>
              <!--Grid column-->
            </div>
            <!--Card content-->
          </div>
          <!--Card-->
        </div>
        <!-- Grid column -->

        
        <!-- Grid column -->
        <div class="col-md-6 col-lg-3">
          <!--Card-->
          <div class="card card-personal mb-4">
          <!--Card image-->
            <div class="view overlay">
              <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/25.jpg" alt="Card image cap">
              <a href="#!">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
          <!--Card image-->

          <!--Card content-->
          <div class="card-body text-center">
            <!--Title-->
            <a>
              <h5 class="font-weight-bold text-uppercase my-4">
                <strong>ITALY</strong>
              </h5>
            </a>
            <!--Text-->
            <p class="grey-text mt-2 font-small">Hotel:
              <!--Review-->
              <i class="fa fa-star blue-text ml-2"> </i>
              <i class="fa fa-star blue-text"> </i>
              <i class="fa fa-star blue-text"> </i>
              <i class="fa fa-star blue-text"> </i>
            </p>
            
            <p class="grey-text mt-2 font-small">Price:
              <strong class="blue-text">$350.00</strong>
            </p>
            
            <p class="grey-text mt-2 font-small">Duration:
              <strong class="dark-grey-text">10 days</strong>
            </p>

            <p class="grey-text mt-2 font-small">Person:
              <strong class="dark-grey-text">3</strong>
            </p>
            <hr>
            <!--Grid column-->
            <div class="col-12 text-center">
              <button class="btn btn-blue btn-sm font-weight-bold btn-rounded">
                <strong>Book a room</strong>
              </button>
            </div>
            <!--Grid column-->
          </div>
          <!--Card content-->
        </div>
        <!--Card-->
      </div>
      <!-- Grid column -->
    </div>
    <!-- Grid row -->
  </div>
  </section>
  <!--/Section: destination-->

            


  <!--Footer-->
  <section id="contact">     
    <footer class="page-footer text-center text-md-left pt-4 mt-4 pt-4">
      <!--Footer Links-->
      <div class="container">
        <!-- Footer links -->
          <div class="row text-center text-md-left mt-3 pb-3">
            <!--First column-->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">Travel Agency</h6>
              <p>Providing the very best tailor-made holidays across the world. Start planning your perfect trip with us now.</p>
            </div>
            <!--/.First column-->

            <hr class="w-100 clearfix d-md-none">
            <!--Second column-->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
              <p>
                <a href="#!">Canada</a>
              </p>
              <p>
                <a href="#!">Saudia Arabia</a>
              </p>
              <p>
                <a href="#!">France</a>
              </p>
              <p>
                <a href="#!">Italy</a>
              </p>
            </div>
            <!--/.Second column-->
                    
            <hr class="w-100 clearfix d-md-none">
            <!--Third column-->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
              <p>
                <a href="#!">Collaboriation</a>
              </p>
              <p>
                <a href="#!">Media about me</a>
              </p>
              <p>
                <a href="#!">Newsletter</a>
              </p>
              <p>
                <a href="#!">Help</a>
              </p>
            </div>
            <!--/.Third column-->
            <hr class="w-100 clearfix d-md-none">
            
            <!--Fourth column-->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
              <p><i class="fa fa-home mr-3"></i> New York, NY 1234, US</p>
              <p><i class="fa fa-envelope mr-3"></i> info@example.com</p>
              <p><i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
              <p><i class="fa fa-print mr-3"></i> + 01 234 567 89</p>
            </div>
            <!--/.Fourth column-->
          </div>
          <!-- Footer links -->
          <hr>
          <div class="row py-3 d-flex align-items-center">
            <!--Grid column-->
            <div class="col-md-7 col-lg-8">
              <!--Copyright-->
              <p class="text-center text-md-left grey-text">
                            © 2018 Copyright: <a href="#home" target="_blank"> TR </a>
              </p>
              <!--/.Copyright-->
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-5 col-lg-4 ml-lg-0">
              <!--Social buttons-->
              <div class="social-section text-center text-md-left">
                <ul class="list-unstyled list-inline">
                  <li class="list-inline-item mx-0">
                    <a class="btn-floating btn-sm rgba-white-slight mr-xl-4">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                  <li class="list-inline-item mx-0">
                    <a class="btn-floating btn-sm rgba-white-slight mr-xl-4">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                  <li class="list-inline-item mx-0">
                    <a class="btn-floating btn-sm rgba-white-slight mr-xl-4">
                      <i class="fa fa-snapchat"></i>
                    </a>
                  </li>
                  <li class="list-inline-item mx-0">
                    <a class="btn-floating btn-sm rgba-white-slight mr-xl-4">
                      <i class="fa fa-instagram"></i>
                    </a>
                  </li>
                </ul>
              </div>
              <!--/.Social buttons-->
            </div>
            <!--Grid column-->
          </div>
      </div>
    </footer>
    <!--/.Footer-->
  </section>                    
    
  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
</body>
</html>
