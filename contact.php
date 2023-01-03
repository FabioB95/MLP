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
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <title>MLP - Contact Page</title>

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
                        <li><a href="#"><i class="fa fa-clock-o"></i>Mon-Fri 09:00-17:00</a></li>
                        <li><a href="#"><i class="fa fa-phone"></i>090-080-0760</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="right-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img class="MLP-img" src="./img/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php"><b>HOME</b>
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php"><b>ABOUT US</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.php"><b>OUR SERVICES</b></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="./contact.php"><b>CONTACT US</b></a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading header-text contact-us-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="contact-us-format">LET US <br> HELP YOU</h1>
                    <a href="contact.php" class="filled-button">Schedule a call</a>

                </div>
            </div>
        </div>
    </div>

    <div class="contact-information">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="contact-item">
                        <i class="fa fa-phone"></i>
                        <h4>Phone</h4>
                        <p>You can call us Monday to Friday, from 9 AM to 5PM.</p>
                        <a href="#">561-720-2500</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-item">
                        <i class="fa fa-envelope"></i>
                        <h4>Email</h4>
                        <p>Contact us from your home we are here for you.</p>
                        <a href="#">info@company.com</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-item">
                        <i class="fa fa-map-marker"></i>
                        <h4>Location</h4>
                        <p>3900 Woodlake Blvd # 206e, Greenacres, FL 33463, USA</p>
                        <a href="#">View on Google Maps</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="map" class="mapa-blv">
        <!-- How to change your own map point
        1. Go to Google Maps
        2. Click on your location point
        3. Click "Share" and choose "Embed map" tab
        4. Copy only URL and paste it within the src="" field below
      -->
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3566.8786876748427!2d-80.14201868528333!3d26.620334983254455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d927ca5ef25a8d%3A0xc4a145b00d87bc9b!2s3900%20Woodlake%20Blvd%20%23206e%2C%20Greenacres%2C%20FL%2033463%2C%20USA!5e0!3m2!1sen!2sit!4v1668004180752!5m2!1sen!2sit"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

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
                        <form id="form" action="./contact.php" method="POST">  
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
                    <li><a rel="nofollow" href="https://fb.com/templatemo" target="_blank">
                        <i
                                class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>




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

    <script language="text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t) { //declaring the array outside of the
        if (!cleared[t.id]) { // function makes it static and global
            cleared[t.id] = 1; // you could use true and false, but that's more typing
            t.value = ''; // with more chance of typos
            t.style.color = '#fff';
        }
    }
    </script>

</body>

</html>