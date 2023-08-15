<?php 
    include("partial.php");
?>

<?php 
    $message = "";
    if(!(isset($_GET["phone"]))){
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }else{
        $phone = $_GET['phone'];
        $query = "select * from students where phone=$phone";
        $res = mysqli_query($conn, $query);

        if(mysqli_num_rows($res) < 1){
            $message = "No such student exists";
        }else{
            $res = $res->fetch_assoc();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - View Profile</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

<?php include("./sidebar.php"); ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top  hamburgernavbar">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>



                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid mt-md-4">

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-12">
                            <div class="card ">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header mystudentcard py-3 d-flex flex-row align-items-center justify-content-between bg-white">
                                    <div class="">
                                        <h3 class="m-0 font-weight-medium" style="color:#302a68;"><?php echo $res["first_name"] . " " . $res["last_name"]; ?></h3>
                                        <p class="m-0 font-weight-light" style="color:#8c90ae;"><?php echo $res["field"]; ?></p>
                                    </div>
                                    <div class="dropdown mystudentcardoperations no-arrow d-flex ">
                                        <?php 
                                            if($res["attended"] == 1){
                                                
                                                echo '<a style="background-color: #d8efe2!important;border: none; cursor:default;" class="btn btn-success btn-icon-split ml-sm-0">
                                                <span class="text" style="color: #39b16d;font-weight: 400;"><i class="fas fa-check" style="margin-right: 5px;"></i>Present</span>
                                            </a>';
                                            }else{
                                                echo '<a style="background-color: #fee5dd!important;border: none; cursor:default;" class="btn btn-success btn-icon-split ml-sm-0">
                                                <span class="text" style="color: #e55d34;font-weight: 400;"><i class="fas fa-times" style="margin-right: 5px;"></i>Absent</span>
                                            </a>';
                                            }
                                        
                                        ?>

                                        <?php               
                                            if($res["top"] == 1){
                                                echo '<a style="background-color: #F0E5F8!important;border: none; cursor:default;" class="btn btn-danger mx-2 btn-icon-split">
                                                <span class="text" style="color:#973cdd"><i class="fas fa-star" style="margin-right: 5px;"></i>Prime</span>
                                            </a>  ';
                                            }else{
                                                echo '<a style="background-color: #fee5dd!important;border: none; cursor:default;" class="btn btn-danger mx-2 btn-icon-split">
                                                <span class="text" style="color:#e55d34"><i class="fas fa-star" style="margin-right: 5px;"></i>Regular</span>
                                            </a>  ';
                                            }
                                        
                                        ?> 
                                        <a href="<?php echo $url. "/".$res["path"]; ?>" target="_blank" style="background-color: #fff5d8!important;border: none;" class="btn btn-danger btn-icon-split">
                                            <span class="text" style="color:#c19c2f"><i class="fas fa-file-download" style="margin-right: 5px;"></i>Resume</span>
                                        </a>    
                                                                            
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="row">
                                    <div class="col-lg-12 col-xl-12">
                                        <div class="mb-3">
                                            <p class="m-0 font-weight-light text-xs" style="color:#8c90ae;">College</p>
                                            <p style="color: #302a68;"><?php echo $res["college"]; ?></p>
                                        </div>
                                        <div class="mb-3">
                                            <p class="m-0 font-weight-light text-xs" style="color:#8c90ae;">Year of passing</p>
                                            <p style="color: #302a68;"><?php echo $res["year_of_passing"]; ?></p>
                                        </div>
                                        <div class="mb-3">
                                            <p class="m-0 font-weight-light text-xs" style="color:#8c90ae;">Phone number</p>
                                            <p style="color: #302a68;"><?php echo $res["phone"]; ?></p>
                                        </div>
                                        <div class="mb-3">
                                            <p class="m-0 font-weight-light text-xs" style="color:#8c90ae;">Email address</p>
                                            <p style="color: #302a68;"><?php echo $res["email"]; ?></p>
                                        </div>
                                        <?php
                                            $dob=$res["dob"];
                                            $diff = (date('Y') - date('Y',strtotime($dob)));
                                            
                                        ?>
                                        <div class="mb-3">
                                            <p class="m-0 font-weight-light text-xs" style="color:#8c90ae;">Age</p>
                                            <p style="color: #302a68;"><?php echo $diff; ?> Years (<?php echo $dob; ?>)</p>
                                        </div>
                                    </div>

                                    
                                </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Pie Chart -->
                        
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-xs-12 py-1 py-md-2 py-lg-3">
                            <div class="card " style="padding: 20px;background-color: #fff;">
                                <div class="col mr-2 d-flex h-100" style="flex-direction: column;justify-content:end!important;">
                                    <div class="text-xs mycardsubtitle font-weight-light text-uppercase mb-1" style="color:#8c90ae">Class 10 </div>                                          
                                    <h3 class="m-0 font-weight-medium" style="color: #302a68;"><?php echo $res["tenth_marks"]; ?><span style="font-size:16px">%</span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-xs-12 py-1 py-md-2 py-lg-3">
                            <div class="card " style="padding: 20px;background-color: #fff;">
                                <div class="col mr-2 d-flex h-100" style="flex-direction: column;justify-content:end!important;">
                                    <div class="text-xs mycardsubtitle font-weight-light text-uppercase mb-1" style="color:#8c90ae">Class 12 </div>                                          
                                    <h3 class="m-0 font-weight-medium" style="color: #302a68;"><?php echo $res["twelfth_marks"]; ?><span style="font-size:16px">%</span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-xs-12 py-1 py-md-2 py-lg-3">
                            <div class="card " style="padding: 20px;background-color: #fff;">
                                <div class="col mr-2 d-flex h-100" style="flex-direction: column;justify-content:end!important;">
                                    <div class="text-xs mycardsubtitle font-weight-light text-uppercase mb-1" style="color:#8c90ae">Degree </div>                                          
                                    <h3 class="m-0 font-weight-medium" style="color: #302a68;"><?php echo $res["degree_marks"]; ?><span style="font-size:16px">%</span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-xs-12 py-1 py-md-2 py-lg-3">
                            <div class="card " style="padding: 20px;background-color: #fff;">
                                <div class="col mr-2 d-flex h-100" style="flex-direction: column;justify-content:end!important;">
                                    <div class="text-xs mycardsubtitle font-weight-light text-uppercase mb-1" style="color:#8c90ae">Aptitude Marks </div>                                          
                                    <h3 class="m-0 font-weight-medium" style="color: #302a68;"><?php echo $res["apti_marks"]; ?><span style="font-size:16px"></span></h3>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
                
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Siddharth Ovalekar Foundation 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/js/demo/chart-area-demo.js"></script>
    <script src="assets/js/demo/chart-pie-demo.js"></script>

</body>

</html>