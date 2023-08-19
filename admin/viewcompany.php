<?php
include("../connect.php");
$url = "/sof2023";
$redirectUrl = $url . "/admin/login.php";

//   if(!(isset($_COOKIE["username"]))){
//     header("Location: " . $redirectUrl);
//     exit();
//   }
if (isset($_GET["company_id"])){
    $id=$_GET["company_id"];
    $query="select * from companies where id=$id";
    $query_res=mysqli_query($conn,$query);
    if(!$query_res or mysqli_num_rows($query_res)<1){
        header("Location:".$url."/admin/companylist.php");
    }
    $query_res=$query_res->fetch_assoc();

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

    <title>Admin - View Company</title>

    <!-- Custom fonts for this template-->
    <link href="./assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Custom styles for this template-->
    <link href="./assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
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
                                        <h3 class="mb-2 font-weight-medium" style="color:#302a68;"><?php echo $query_res['company_name']; ?></h3>
                                        
                                        <div class="d-flex" style="gap:5px;flex-wrap:wrap">
                                            <?php 
                                                $joblist=explode(",",$query_res['categories']);
                                                $filteredArray = array_filter($joblist, function ($value) {
                                                    return trim($value) !== '';
                                                });
                                                foreach($filteredArray as $job){
                                                    echo '<p class="btn" style="background-color:#F5EEFB;margin:0;color:#9A53D2;font-size:14px;">'.$job.'</p>';
                                                }
                                            ?>
                                        </div>
                                        
                                    </div>
                                    <div class="dropdown mystudentcardoperations no-arrow d-flex ">
                                        <!-- <a class="dropdown-toggle" href="#" style="display: flex;flex-direction: column;align-items: center;" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-download fa-2x fa-fw text-gray-400"></i>
                                            <p class="m-0 mt-1 text-xs" style="color:#434CE6">Resume</p>
                                        </a> -->
                                        <!-- <a href="#" style="background-color: #d8efe2!important;border: none;" class="btn btn-success btn-icon-split ml-sm-0">
                                            <span class="text" style="color: #39b16d;font-weight: 400;"><i class="fas fa-check" style="margin-right: 5px;"></i>Accept</span>
                                        </a>
                                        <a href="#"  style="background-color: #fee5dd!important;border: none;" class="btn btn-danger mx-2 btn-icon-split">
                                            <span class="text" style="color:#e55d34"><i class="fas fa-trash" style="margin-right: 5px;"></i>Reject</span>
                                        </a>    
                                        <a href="#"  style="background-color: #F0E5F8!important;border: none;" class="btn btn-danger btn-icon-split">
                                            <span class="text" style="color:#973cdd"><i class="fas fa-file-download" style="margin-right: 5px;"></i>Resume</span>
                                        </a>     -->
                                                                            
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="row">
                                    <div class="col-lg-6 col-xl-6">
                                        <div class="mb-3">
                                            <p class="m-0 font-weight-light text-xs" style="color:#8c90ae;">HR's Name</p>
                                            <p style="color: #302a68;"><?php echo $query_res['hr_name']; ?></p>
                                        </div>
                                        <div class="mb-3">
                                            <p class="m-0 font-weight-light text-xs" style="color:#8c90ae;">Phone</p>
                                            <p style="color: #302a68;"><?php echo $query_res['phone']; ?></p>
                                        </div>
                                        <div class="mb-3">
                                            <p class="m-0 font-weight-light text-xs" style="color:#8c90ae;">Email</p>
                                            <p style="color: #302a68;"><?php echo $query_res['email']; ?></p>
                                        </div>
                                        <div class="mb-3">
                                            <p class="m-0 font-weight-light text-xs" style="color:#8c90ae;">Locations</p>
                                            <p style="color: #302a68;"><?php echo $query_res['job_location']; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-6">
                                        <div class="mb-3">
                                            <p class="m-0 font-weight-light text-xs" style="color:#8c90ae;">Maximum CTC</p>
                                            <p style="color: #302a68;"><span style="font-size:14px;">₹ </span><?php echo $query_res['maximum_ctc']; ?></p>
                                        </div>
                                        <div class="mb-3">
                                            <p class="m-0 font-weight-light text-xs" style="color:#8c90ae;">Average CTC</p>
                                            <p style="color: #302a68;"><span style="font-size:14px;">₹ </span><?php echo $query_res['average_ctc']; ?></p>
                                        </div>
                                        <div class="mb-3">
                                            <p class="m-0 font-weight-light text-xs" style="color:#8c90ae;">Position Count</p>
                                            <p style="color: #302a68;"><?php echo $query_res['position_count']; ?></p>
                                        </div>

                                    </div>

                                    
                                </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Pie Chart -->
                        
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-xs-12 py-1 py-md-2 py-lg-3">
                            <div class="card " style="padding: 20px;background-color: #fff;">
                                <div class="col mr-2 d-flex h-100 p-0" style="flex-direction: column;justify-content:end!important;">
                                    <p class="m-0 font-weight-medium mb-2" style="color: #302a68;">Job Brief</p>
                                    <div class="text mycardsubtitle font-weight-light mb-1" style="font-size:14px;line-height:1.6;color:#8c90ae"><?php echo $query_res['job_brief']; ?></div>                                          
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-xs-12 py-1 py-md-2 py-lg-3">
                            <div class="card " style="padding: 20px;background-color: #fff;">
                                <div class="col mr-2 d-flex h-100 p-0" style="flex-direction: column;justify-content:end!important;">
                                    <p class="m-0 font-weight-medium mb-2" style="color: #302a68;">Selection Process</p>
                                    <div class="text mycardsubtitle font-weight-light mb-1" style="font-size:14px;line-height:1.6;color:#8c90ae"><?php echo $query_res['selection_brief']; ?></div>                                          
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

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="./assets/vendor/jquery/jquery.min.js"></script>
    <script src="./assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="./assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="./assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="./assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="./assets/js/demo/chart-area-demo.js"></script>
    <script src="./assets/js/demo/chart-pie-demo.js"></script>

</body>

</html>