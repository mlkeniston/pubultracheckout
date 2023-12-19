<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    $message_sent = false;
    if(isset($_POST["email"]) && $_POST["email"] != "") {
        if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $userName = $_POST['name'];
            $userEmail = $_POST['email'];
            $userMessage = $_POST['message'];
        
            $to = "1ultracoach@gmail.com";
            $body = "";
        
            $body .="From: ".$userName. "\r\n";
            $body .="Email: ".$userEmail. "\r\n";
            $body .="Message: ".$userMessage. "\r\n";
            $headers = "From: $userEmail. \r\n";
            $success = mail($to, "New Message from Website", $body, $headers);
        if($success) {
          $message_sent = true;
          echo'<!DOCTYPE html>
          <html lang="en">
            <head>
              <meta charset="UTF-8" />
              <meta name="viewport" content="width=device-width, initial-scale=1.0" />
              <title>Ultra Health and Wellness Coaching</title>
              <link rel="stylesheet" href="../css/bootstrap.min.css" />
              <link rel="stylesheet" href="../css/style.css" />
              <link rel="stylesheet" href="../css/boxicons.css" />
            </head>
            <body data-bs-spy="scroll" data-bs-target=".navbar">
              <nav
                class="navbar fixed-top navbar-expand-lg navbar-light"
                style="background-color: #165769"
              >
                <div class="container">
                  <a class="navbar-brand" aria-current="page" href="#home"
                    ><img src="../img/Ultra Logo.jpg" alt="Home" width="50" height="50"
                  /></a>
                  <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav"
                    aria-controls="navbarNav"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                  >
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                      <li class="nav-item">
                        <a name="home" class="nav-link" aria-current="page" href="#home">Home</a>
                      </li>
                      <li class="nav-item">
                        <a name="healthcoaching" class="nav-link" href="#healthcoaching">Health Coaching</a>
                      </li>
                      <li class="nav-item">
                        <a name="aboutme"class="nav-link" href="#aboutme">About Me</a>
                      </li>
                      <li class="nav-item">
                        <a name="testimonials" class="nav-link" href="#testimonials">Testimonials</a>
                      </li>
                      <li class="nav-item">
                        <a name="plans" class="nav-link" href="#plans">Plans & Pricing</a>
                      </li>
                      <li class="nav-item">
                        <a name="contact" class="nav-link" href="#contact">Contact</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
              <section id="contact">
                <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-md-10">
                      <h3 class="display-5">Thank you for contacting us. I will get back to you as soon as possible!</h3>
                      <a href="../index.html"><button type="button" class="btn btn-brand">Go Back</button></a>
                    </div>
                  </div>
                </div>
              </section>
              <script src="js/bootstrap.bundle.min.js"></script>
            </body>
          </html>
          ';
    }
    else {
      echo 'Error Sending Email';
    }
  }
}
?>