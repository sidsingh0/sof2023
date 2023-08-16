<?php include("./connect.php") ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>View Details</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />
    <link
      href="https://api.fontshare.com/v2/css?f[]=poppins@900,500,400,300,800,700,600&f[]=hind@400,500&display=swap"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet"/>
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <link href="assets/css/style.css" rel="stylesheet" />
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
    <!-- End Header -->
    <div class="progress-header">
      <div class="progress-container">
        <div class="progress-bar" id="progressBar"></div>
      </div>
    </div>

    <main id="main">
      <section class="contact" style="min-height: 95vh; position: relative">
        <div
          
          class="col-lg-8 col-sm-8 col-xs-8 resultbox container aos-init aos-animate php-email-form"
        >
          <div class="section-title mt-5">
            <h2>View Registrations</h2>
            <h4 class="mt-5">Companies</h4>
          </div>
            <?php 
                $query1 = "select * from companies";
                $result1 = mysqli_query($conn, $query1);
            ?>
            <table id="tableUser">
                <thead>
                <tr>
                    <th scope="col">Company</th>
                    <th scope="col">HR Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                </tr>
                </thead>
                
                <tbody>
                <?php while($res=$result1->fetch_assoc()){
                    echo "<tr>
                        <td>". $res['company_name']."</td>
                        <td>". $res['hr_name']."</td>
                        <td>". $res['phone'] ."</td>
                        <td>". $res['email'] ."</td>
                    </tr>";

                }
                ?>

                </tbody>

            </table>

        </div>
        <div
          class="col-lg-8 col-sm-8 col-xs-8 resultbox container aos-init aos-animate php-email-form"
        >
        <div class="section-title">
            <h4 class="mt-5">Students</h4>
          </div>                
            <?php 
                $query = "select * from students";
                $result = mysqli_query($conn, $query);
            ?>
            <table id="tableUser1">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Category</th>
                    <th scope="col">Field</th>
                    <th scope="col">Degree Marks</th>
                </tr>
                </thead>
                
                <tbody>
                <?php while($res=$result->fetch_assoc()){
                    echo "<tr>
                        <td>". $res['first_name']. " " .$res['last_name'] ."</td>
                        <td>". $res['phone']."</td>
                        <td>". $res['category'] ."</td>
                        <td>". $res['field'] ."</td>
                        <td>". $res['degree_marks'] ."</td>
                    </tr>";

                }
                ?>

                </tbody>

            </table>

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
    <!-- End Footer -->

    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script>
      $(document).ready(function() {
        $("#tableUser").DataTable({
            responsive: true
        });
      });
      $(document).ready(function() {
        $("#tableUser1").DataTable({
            responsive: true
        });
      });
    </script>
  </body>
</html>
