
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Siddharth Ovalekar Foundation is a leading NGO in Thane, Maharashtra, dedicated to empowering lives through successful placements and job opportunities. Join us in making a difference.">
    <meta name="keywords" content="Siddharth Ovalekar Foundation, placements, jobs, Thane, Maharashtra, NGO">
    <meta name="author" content="SOF">
    
    <!-- Page-specific meta tags -->
    <meta name="robots" content="index, follow"> 
    <meta name="og:title" content="Siddharth Ovalekar Foundation | Empowering Lives through Placements and Jobs in Thane, Maharashtra">
    <meta name="og:description" content="Join Siddharth Ovalekar Foundation in Thane, Maharashtra, and be part of our mission to empower lives through successful placements and job opportunities.">
    <meta name="og:image" content="/assets/img/sof.jpeg"> 
    

    <title>SOF Job Fair 2023</title>

  <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://api.fontshare.com/v2/css?f[]=poppins@900,500,400,300,800,700,600&f[]=hind@400,500&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700;800;900&display=swap" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <div class="mylogo me-auto">
        <img src="assets/img/sof.jpeg" style="border-left: none;padding-left: 0;" class="apsitlogo" alt="" srcset="">
        <img src="assets/img/nhss.jpeg" class="apsitlogo" alt="" srcset="">
        <!-- <img src="assets/img/logos/job4u.png" id="apsitlogo" alt="" srcset=""> -->
      </div>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active hover-underline-animation" href="#videohero">Home</a></li>
          <li><a class="nav-link scrollto hover-underline-animation" href="#about">About</a></li>
          <li><a class="nav-link scrollto hover-underline-animation" href="#contact">Contact</a></li>
          <li class="dropdown" style="cursor:pointer"><a id="myherobutton"><span>Apply Now</span> <i class="bi bi-chevron-down"></i></a>
            <ul style="border-radius: 10px;">
              <li><a style="margin:0px" href="/student-register.php">Student</a></li>
              <li><a style="margin:0px" href="/company-register.php">Company</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->
  <div class="progress-header">
    <div class="progress-container">
      <div class="progress-bar" id="progressBar"></div>
    </div>
  </div>
  <!-- ======= Hero Section ======= -->
  
  <section id="videohero">
    <video autoplay muted loop id="myVideo">
      <source src="assets/img/vidbg8.mp4" type="video/mp4">
    </video>
    <a id="myBtn" onclick="myFunction()"><i class='bx bx-pause-circle' ></i></a>
    <div class="col-xl-10 col-sm-10 myherocontainer" style="position:absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);">
      <p class="heroapshah" style="margin:100px 0 0;font-family: 'poppins';font-size: 22px;font-weight: 500;color:#f6f6f6;letter-spacing: 0.5px;">Siddharth Ovalekar Foundation and NHITM</p>
      <p class="heropresents" style="margin:0px;font-family: 'poppins';font-size: 15px;font-weight: 400;color:#848484;letter-spacing: 0.5px;">presents</p>
      <h1 id="myheroheader" style="font-family: 'Inter',sans-serif;" class="mt-2 mb-2">JOB FAIR 2023</h1>
      <p id="myherosubheader" class="mb-1">Discover Opportunities: Your pathway to success begins here!</p>
      <p id="myherosubheader" style="color: #9e9e9e;">26th August 2023</p>
      <!-- <p class="heropresents" style="margin:0px;font-family: 'poppins';font-size: 15px;font-weight: 400;color:#848484;letter-spacing: 0.5px;">Register:</p> -->
      <div class="d-flex myherobuttons mt-2">
        <a href="/student-register.php" class="myheroregisterbutton d-flex" style="align-items: center;"><span>Student</span> <i class="bx bx-chevron-right" style="font-size: 20px;"></i></a>
        <a href="/company-register.php" class="myherocontactbutton d-flex" style="align-items: center;"><span>Company</span> <i class="bx bx-chevron-right" style="font-size: 20px;"></i></a>
      </div>
    </div>
  </section>
  <script>
    // Get the video
    var video = document.getElementById("myVideo");
    video.play();
    // Get the button
    var btn = document.getElementById("myBtn");
    
    // Pause and play the video, and change the button text
    function myFunction() {
      if (video.paused) {
        video.play();
        btn.innerHTML = "<i class='bx bx-pause-circle' ></i>";
      } else {
        video.pause();
        btn.innerHTML = "<i class='bx bx-play-circle'></i>";
      }
    }
    </script>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
  <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </symbol>
  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
