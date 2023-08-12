<?php include("./connect.php");

if (isset($_POST["regname1"])) {
  $first_name = $_POST["regname1"];
  $last_name = $_POST["regname2"];
  $phone = $_POST["regphone"];
  $email = $_POST["regemail"];
  $college = $_POST["regcollege"];
  $category = $_POST["regcategory"];
  $field = $_POST["regfield"];
  $tenthmarks = $_POST["regtenthmarks"];
  $diplomamarks = $_POST["regdiplomamarks"];
  $degreemarks = $_POST["regdegreemarks"];
  $yearofpassing = $_POST["regyearofpassing"];
  $dob=$_POST["regdate"];

  $phonequery="select * from students where phone = '$phone'";
  $phonequery_res=mysqli_query($conn,$phonequery);
  if(mysqli_num_rows($phonequery_res)>0){
    echo "Error uploading file.";
    $data = [
      "success" => 0,
      "message" => "Phone number is already registered."
    ];
    $jsonData = json_encode($data);
    $encodedData = urlencode($jsonData);
    $redirectUrl = "index.php?data=" . $encodedData;
    header("Location: " . $redirectUrl);
    exit();
  }

  if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_FILES["regfile"])) {
    $targetDirectory = "uploads/"; // Change this to your desired directory

    // Get the original file name and extension
    $originalFileName = $_FILES["regfile"]["name"];
    $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);

    // Generate a custom file name (you can use any method to generate a unique name)
    $customFileName = $phone . "." . $fileExtension;

    $targetFile = $targetDirectory . $customFileName;
    
    // Check if the file was successfully uploaded
    if (move_uploaded_file($_FILES["regfile"]["tmp_name"], $targetFile)) {
      echo "File uploaded successfully.";
      $query = "insert into students (first_name, last_name, phone, email, college, category, field, tenth_marks, twelfth_marks, degree_marks, year_of_passing,path,dob) values ('$first_name', '$last_name', $phone, '$email', '$college', '$category', '$field', '$tenthmarks', '$diplomamarks', '$degreemarks', '$yearofpassing','$targetFile','$dob')";
      $res = mysqli_query($conn, $query);
    } else {
      echo "Error uploading file.";
      $data = [
        "success" => 0,
        "message" => "Please try again later."
      ];
      $jsonData = json_encode($data);
      $encodedData = urlencode($jsonData);
      $redirectUrl = "index.php?data=" . $encodedData;
      header("Location: " . $redirectUrl);
      exit();
    }
  }

  
  if ($res) {
    $data = [
      "success" => 1,
      "message" => "Registration was successful."
    ];
    $jsonData = json_encode($data);
    $encodedData = urlencode($jsonData); // Encode the data to be URL-safe
    $redirectUrl = "index.php?data=" . $encodedData;
    header("Location: " . $redirectUrl);
    exit();
  } else {
    $data = [
      "success" => 0,
      "message" => "Please try again later."
    ];
    $jsonData = json_encode($data);
    $encodedData = urlencode($jsonData);
    $redirectUrl = "index.php?data=" . $encodedData;
    header("Location: " . $redirectUrl);
    exit();
  }
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


      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active hover-underline-animation" href="/index.php#videohero">Home</a></li>
          <li><a class="nav-link scrollto hover-underline-animation" href="/index.php#about">About</a></li>
          <li><a class="nav-link scrollto hover-underline-animation" href="/index.php#contact">Contact</a></li>
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

  <main>
    <section id="register" class="register">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2 style="text-transform: none;color:#1a2533;font-size: 40px;">Student Registration</h2>
        </div>
        <div class="eligibilitycontentcontainer registercontainerreducer">
          <form action="student-register.php" method="POST" enctype="multipart/form-data">
            <div class="row" data-aos="fade-up" data-aos-delay="100">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                <label for="regname1">First Name</label>
                <input type="text" maxlength="40" name="regname1" class="form-control" id="regname1" placeholder="" required>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                <label for="regname2">Last Name</label>
                <input type="text" maxlength="40" class="form-control" name="regname2" id="regname2" placeholder="" required>
              </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="100">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                <label for="regphone">Phone</label>
                <input type="number" maxlength="10" class="form-control" name="regphone" id="regphone" placeholder="" required>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                <label for="regemail">Email</label>
                <input type="email" maxlength="100" class="form-control" name="regemail" id="regemail" placeholder="" required>
              </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="100">
              <div class="col-lg-12 form-group">
                <label for="regcollege">College Name</label>
                <input type="text" maxlength="150" class="form-control" name="regcollege" id="regcollege" placeholder="" required>
              </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="100">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                <label for="regcategory">Category</label>
                <select class="form-select" name="regcategory" id="regcategory" placeholder="" onchange="handleCategoryChange()" required>
                  <option value="" disabled selected>Select an option</option>
                  <option value="Engineering">Engineering</option>
                  <option value="Non-Engineering/Diploma">Non-Engineering/Diploma</option>
                  <option value="12th HSC">HSC (12th passed/pursuing)</option>
                </select>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                <label for="regfield">Field</label>
                <select class="form-select" name="regfield" id="regfield" placeholder="" required>
                  <option value="" disabled selected>Select an option</option>
                </select>
              </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="100">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                <label for="regtenthmarks">Class 10th Marks (in %)</label>
                <input type="number" class="form-control" name="regtenthmarks" id="regtenthmarks" placeholder="" required>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                <label for="regdiplomamarks">Class 12th/Diploma marks (in %)</label>
                <input type="number" class="form-control" name="regdiplomamarks" id="regdiplomamarks" placeholder="" required>
              </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="100">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                <label for="regdegreemarks">Degree Marks (in %)</label>
                <input type="number" class="form-control" name="regdegreemarks" id="regdegreemarks" placeholder="">
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                <label for="regyearofpassing">Year of Passing</label>
                <input type="number" class="form-control" name="regyearofpassing" id="regyearofpassing" required>
              </div>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                <label for="regfile">Upload your CV (in PDF)</label>
                <input type="file" class="form-control" name="regfile" id="regfile" accept=".pdf" placeholder="">
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                <label for="regdate">Date of birth</label>
                <input type="date" class="form-control" id="regdate" name="regdate" max="2023-12-31" required>
              </div>
            </div>
            
            <button id="regsubmit" name="regsubmit" type="submit">Submit</button>
          </form>
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