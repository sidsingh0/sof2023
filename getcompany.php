<?php include("./connect.php");

if (isset($_GET["companyid"])) {
  $companyid=$_GET["companyid"];
  $query="select * from trash where id=$companyid"; 
  $res = mysqli_query($conn, $query);
  if(!$res){
    echo mysqli_error($conn);
    exit;
  }
  if(mysqli_num_rows($res) < 1){
    $data = [
      "success" => 0,
      "message" => "Invalid Request!"
    ];
    $jsonData = json_encode($data);
    $encodedData = urlencode($jsonData);
    $redirectUrl = "index.php?data=" . $encodedData;
    header("Location: " . $redirectUrl);
    exit;
  }
  $res=$res->fetch_assoc();
}else{
  $data = [
    "success" => 0,
    "message" => "Invalid Request!"
  ];
  $jsonData = json_encode($data);
  $encodedData = urlencode($jsonData);
  $redirectUrl = "index.php?data=" . $encodedData;
  header("Location: " . $redirectUrl);
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SOF Job Fair 2023</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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
  <style>
    .progress-bar{
      background-color:#03a9f5!important;
    }
  </style>

  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body style="background-image: url('./assets/img/bg2.png')!important;background-repeat:no-repeat;background-size:cover;">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <div class="mylogo me-auto">
        <img src="assets/img/sof.jpeg" style="border-left: none;padding-left: 0;" class="apsitlogo" alt="" srcset="">
        <!-- <img src="assets/img/nhss.jpeg" class="apsitlogo" alt="" srcset=""> -->
        <!-- <img src="assets/img/logos/job4u.png" id="apsitlogo" alt="" srcset=""> -->
      </div>


      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a style="color:#03a9f5" class="nav-link scrollto active hover-underline-animation" href="/index.php#videohero">Home</a></li>
          <li><a class="nav-link scrollto hover-underline-animation" href="/index.php#about">About</a></li>
          <li><a class="nav-link scrollto hover-underline-animation" href="/index.php#contact">Contact</a></li>
          <li class="dropdown" style="cursor:pointer"><a id="myherobutton" style="background-color:#03a9f5;border:#03a9f5"><span style="color:white;">Apply Now</span> <i class="bi bi-chevron-down" style="color:white;"></i></a>
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

  <main>
    <section id="register" class="register">
      <div class="container">
        <!-- <div class="section-title">
          <h2 style="text-transform: none;color:#1a2533;font-size: 40px;">Company Details</h2>
        </div> -->
        <div class="eligibilitycontentcontainer registercontainerreducer mt-4 mb-4" style="background-color:#fff!important;" data-aos="fade-up">
          <div class="mt-4" style="width:100%;display:flex;justify-content:center!important;align-items:center;flex-direction:column">
            <img src="<?php echo $res['photo'];?>" class="mb-3" style="width:300px;border-radius:7px;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;" alt="" srcset="">
            <p style="margin-bottom:0;font-size: 24px;color:#05A9F4!important;font-weight:500;"><?php echo $res["name"];?></p>
          </div>

          <div class="mt-4 mb-4" style="width:100%;display:grid;justify-content:center!important;align-items:center;flex-direction:column">
            
            <div class="col-xl-8 row" style="justify-self:center;">
            <div class="col-xl-4 p-0 pe-3">
              <div style="box-shadow: 0px 0px 10px 0px rgba(0, 135, 204, 0.15);padding:20px;">
                <p style="font-size:12px;margin-bottom:0;color:#05A9F4;">OPENINGS</p>
                <p style="font-size:18px;word-break: break-all;color:#19305e;margin-bottom:0"><?php echo $res["requirement"];?></p>
              </div>
            </div>        
              
            <div class="col-xl-4 p-0 pe-3">
              <div style="box-shadow: 0px 0px 10px 0px rgba(0, 135, 204, 0.15);padding:20px;">
                <p style="font-size:12px;margin-bottom:0;color:#05A9F4;">AVERAGE CTC</p>
                <p style="font-size:18px;word-break: break-all;color:#19305e;margin-bottom:0"><span style="font-size:12px;">₹ </span><?php echo $res["ctc"];?></p>
              </div>
            </div>  
            <div class="col-xl-4 p-0">
              <div style="box-shadow: 0px 0px 10px 0px rgba(0, 135, 204, 0.15);padding:20px;">
                <p style="font-size:12px;margin-bottom:0;color:#05A9F4;">MAXIMUM CTC</p>
                <p style="font-size:18px;word-break: break-all;color:#19305e;margin-bottom:0"><span style="font-size:12px;">₹ </span><?php echo $res["max"];?></p>
              </div>
            </div>  
            </div>
            <div class="col-xl-8" style="justify-self:center;margin-top:25px!important;">
              <p style="font-size:12px;margin-bottom:0;color:#05A9F4;">BRIEF</p>
              <p style="font-size:18px;word-break: break-all;color:#19305e;margin-bottom:0;"><?php echo $res["about"];?></p>
            </div>
            <div class="col-xl-8" style="justify-self:center;margin-top:25px!important;">
              <p style="font-size:12px;margin-bottom:0;color:#05A9F4;">ELIGIBILITY</p>
              <p style="font-size:18px;word-break: break-all;color:#19305e;">
                <?php echo $res["eligibility"];?>
              </p>
            </div>
          </div>
        </div>
        
      </div>
    </section>
  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container d-md-flex py-4" style="align-items: center;">

      <div class="me-md-auto text-center text-md-start" style="letter-spacing: 0.2px;">
        <div class="copyright">
          <strong>SOF</strong> | All Rights Reserved.
        </div>
      </div>
      <div class="social-links text-center text-md-end pt-3 pt-md-0">
        <a href="https://www.facebook.com/profile.php?id=100081828978440&mibextid=ZbWKwL" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://instagram.com/ishrae_thane_chapter?igshid=MzRlODBiNWFlZA==" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.linkedin.com/company/ishrae-thane-chapter/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
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


</html>