</svg>

<?php

  if (isset($_GET["data"])) {
    $encodedJsonData = $_GET["data"];
    $jsonData = urldecode($encodedJsonData);
    $decodedData = json_decode($jsonData, true);
    if ($decodedData["success"]) {
      echo '
      <div class="alert alert-success d-flex align-items-center alert-dismissible fade show" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="35" height="35" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
        <div>
          <strong>Congratulations!</strong>
          <p style="margin:0px;font-size:14px;">'.$decodedData["message"].'</p>
        </div>
        <button type="button" style="position:unset!important;margin: 0 0 0 40px;" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      ';
    }else{
      echo '
      <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="35" height="35" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div>
          <strong>Something went wrong!</strong>
          <p style="margin:0px;font-size:14px;">'.$decodedData["message"].'</p>
        </div>
        <button type="button" style="position:unset!important;margin: 0 0 0 40px;" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      ';
    }
  }

?>


  
  <!-- End Hero -->

  <main id="main">

    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/logos2/1.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logos2/2.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logos2/3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logos2/4.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logos2/5.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logos2/6.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logos2/7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logos2/8.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logos2/9.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logos2/10.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logos2/11.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logos2/12.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logos2/13.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logos2/14.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logos2/15.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logos2/16.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logos2/17.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logos2/18.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logos2/19.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logos2/20.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logos2/21.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logos2/22.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logos2/23.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logos2/24.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logos2/25.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logos2/26.jpeg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logos2/27.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logos2/28.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logos2/29.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logos2/30.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logos2/31.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logos2/32.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logos2/33.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logos2/34.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logos2/35.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logos2/36.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logos2/37.webp" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logos2/38.svg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logos2/39.jpeg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logos2/40.jpeg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logos2/41.jpeg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logos2/42.jpeg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logos2/43.jpeg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logos2/44.jpeg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logos2/45.jpeg" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>
    
    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-xl-center gy-5">

          <div class="col-xl-5 content">
            <h3 style="margin-bottom: 8px;">About Us</h3>
            <p style="font-family: 'Poppins';margin-bottom: 5px;">Siddharth Ovalekar Foundation (SOF) is organizing Job Fair 2023 in collaboration with New Horizon Institute of Technology & Management (NHITM). Over 50 companies will be participating in the event, recruiting students from a diverse range of fields.
            </p>
            <p style="font-family: 'Poppins';margin-bottom: 30px;">Register today to seize exciting opportunities!</p>
            <div class="d-flex myherobuttons myherobuttons2 mt-0" style="align-items: center;">
              <!-- <p class="m-0">Are you:</p> -->
              <a href="/student-register.php" class="myherocontactbutton d-flex" style="align-items: center;background-color: #e03a3c;"><span>Students</span> <i class="bx bx-chevron-right" style="font-size: 20px;"></i></a>
              <a href="/company-register.php" class="myherocontactbutton d-flex" style="align-items: center;"><span>Company</span> <i class="bx bx-chevron-right" style="font-size: 20px;"></i></a>
            </div>
          </div>

          <div class="col-xl-7">
            <div class="row gy-4 icon-boxes">

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box">
                  <i class="bx bx-calendar-event" style="margin-bottom: 15px;"></i>
                  <h3 style="margin-bottom:5px">Date</h3>
                  <p style="font-family: 'Poppins';">The event will be held on 26th of August 2023 at 11:00 a.m.</p>
                  <p style="color:transparent;">.</p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                  <i class="bx bx-map" style="margin-bottom: 15px;"></i>
                  <h3 style="margin-bottom:5px">Location</h3>
                  <a href="https://goo.gl/maps/D1vvP39WB4DBtdkJ6"><p style="font-family: 'Poppins';">New Horizon Institute of Technology & Management, Kavesar, Anand Nagar, Thane</p></a>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box">
                  <i class="bx bx-timer" style="margin-bottom: 15px;"></i>
                  <h3 style="margin-bottom:5px">Deadline</h3>
                  <p style="font-family: 'Poppins';">The registration will close on 21 August at 12:00 p.m. afternoon</p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="icon-box">
                  <i class="bx bx-book" style="margin-bottom: 15px;"></i>
                  <h3 style="margin-bottom:5px">Eligibility</h3>
                  <p style="font-family: 'Poppins';">Anyone in class 12 can apply including Engineers and Non-engineers</p>
                </div>
              </div> <!-- End Icon Box -->

            </div>
          </div>

        </div>
      </div>

    </section>
    
    <section id="eligibility" class="eligibility" style="background-color: #f4f4f4!important;">
      <div class="container">
        <h2 class="section-title meratitle p-3" style="font-size: 40px;font-weight:bold;text-transform: none;color: #1a2533;">Open positions for</h2>
        <div class="row align-items-center mt-4 eligibilitymobileinvert">
          <div class="col-lg-4 col-md-6 eligibilitynav">
            <div class="eligibilitynav-card" id="eligibilityengineering" onclick="showEngineering(this)">
              <i style="font-size: 35px;" class="eligibilitylogos bi bi-cpu"></i>
              <p style="color: #1a2533;">Engineering</p>
            </div>
            <div class="eligibilitynav-card" id="eligibilitynonengineering"  onclick="showNonengineering(this)">
              <i style="font-size: 35px;" class="eligibilitylogos bi bi-mortarboard"></i>
              <p style="color: #1a2533;">Non-Engineering</p>
            </div>
            <div class="eligibilitynav-card"  id="eligibilityhsc" onclick="showHsc(this)">
              <i style="font-size: 35px;" class="eligibilitylogos bi bi-book"></i>
              <p style="color: #1a2533;">HSC</p>
            </div>            
          </div>
          <div class="col-lg-8 col-md-6 eligibilitycontent">
            <div class="eligibilitycontentcontainer">
              <ul class="eligibilitylist eligibilitylist1" id="eligibilitylist">
                <li>Computer Science Engineering</li>
                <li>Information Technology Engineering</li>
                <li>Electronics and Telecommunications Engineering</li>
                <li>Electrical Engineering</li>
                <li>Mechanical Engineering</li>
                <li>Civil Engineering</li>
              </ul> 
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Testimonials Section -->

    
    
    <section id="about" class="about section-bg">

