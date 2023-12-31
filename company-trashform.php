<?php include("./connect.php");

if (isset($_POST["name"])) {
  $company_name = mysqli_real_escape_string($conn,$_POST["name"]);
  $requirement = mysqli_real_escape_string($conn,$_POST["requirement"]);
  $about = mysqli_real_escape_string($conn,$_POST["about"]);
  $eligibility = mysqli_real_escape_string($conn,$_POST["eligibility"]);
  $ctc = mysqli_real_escape_string($conn,$_POST["ctc"]);
  $max = mysqli_real_escape_string($conn,$_POST["max"]);

  if (isset($_FILES["logo"])) {
    $targetDirectory = "uploads/"; // Change this to your desired directory

    // Get the original file name and extension
    $originalFileName = $_FILES["logo"]["name"];
    $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);

    // Generate a custom file name (you can use any method to generate a unique name)
    $customFileName = $company_name . "." . $fileExtension;

    $targetFile = $targetDirectory . $customFileName;
    
    // Check if the file was successfully uploaded
    if (move_uploaded_file($_FILES["logo"]["tmp_name"], $targetFile)) {
      $query = "insert into trash (name, requirement, about, eligibility, ctc, photo,max) values ('$company_name', '$requirement', '$about', '$eligibility', '$ctc', '$targetFile', '$max')";
      $res = mysqli_query($conn, $query);
      if(!$res){
        echo mysqli_error($conn);
        exit;
      }
    }
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TrashForm Company</title>
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
  <link href="admin/assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>

  <main class="mt-4">
    <section id="register" class="register">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2 style="text-transform: none;color:#1a2533;font-size: 40px;">Company Form</h2>
        </div>
        <div class="eligibilitycontentcontainer registercontainerreducer">
          <form action="company-trashform.php" method="POST" enctype="multipart/form-data">
            <div class="row" data-aos="fade-up" data-aos-delay="100">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                <label for="regcompanyname">Comapny's Name</label>
                <input type="text" maxlength="100" name="name" class="form-control" id="regcompanyname" placeholder="" required>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                <label for="reghrname">Number Of Requirement</label>
                <input type="text" maxlength="100" class="form-control" name="requirement" id="reghrname" placeholder="" required>
              </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="100">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                <label for="regphone">About</label>
                <textarea class="form-control" name="about" id="regphone" required></textarea>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                <label for="regemail">Eligibility Criteria</label>
                <textarea class="form-control" name="eligibility" id="regemail" placeholder="" required></textarea>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                <label for="regopencount">CTC</label>
                <input type="number" class="form-control" name="ctc" id="regopencount" placeholder="" required>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                <label for="regmax">Max</label>
                <input type="number" class="form-control" name="max" id="regmax" placeholder="" required>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                <label for="regfile">Upload Logo</label>
                <input type="file" class="form-control" name="logo" id="regfile" placeholder="">
              </div>
            </div>
            <button id="regsubmit" name="submit" type="submit">Submit</button>
          </form>
        </div>
      </div>
    </section>

    

    <section class="register">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2 style="text-transform: none;color:#1a2533;font-size: 40px;">Company View</h2>
        </div>
        <div class="eligibilitycontentcontainer registercontainerreducer">
            <table id="comp" width="100%">
            <thead>
                <tr>
                    <th>Sr No</th>
                    <th>Company Name</th>
                    <th>About</th>
                    <th>No.of Req</th>
                    <th>Eligibility</th>
                    <th>CTC</th>
                    <th>Logo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $q = "select * from trash;";
                $r = mysqli_query($conn, $q);
                $i = 1;



                while ($res = $r->fetch_assoc()) {

                    echo "<tr>
                            <td>" . $i . "</td>
                            <td><a style='color:#9A53D2;' href='getcompany.php?companyid=".$res['id']."'>" . $res['name'] . "</a></td>
                            <td>" . substr($res['about'], 0, 39) . "...</td>
                            <td>" . $res['requirement'] . "</td>
                            <td>" . substr($res['eligibility'], 0, 39). "...</td>
                            <td>" . $res['ctc'] . "</td>
                            <td><img src='" . $res['photo'] . "' width='91px'></td>
                        </tr>";
                    $i++;
                }


                ?>
            </tbody>
            </table>
        </div>
      </div>
    </section>
  </main>


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

    <script src="admin/assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="admin/assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <script>
        $("#dataTable").DataTable({
            responsive: true
        });

    </script>


</html>