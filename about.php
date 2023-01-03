<?php

require("./mail.php");

function validate($name, $email, $subject, $message, $form) {
    return !empty($name) && !empty($email) && !empty($subject) && !empty($message);
}

$status = "";

if ( isset($_POST["form"]) ) {
    if ( validate($_POST["name"], $_POST["email"], $_POST["subject"], $_POST["message"], $_POST["form"]) ) {
        
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];
        $body = "$name <$email> te envia el siguiente mensaje: <br><br> $message";

        sendMail($subject, $body, $email, $name, true);
    }
    else {
        $status = "danger";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>MLP - About Page</title>

    <!-- Bootstrap core CSS -->
    <link href="./vendor/bootstrap/css/style-aboutus.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <div class="sub-header">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-xs-12">
            <ul class="left-info">
              <li><a href="#"><i class="fa fa-clock-o"></i>Mon-Fri 8AM - 7PM</a></li>
              <li><a href="#"><i class="fa fa-phone"></i>561-720-2500</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="right-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><img src="./img/logo.png" class="MLP-img" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="./index.php"><b>HOME</b>
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="./about.php"><b>ABOUT US</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./services.php"><b>OUR SERVICES</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./contact.php"><b>CONTACT US</b></a>
              </li>
             
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12 about-us-text-start">
            <h1>ABOUT MLP</h1>
            <p>We work to generate property <br> for our costumers</p>
          </div>
        </div>
      </div>
    </div>

    <div class="more-info about-info">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="more-info-content">
              <div class="row">
                <div class="col-md-6 align-self-center">
                  <div class="right-content">
                    
                    <h2>Get to know about <br> Our company</h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis.</p>
                    
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="left-image">
                    <!-- pic of  About US -->
                    <img class="about-us-img" src="./img/logo.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="testimonials">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2 class="clients">Meet our Team</h2>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-testimonials owl-carousel">
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>NUMBER 1</h4>
                  <span>general information</span>
                  <p>"Nulla ullamcorper, ipsum vel condimentum congue, mi odio vehicula tellus, sit amet malesuada justo sem sit amet quam. Pellentesque in sagittis lacus."</p>
                </div>
                <img src="http://placehold.it/60x60" alt="">
              </div>
              
              <div class="testimonial-item">
                <div class="inner-content" >
                  <h4>NUMBER 2</h4>
                  <span>general information</span>
                  <p>"In eget leo ante. Sed nibh leo, laoreet accumsan euismod quis, scelerisque a nunc. Mauris accumsan, arcu id ornare malesuada, est nulla luctus nisi."</p>
                </div>
              
              </div>
              
              <!-- Para añadir un miembro -->
              <!-- <div class="testimonial-item">
                <div class="inner-content">
                  <h4>NUMBER 3</h4>
                  <span>general information</span>
                  <p>"Ut ultricies maximus turpis, in sollicitudin ligula posuere vel. Donec finibus maximus neque, vitae egestas quam imperdiet nec. Proin nec mauris eu tortor consectetur tristique."</p>
                </div>
                
              </div> -->
              
              <!-- <div class="testimonial-item">
                <div class="inner-content">
                  <h4>NUMBER 4</h4>
                  <span>general information</span>
                  <p>"Curabitur sollicitudin, tortor at suscipit volutpat, nisi arcu aliquet dui, vitae semper sem turpis quis libero. Quisque vulputate lacinia nisl ac lobortis."</p>
                </div>
              </div> -->
              
            </div>
          </div>
        </div>
      </div>
    </div>
   
    


    <!-- CONTACT FORM-->

    <?php if($status == "danger"): ?>

<div class="alert danger">
    <span>Something went wrong</span>
</div>

<?php endif; ?>

<?php if($status == "success"): ?>

<div class="alert success">
    <span>¡Sent Message!</span>
</div>

<?php endif; ?>

<div class="callback-form callback-services" id="anclaForm">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2 class="text-contact">CONTACT US</h2>
                    <span class="text-contact-span">interdum nisl ac urna tempor mollis</span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="contact-form">
                    <!-- SE AGREGA ACTION CON LA MISMA URL PERO CON UN NUEVO ANCLAJE PARA QUE QUEDE EN LA MISMA SECCIÓN -->
                    <form id="form" action="./about.php" method="POST">  
                        <div class="row">
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="name" type="text" class="form-control" id="name"
                                        placeholder="Full Name" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="email" type="text" class="form-control" id="email"
                                        pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="subject" type="text" class="form-control" id="subject"
                                        placeholder="Subject" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="message" rows="6" class="form-control" id="message"
                                        placeholder="Your Message" required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <!-- AL BOTON SE LE AGREGA UN NOMBRE FORM PARA SER RECONOCIDO POR EL EVENTO DE SUBMIT -->
                                    <button name="form" type="submit" id="form-submit" class="border-button">Send
                                        Message</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Footer Starts Here -->
    <footer>

      <div class="container">
        <div class="div1-footer"> 
          
            <img src="./img/WHITE-LOGO.png" alt="" class="MLP-img2">
        </div>
        <div class="div2-footer"> 
          <div class="col-md-3 footer-item">
            <h4>MLP <br> Property Management</h4>
              <ul class="menu-list">
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Our Services</a></li>
                <li><a href="#">Contact Us</a></li>
              </ul>
          </div>
        </div>
        <div class="div3-footer"> 
          <ul class="social-icons">
            <li><a rel="nofollow" href="https://fb.com/templatemo" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
          </ul>
        </div>
        </div>
        
        
      <!-- <div class="container">
        <div class="row">
          <div class="col-md-3 footer-item">
            <img src="./img/WHITE-LOGO.png" alt="" class="MLP-img2">
            
          </div>
          <div class="col-md-3 footer-item">
            <h4>MLP <br> Property Management</h4>
            <ul class="menu-list">
              <li><a href="#">Home</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Our Services</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </div>
          <ul class="social-icons">
            <li><a rel="nofollow" href="https://fb.com/templatemo" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
          </ul>
         
          <div class="col-md-3 footer-item last-item">
            <h4>Contact Us</h4>
            <div class="contact-form">
              <form id="contact footer-contact" action="contact-form-process.php" method="post">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required="" ></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div> 
        </div>
      </div> -->
      
    </footer>
    
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>Copyright &copy; 2022 Camaleónico. All Rights Reserved
            </p>
          </div>
        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>