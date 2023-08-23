<?php
include("./connect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Siddharth Ovalekar Foundation is a leading NGO in Thane, Maharashtra, dedicated to empowering lives through successful placements and job opportunities. Join us in making a difference." />
  <meta name="keywords" content="Siddharth Ovalekar Foundation, placements, jobs, Thane, Maharashtra, NGO" />
  <meta name="author" content="SOF" />

  <!-- Page-specific meta tags -->
  <meta name="robots" content="index, follow" />
  <meta name="og:title" content="Siddharth Ovalekar Foundation | Empowering Lives through Placements and Jobs in Thane, Maharashtra" />
  <meta name="og:description" content="Join Siddharth Ovalekar Foundation in Thane, Maharashtra, and be part of our mission to empower lives through successful placements and job opportunities." />
  <meta name="og:image" content="/assets/img/sof.jpeg" />

  <title>SOF Job Fair 2023</title>

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" />
  <link rel="manifest" href="/site.webmanifest" />

  <!-- Google Fonts -->
  <link href="https://api.fontshare.com/v2/css?f[]=switzer@600,800,900,700,400,300,500&f[]=satoshi@900,800,600,700,500,300,400&display=swap" rel="stylesheet" />
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/00987c9d18.js" crossorigin="anonymous"></script>
  <link href="assets/css/style.css" rel="stylesheet" />
  <style>
    .svg-menu-toggle {
      fill: #fff;
      pointer-events: all;
      /* needs to be there so the hover works */
      cursor: pointer;
      height: 20px;
    }

    .svg-menu-toggle .bar {
      -webkit-transform: rotate(0) translateY(0) translateX(0);
      transform: rotate(0) translateY(0) translateX(0);
      opacity: 1;

      -webkit-transform-origin: 20px 10px;
      transform-origin: 20px 10px;

      -webkit-transition: -webkit-transform 0.4s ease-in-out,
        opacity 0.2s ease-in-out;
      transition: transform 0.4s ease-in-out, opacity 0.2s ease-in-out;
    }

    .svg-menu-toggle .bar:nth-of-type(1) {
      -webkit-transform-origin: 20px 10px;
      transform-origin: 20px 10px;
    }

    .svg-menu-toggle .bar:nth-of-type(3) {
      -webkit-transform-origin: 20px 20px;
      transform-origin: 20px 20px;
    }

    /* Hover styles for .svg-menu-toggle */
    input[type="checkbox"]:checked+label .svg-menu-toggle .bar:nth-of-type(1) {
      -webkit-transform: rotate(-45deg) translateY(0) translateX(0);
      transform: rotate(-45deg) translateY(0) translateX(0);
    }

    input[type="checkbox"]:checked+label .svg-menu-toggle .bar:nth-of-type(2) {
      opacity: 0;
    }

    input[type="checkbox"]:checked+label .svg-menu-toggle .bar:nth-of-type(3) {
      -webkit-transform: rotate(45deg) translateY(0em) translateX(0em);
      transform: rotate(45deg) translateY(0em) translateX(0em);
    }

    .svg-menu-toggle {
      fill: #000;
      /* Replace with your desired color code */
      pointer-events: all;
      cursor: pointer;
    }

    /* Additional styles for .inline-svg */
    .inline-svg {
      display: block;
      margin: 0 auto;
    }

    body {
      background-color: #f6f6f6;
      font-family: "satoshi", sans-serif;
    }

    .sectional {
      margin: 0 130px;
    }

    .newnavbarheader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100vw;
      z-index: 100000;
      background-color: #f6f6f6;
      box-shadow: 0px 10px 50px rgba(0, 0, 0, 0.1);
    }

    .newnavbar {
      padding: 20px 0;
      display: flex;
      align-items: center;
      position: relative;
      justify-content: space-between;
    }

    .newnavbar_logos>img {
      height: 40px;
    }

    .newnavbar_links {
      display: flex;
      gap: 40px;
      font-family: "satoshi", sans-serif;
      font-weight: 500;
      font-size: 16px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    .newcta {
      background-color: #e03a3c;
      cursor: pointer;
      color: #f6f6f6;
      padding: 11px 30px 11px 35px;
      border-radius: 35px;
      font-size: 14px;
      transition: 0.3s;
      font-weight: 600 !important;
      box-shadow: 0 0 8px rgba(224, 58, 60, 0.5);
    }

    .herotext {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .herotext>* {
      padding: 0;
      margin: 0;
    }

    .herotext_head {
      color: #e03a3c;
      font-family: "satoshi", sans-serif;
      font-weight: 800;
      font-size: 16px;
    }

    .cherotext_headimg {
      width: 700px;
    }

    .mherotext_headimg {
      display: none;
    }

    .mherotext_subhead {
      display: none;
    }

    .cherotext_subhead {
      width: 800px;
      text-align: center;
      color: #787878;
      margin-top: 24px;
      font-size: 18px;
    }

    .mmenu {
      display: none;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      background: #fff;
      box-shadow: 0 0 2px rgba(120, 120, 120, 0.3);
      border-radius: 10px;
      position: absolute;
      top: 80px;
      right: 110px;
      transform: translate(100%);
    }

    .mmenu>a {
      padding: 12px 20px;
    }
    #mmenu2container{
      display: none;
    }
    .mmenu2{
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      background: #fff;
      box-shadow: 0 0 2px rgba(120, 120, 120, 0.3);
      border-radius: 10px;
      position: absolute;
      top: 80px;
      right: 130px;
      transform: translate(100%);
    }
    .mmenu2>a {
      padding: 12px 20px;
    }
    #toggler {
      display: none !important;
    }

    #togglerlabel {
      display: none;
    }

    input[type="checkbox"]:checked+label+.mmenu {
      display: flex;
      /* Add other styles */
    }

    .herotextbtngrp {
      display: flex;
      margin-top: 32px;
      gap: 15px;
    }

    .herotextbtngrp>a {
      display: block;
    }

    .videosection {
      background-color: black;
      margin-top: 120px;
      overflow: visible;
    }

    .promovid {
      width: 100%;
      height: 500px;
      overflow: hidden;
      object-fit: cover;
      border-radius: 25px;
      transform: translate(0px, -180px);
      position: relative;
    }

    .promovid>.promovidimg {
      transform: translate(0px, -100px);
    }

    .promovidplay {
      position: absolute;
      top: 50%;
      left: 50%;
      height: 60px;
      transform: translate(-50%, -50%);
      transition: 0.3s;
      cursor: pointer;
    }

    .promovidplay:hover {
      height: 80px !important;
    }

    .promovidreg {
      position: absolute;
      top: 30px;
      right: 30px;
      height: 180px;
    }

    .promotext {
      font-family: 'switzer', sans-serif;
      font-size: 40px;
      font-weight: 600;
      color: #f6f6f6;
      display: flex;
      flex-direction: column;
    }

    .promologos {
      height: 80px;
    }

    .promocontent {
      display: flex;
      justify-content: space-between;
      align-items: center;
      width: calc(100vw - 260px);
      position: absolute;
      bottom: 35px;
      left: 130px;
    }

    .companiesheader {
      font-family: 'switzer', sans-serif;
      font-weight: 700;
      font-size: 40px;
    }

    @media screen and (max-width: 942px) {
      .cherotext_subhead {
        width: 600px;
      }

      .cherotext_headimg {
        width: 500px;
      }

      .promovidreg {
        height: 150px;
        top: 10px;
        right: 10px;
      }

      .promocontent {
        flex-direction: column;
        gap: 10px;
        bottom: 20px;
      }

      .promotext {
        flex-direction: row;
      }

      .promotext:first-child {
        margin-right: 5px;
      }

    }

    @media screen and (max-width: 778px) {
      .sectional {
        margin: 0 60px;
      }

      .cherotext_subhead {
        width: 100%;
      }

      .cherotext_headimg {
        width: 100%;
      }

      .promocontent {
        bottom: 40px;
      }

      .promotext {
        font-size: 32px;
      }

      .promologos {
        height: 55px;
      }
    }

    @media screen and (max-width:572px) {
      .promotext {
        display: none;
      }

      .promologos {
        height: 70px;
      }

      .promocontent {
        bottom: 60px;
      }
    }

    @media screen and (max-width: 550px) {
      .herotext_head {
        font-size: 14px;
        text-align: center;
      }

      .cherotext_headimg {
        display: none;
      }

      .herotextbtngrp {
        gap: 10px;
      }

      .mherotext_headimg {
        display: block;
        width: 90%;
        margin-top: 16px;
        margin-bottom: 24px;
      }

      .cherotext_subhead {
        display: none;
      }

      .mherotext_subhead {
        display: block;
        text-align: center;
        width: 100%;
      }

      .sectional {
        margin: 0 15px;
      }

      .newnavbar {
        padding: 20px 0px;
      }

      .newnavbar_logos>img {
        height: 35px;
      }

      .mmenu {
        right: 155px;
      }
    }

    @media screen and (max-width: 1141px) {
      .newnavbar_links {
        display: none;
      }

      .newnavbar_btns>.newcta {
        display: none;
      }

      #togglerlabel {
        display: block;
      }
    }

    @media screen and (min-width:340px) and (max-width:1120px) {
      .promovid>.promovidimg {
        transform: translate(-750px, -100px);
      }
    }

    @media screen and (min-width:1120px) {
      .promovid>.promovidimg {
        transform: translate(-350px, -100px);
      }
    }

    @media screen and (max-width:372px) {
      .promologos {
        width: 100vw;
        padding: 0 15px;
        height: auto;
      }
    }

    @media screen and (max-width:1200px) {
      .newaboutrow {
        flex-direction: column-reverse;
      }

      .about .content {
        padding-left: 0;
      }
    }

    @media screen and (max-width:800px) {
      .herotextbtngrp {
        justify-content: center;
      }

      .newabouttext {
        margin-top: 0;
      }
    }

    @media screen and (max-width:552px) {
      .about .content {
        padding-left: 8px;
      }
    }

    /* 212427 */
    .play-btn {
      width: 94px;
      height: 94px;
      margin: 0 auto;
      background: radial-gradient(#009961 50%, rgba(0, 153, 97, 0.4) 52%);
      border-radius: 50%;
      display: block;
      overflow: hidden;
      position: relative;
    }

    .play-btn::after {
      content: "";
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translateX(-40%) translateY(-50%);
      width: 0;
      height: 0;
      border-top: 10px solid transparent;
      border-bottom: 10px solid transparent;
      border-left: 15px solid #fff;
      z-index: 100;
      transition: all 400ms cubic-bezier(0.55, 0.055, 0.675, 0.19);
    }

    .play-btn::before {
      content: "";
      position: absolute;
      width: 120px;
      height: 120px;
      animation-delay: 0s;
      animation: pulsate-btn 3s;
      animation-direction: forwards;
      animation-iteration-count: infinite;
      animation-timing-function: steps;
      opacity: 1;
      border-radius: 50%;
      border: 5px solid rgba(0, 153, 97, 0.7);
      top: -15%;
      left: -15%;
      background: rgba(198, 16, 0, 0);
    }

    .play-btn:hover::after {
      border-left: 15px solid #009961;
      transform: scale(20);
    }

    .play-btn:hover::before {
      content: "";
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translateX(-40%) translateY(-50%);
      width: 0;
      height: 0;
      border: none;
      border-top: 10px solid transparent;
      border-bottom: 10px solid transparent;
      border-left: 15px solid #fff;
      z-index: 200;
      animation: none;
      border-radius: 0;
    }

    .naver {
      text-decoration: none;
      background-image: linear-gradient(180deg, transparent 65%, rgba(224, 58, 60, 0.7) 0);
      background-repeat: no-repeat;
      background-size: 0 100%;
      transition: background-size .4s ease;
    }

    .naver:hover {
      background-size: 100% 100%;
    }

    .newcta:hover {
      background-color: rgba(224, 58, 60, 0.7) !important;
      color: #f6f6f6 !important;
      border: none;
    }
  </style>
</head>

<body>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- ======= Header ======= -->

  <header class="newnavbarheader">
    <div class="sectional">
      <div class="newnavbar">
        <a href="/index.php" class="newnavbar_logos">
          <img src="./assets/img/sof3.png" style="padding-right: 10px" alt="" srcset="" />
          <img src="./assets/img/azadi.png" style="padding-left: 10px; border-left: 1px solid grey" alt="" srcset="" />
  </a>
        <div class="newnavbar_links">
          <a class="naver" style="color:black;font-weight:400;" href="#heropart">Home</a>
          <a class="naver" style="color:black;font-weight:400;" href="#companiespart">Companies</a>
          <a class="naver" style="color:black;font-weight:400;" href="#contact">Contact Us </a>
        </div>
        <div class="newnavbar_btns">
          <a class="newcta" id="mmenu2toggle">Apply now <i class="fa-solid fa-chevron-down" style="font-size: 12px; font-weight: 600"></i></a>
          <input type="checkbox" id="toggler" />
          <label for="toggler" id="togglerlabel">
            <svg class="inline-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px" height="40px" viewBox="0 0 32 22.5" enable-background="new 0 0 32 22.5" xml:space="preserve">
              <title>Mobile Menu</title>
              <g class="svg-menu-toggle">
                <path class="bar" d="M20.945,8.75c0,0.69-0.5,1.25-1.117,1.25H3.141c-0.617,0-1.118-0.56-1.118-1.25l0,0
                          c0-0.69,0.5-1.25,1.118-1.25h16.688C20.445,7.5,20.945,8.06,20.945,8.75L20.945,8.75z"></path>
                <path class="bar" d="M20.923,15c0,0.689-0.501,1.25-1.118,1.25H3.118C2.5,16.25,2,15.689,2,15l0,0c0-0.689,0.5-1.25,1.118-1.25 h16.687C20.422,13.75,20.923,14.311,20.923,15L20.923,15z">
                </path>
                <path class="bar" d="M20.969,21.25c0,0.689-0.5,1.25-1.117,1.25H3.164c-0.617,0-1.118-0.561-1.118-1.25l0,0
                          c0-0.689,0.5-1.25,1.118-1.25h16.688C20.469,20,20.969,20.561,20.969,21.25L20.969,21.25z">
                </path>
                <!-- needs to be here as a 'hit area' -->
                <rect width="40" height="40" fill="none"></rect>
              </g>
            </svg></label>
          <div class="mmenu">
            <a>Home</a>
            <a>View your status</a>
            <a>Contact Us</a>
            <a href="/student-register.php" style="font-weight: 600; color: #e03a3c">Students <i class="fa-solid fa-chevron-right" style="font-size: 14px; font-weight: 600"></i></a>
            <a href="/company-register.php" style="font-weight: 600; color: #e03a3c">Company
              <i class="fa-solid fa-chevron-right" style="font-size: 14px; font-weight: 600"></i></a>
          </div>
          <div class="" id="mmenu2container">
          <div class="mmenu2" id="mmenu2">
            <a href="/student-register.php" style="font-weight: 600; color: #e03a3c">Students <i class="fa-solid fa-chevron-right" style="font-size: 14px; font-weight: 600"></i></a>
            <a href="/company-register.php" style="font-weight: 600; color: #e03a3c">Company
              <i class="fa-solid fa-chevron-right" style="font-size: 14px; font-weight: 600"></i></a>
          </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <section style="margin-top: 60px" id="heropart">
    <div class="sectional herotext">
      <p class="herotext_head">SIDDHARTH OVALEKAR FOUNDATION & NHITM</p>
      <img class="cherotext_headimg" src="./assets/img/cherotext.png" alt="" srcset="" />
      <img class="mherotext_headimg" src="./assets/img/mherotext.png" alt="" srcset="" />
      <p class="cherotext_subhead">
        Join us on August 26, 2023, as we open the door to exciting job
        prospects, inviting you to be a part of our event and embark on a path
        of innovation and success.
      </p>
      <p class="mherotext_subhead">
        Join us on August 26, 2023, as we open the door to exciting job
        prospects.
      </p>
      <div class="herotextbtngrp">
        <a href="/student-register.php" class="newcta" style="margin-top: 2px;">Students<i class="fa-solid fa-chevron-right" style="margin-left:5px;font-size: 12px; font-weight: 600"></i></a>
        <a href="/student-register.php" class="newcta" style="box-shadow: none;border: 2px solid #CFCFCF;background-color: #f6f6f6;color:black;">Company<i class="fa-solid fa-chevron-right" style="margin-left:5px;font-size: 12px; font-weight: 600"></i></a>
      </div>
    </div>
  </section>

  <section class="videosection pb-0">
    <div class="sectional">
      <div class="promovid">
        <img src="./assets/img/videobg.png" class="promovidimg" alt="" srcset="">
        <img src="./assets/img/play.png" class="promovidplay" id="promovidplay">

        <!-- vid btn -->
        <a href="./assets/video/main.mp4" class="glightbox play-btn mb-4" style="display: none!important;"></a>
        <!-- vid btn end -->

        <img src="./assets/img/registrations.png" class="promovidreg">
      </div>
      <div class="promocontent">
        <div class="promotext">
          <p class="m-0 p-0" style="margin-right: 6px!important;">In co-ordination</p>
          <p class="m-0 p-0">with</p>
        </div>
        <img class="promologos" src="./assets/img/partnerlogos.png" alt="" srcset="">
      </div>
    </div>
  </section>

  <!-- About Section - Home Page -->
  <section id="about" style="margin-top: 70px;margin-bottom:30px" class="about">

    <div class="sectional" data-aos="fade-up" data-aos-delay="100">
      <div class="row align-items-xl-center gy-5 newaboutrow">
        <div class="col-xl-7">
          <div class="row gy-4 icon-boxes">

            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-box">
                <i class="bi bi-buildings"></i>
                <h3>Location</h3>
                <a style="font-weight: 400;" href="https://goo.gl/maps/D1vvP39WB4DBtdkJ6">
                  <p>New Horizon Institute of Technology &amp; Management, Kavesar, Anand Nagar, Thane.</p>
                </a>

              </div>
            </div> <!-- End Icon Box -->

            <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="icon-box">
                <i class="bi bi-clipboard-pulse"></i>
                <h3>Date</h3>
                <p>The Job Fair will be held on 26th of August 2023 at 11:00 a.m. Mark your calendars!</p>
              </div>
            </div> <!-- End Icon Box -->

            <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
              <div class="icon-box">
                <i class="bi bi-command"></i>
                <h3>Deadline</h3>
                <p>Registration ends at 12:00 p.m. noon on August 26. Kindly register before the deadline.</p>
              </div>
            </div> <!-- End Icon Box -->

            <div class="col-md-6" data-aos="fade-up" data-aos-delay="500" id="companiespart">
              <div class="icon-box">
                <i class="bi bi-graph-up-arrow"></i>
                <h3>Eligibility</h3>
                <p>Individuals in or above class 12, Engineers and Non-engineers, are eligible to apply.</p>
              </div>
            </div> <!-- End Icon Box -->

          </div>
        </div>
        <div class="col-xl-5 content newabouttext">
          <h3 style="font-family:'switzer',sans-serif;">About Us</h3>
          <p>Siddharth Ovalekar Foundation (SOF) is organizing Job Fair 2023 in collaboration with New Horizon Institute of Technology & Management. Over 50 companies will be participating in the event, recruiting students from a diverse range of fields. Register today to seize exciting opportunities!</p>
          <div class="herotextbtngrp">
            <a href="/student-register.php" class="newcta" style="margin-top: 2px;">Students<i class="fa-solid fa-chevron-right" style="margin-left:5px;font-size: 12px; font-weight: 600"></i></a>
            <a href="/student-register.php" class="newcta" style="box-shadow: none;border: 2px solid #CFCFCF;background-color: #f6f6f6;color:black;">Company<i class="fa-solid fa-chevron-right" style="margin-left:5px;font-size: 12px; font-weight: 600"></i></a>
          </div>
        </div>

      </div>
    </div>

  </section><!-- End About Section -->

  <section style="padding:10px 0;background-color: #fff!important;margin-bottom:60px;">
    <div class="sectional">
      <div class="clients-slider swiper">
        <div class="swiper-wrapper align-items-center">
          <?php
          $swiper = "select * from trash";
          $res_swiper = mysqli_query($conn, $swiper);
          while ($res = $res_swiper->fetch_assoc()) {
            echo '<div class="swiper-slide"><a href="getcompany.php?companyid=' . $res["id"] . '" ><img src="' . $res["photo"] . '" class="img-fluid" alt=""></a></div>';
          }
          ?>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
    </div>
  </section>

  <section id="contact" class="contact pt-0">
    <div class="container" data-aos="fade-up">

      <div class="mb-4" style="text-align: center;">
        <h2 style="font-family: 'switzer',sans-serif;font-weight:700;">Reach us</h2>
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

            <div class="text-center"><button type="submit" id="mailbutton" style="border-radius: 35px;">Send Message</button></div>
          </div>
        </div>

        <div class="col-lg-6 gmaps">
          <iframe class="" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3766.363638844756!2d72.97172697475243!3d19.266546345963782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7bb976ea62a8d%3A0x4859c81f415a6bb1!2sNew%20Horizon%20Scholar&#39;s%20School!5e0!3m2!1sen!2sin!4v1691585155406!5m2!1sen!2sin" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen=""></iframe>
        </div>

      </div>

    </div>
  </section>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="sectional d-md-flex py-4" style="align-items: center">
      <div class="me-md-auto text-center text-md-start" style="letter-spacing: 0.2px">
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
  </footer>
  <!-- End Footer -->

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
    $("#promovidplay").on("click", function() {
      $(".glightbox")[0].click();
    })
    $("#mmenu2toggle").on("click",function(){
      $("#mmenu2container").toggle();
    })
  </script>
</body>

</html>