<div class="container" data-aos="fade-up" data-aos-delay="100">
  <div class="row align-items-xl-center gy-5">

    <div class="col-xl-5 content">
      <h3 style="margin-bottom: 8px;">About Us</h3>
      <p style="font-family: 'Poppins';margin-bottom: 5px;">Siddharth Ovalekar Foundation (SOF) is organizing Job Fair 2023 in collaboration with New Horizon Institute of Technology & Management (NHITM). Over 50 companies will be participating in the event, recruiting students from a diverse range of fields.
      </p>
      <p style="font-family: 'Poppins';margin-bottom: 30px;">Register today to seize exciting opportunities!</p>
      <div class="d-flex myherobuttons myherobuttons2 mt-0" style="align-items: center;">
        <!-- <p class="m-0">Are you:</p> -->
        <a href="/student-register.php" class="myherocontactbutton d-flex" style="align-items: center;background-color: #e03a3c;"><span>Students</span> <i class="bx bx-chevron-right" style="font-size: 20px;"></i></a>
        <a href="/company-register.php" class="myherocontactbutton d-flex" style="align-items: center;"><span>Company</span> <i class="bx bx-chevron-right" style="font-size: 20px;"></i></a>
      </div>
    </div>

    <div class="col-xl-7">
      <div class="row gy-4 icon-boxes">

        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="icon-box">
            <i class="bx bx-calendar-event" style="margin-bottom: 15px;"></i>
            <h3 style="margin-bottom:5px">Date</h3>
            <p style="font-family: 'Poppins';">The event will be held on 26th of August 2023 at 11:00 a.m.</p>
            <p style="color:transparent;">.</p>
          </div>
        </div> <!-- End Icon Box -->

        <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="icon-box">
            <i class="bx bx-map" style="margin-bottom: 15px;"></i>
            <h3 style="margin-bottom:5px">Location</h3>
            <a href="https://goo.gl/maps/D1vvP39WB4DBtdkJ6"><p style="font-family: 'Poppins';">New Horizon Institute of Technology & Management, Kavesar, Anand Nagar, Thane</p></a>
          </div>
        </div> <!-- End Icon Box -->

        <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="icon-box">
            <i class="bx bx-timer" style="margin-bottom: 15px;"></i>
            <h3 style="margin-bottom:5px">Deadline</h3>
            <p style="font-family: 'Poppins';">The registration will close on 21 August at 12:00 p.m. afternoon</p>
          </div>
        </div> <!-- End Icon Box -->

        <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="icon-box">
            <i class="bx bx-book" style="margin-bottom: 15px;"></i>
            <h3 style="margin-bottom:5px">Eligibility</h3>
            <p style="font-family: 'Poppins';">Anyone in class 12 can apply including Engineers and Non-engineers</p>
          </div>
        </div> <!-- End Icon Box -->

      </div>
    </div>

  </div>
</div>

</section>
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Reach us</h2>
          <p>Don't hesitate to reach out to us. We're here to help! Contact us now.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6">
            <div class="php-email-form">
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name1" placeholder="Your Name" required>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email1" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group">
                <input type="number" class="form-control" name="subject" id="subject1" placeholder="Phone" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="query1" id="query1" rows="5" placeholder="Message" required></textarea>
              </div>
              
              <div class="text-center"><button type="submit" id="mailbutton">Send Message</button></div>
            </div>
          </div>

          <div class="col-lg-6 gmaps">
            <iframe class="" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3766.363638844756!2d72.97172697475243!3d19.266546345963782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7bb976ea62a8d%3A0x4859c81f415a6bb1!2sNew%20Horizon%20Scholar&#39;s%20School!5e0!3m2!1sen!2sin!4v1691585155406!5m2!1sen!2sin" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen=""></iframe>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container d-md-flex py-4" style="align-items: center;">

      <div class="me-md-auto text-center text-md-start" style="letter-spacing: 0.2px;">
        <div class="copyright">
          <strong>SOF</strong> | All Rights Reserved.
        </div>
      </div>
      <div class="social-links text-center text-md-end pt-3 pt-md-0">
        <a href="https://www.facebook.com/SiddharthDilipOvalekar?mibextid=ZbWKwL" class="facebook"><i class="bx bxl-facebook"></i></a>
        <!-- <a href="https://instagram.com/ishrae_thane_chapter?igshid=MzRlODBiNWFlZA==" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.linkedin.com/company/ishrae-thane-chapter/" class="linkedin"><i class="bx bxl-linkedin"></i></a> -->
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    $("#mailbutton").on('click',function(){
        const email=$('#email1').val();
        const name=$('#name1').val();
        const phone=$('#subject1').val();
        const query=$('#query1').val();
        if (email && name && phone && query){
          window.open(`mailto:ovalekarsiddharth@gmail.com?subject=Inquiry Mega Job Fair&body=${query} (Name: ${name}, Phone: ${phone}, Email: ${email})`);
        }
    })
    showEngineering(document.getElementById("eligibilityengineering"))
  </script>

</body>

</html>