<?php
include("./partial.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - All Companies</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php include("./sidebar.php"); ?>
        <?php
        $q1 = "select count(*) as count from students";
        $q2 = "select count(*) as count from companies";
        $q3 = "select max(maximum_ctc) as count from companies";
        $q4 = "select avg(average_ctc) as count from companies";

        $c1 = mysqli_query($conn, $q1)->fetch_assoc()["count"];
        $c2 = mysqli_query($conn, $q2)->fetch_assoc()["count"];
        $c3 = intval(mysqli_query($conn, $q3)->fetch_assoc()["count"]);
        $c4 = intval(mysqli_query($conn, $q4)->fetch_assoc()["count"]);
        ?>

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
                <div class="container-fluid mt-md-4 slide-in-blurred-bottom">

                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-xs-12 py-1 py-md-2 py-lg-3">
                            <div class="card " style="padding: 20px;background-color: #fff;">
                                <div class="col mr-2 d-flex h-100" style="flex-direction: column;justify-content:end!important;">
                                    <div class="text-xs mycardsubtitle font-weight-light text-uppercase mb-1" style="color:#8c90ae">Total Companies</div>
                                    <h3 class="m-0 font-weight-medium" style="color: #302a68;"><?php echo $c2; ?><span style="font-size:16px"></span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-xs-12 py-1 py-md-2 py-lg-3">
                            <div class="card " style="padding: 20px;background-color: #fff;">
                                <div class="col mr-2 d-flex h-100" style="flex-direction: column;justify-content:end!important;">
                                    <div class="text-xs mycardsubtitle font-weight-light text-uppercase mb-1" style="color:#8c90ae">Total Candidates</div>
                                    <h3 class="m-0 font-weight-medium" style="color: #302a68;"><?php echo $c1; ?><span style="font-size:16px"></span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-xs-12 py-1 py-md-2 py-lg-3">
                            <div class="card " style="padding: 20px;background-color: #fff;">
                                <div class="col mr-2 d-flex h-100" style="flex-direction: column;justify-content:end!important;">
                                    <div class="text-xs mycardsubtitle font-weight-light text-uppercase mb-1" style="color:#8c90ae">Maximum CTC</div>
                                    <h3 class="m-0 font-weight-medium" style="color: #302a68;"><span style="font-size:20px;">₹ </span><?php echo $c3; ?><span style="font-size:16px"></span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-xs-12 py-1 py-md-2 py-lg-3">
                            <div class="card " style="padding: 20px;background-color: #fff;">
                                <div class="col mr-2 d-flex h-100" style="flex-direction: column;justify-content:end!important;">
                                    <div class="text-xs mycardsubtitle font-weight-light text-uppercase mb-1" style="color:#8c90ae">Average CTC</div>
                                    <h3 class="m-0 font-weight-medium" style="color: #302a68;"><span style="font-size:20px;">₹ </span><?php echo $c4; ?><span style="font-size:16px"></span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header py-3 d-flex" style="border-bottom:1.5px solid #eadbf6;align-items:center;justify-content:space-between ">
                            <div class="">
                                <h3 class="m-0 font-weight-medium" style="color:#302a68;">Attending Companies</h3>
                                <p class="m-0 font-weight-light" style="color:#8c90ae;">Click on the company name to learn more details.</p>
                            </div>
                            <div class="d-flex" style="flex-direction:column;align-items:center;">
                                <p style="color:#9A53D2;font-size:30px;margin:0;cursor:pointer;" data-toggle="modal" data-target="#exampleModalLong"><i class="far fa-question-circle"></i></p>
                                <p class="text-xs m-0" style="color:#8c90ae;translate:0 -5px;">Companies</p>
                            </div>
                            
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Sr</th>
                                            <th>Company</th>
                                            <th>HR Name</th>
                                            <th>Phone</th>
                                            <th>Field</th>
                                            <th>Max CTC</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $q = "select * from companies;";
                                        $r = mysqli_query($conn, $q);
                                        $i = 1;



                                        while ($res = $r->fetch_assoc()) {

                                            echo "<tr>
                                                    <td>" . $i . "</td>
                                                    <td><a style='color:#9A53D2;' href='viewcompany.php?company_id=" . $res['id'] . "'>" . $res['company_name'] . "</a></td>
                                                    <td>" . $res['hr_name'] . "</td>
                                                    <td>" . $res['phone'] . "</td>
                                                    <td>" . substr($res['categories'], 0, -1). "</td>
                                                    <td>" . $res['maximum_ctc'] . "</td>
                                                </tr>";
                                            $i++;
                                        }


                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            <!-- Modal -->
            <div class="modal fade bd-example-modal-lg" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="">
                                <h3 class="m-0 font-weight-medium" style="color:#302a68;">Companies</h3>
                                <p class="m-0 font-weight-light" style="color:#8c90ae;">Below is a list of companies according to their interested fields.</p>
                            </div>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <?php
                                $tips_list=["Computer Science","Information Technology","Electronics and Telecommunications","Electrical","Mechanical","Civil","Diploma","Commerce","Pharma","BSC Computer Science","BSC Information Technology","12th HSC"];
                                foreach($tips_list as $item){
                                    $escaped_item = mysqli_real_escape_string($conn, strtolower($item));
                                    $tips_company = "SELECT * FROM companies WHERE lower(categories) LIKE '%" . $escaped_item . "%'";
                                    $tips_company_res=mysqli_query($conn,$tips_company);
                                    if (mysqli_num_rows($tips_company_res)>0){
                                        echo '
                                            <div class="mb-3" style="display:grid;grid-template-columns:auto 1fr;gap:7px;">
                                                <p style="color:#302a68;margin:0;padding:0.375rem 0.75rem;">'.$item.'</p>
                                            <div class="d-flex" style="gap:7px;flex-wrap:wrap">
                                        ';
                                        while ($tip = $tips_company_res->fetch_assoc()) {
                                            echo '<p class="btn" style="background-color:#F5EEFB;margin:0;color:#9A53D2;">'.$tip["company_name"].'</p>';
                                        }
                                        echo '
                                                </div>
                                            </div>
                                        ';
                                    }                                    
                                    
                                }

                            ?>
                            <!-- <div class="mb-3" style="display:grid;grid-template-columns:auto 1fr;gap:7px;">
                                <p style="color:#302a68;margin:0;padding:0.375rem 0.75rem;">Electrical Engineering:</p>
                                <div class="d-flex" style="gap:7px;flex-wrap:wrap">
                                    <p class="btn" style="background-color:#F5EEFB;margin:0;color:#9A53D2;">Wipro</p>
                                    <p class="btn" style="background-color:#F5EEFB;margin:0;color:#9A53D2;">TCS</p>
                                    <p class="btn" style="background-color:#F5EEFB;margin:0;color:#9A53D2;">Infosys</p>
                                    <p class="btn" style="background-color:#F5EEFB;margin:0;color:#9A53D2;">Tech Mahindra</p>
                                    <p class="btn" style="background-color:#F5EEFB;margin:0;color:#9A53D2;">Tech Mahindra</p>
                                    <p class="btn" style="background-color:#F5EEFB;margin:0;color:#9A53D2;">Tech Mahindra</p>
                                </div>
                            </div>
                            <div class="" style="display:grid;grid-template-columns:auto 1fr;gap:7px;">
                                <p style="color:#302a68;margin:0;padding:0.375rem 0.75rem;">Electrical Engineering:</p>
                                <div class="d-flex" style="gap:7px;flex-wrap:wrap">
                                    <p class="btn" style="background-color:#F5EEFB;margin:0;color:#9A53D2;">Wipro</p>
                                    <p class="btn" style="background-color:#F5EEFB;margin:0;color:#9A53D2;">TCS</p>
                                    <p class="btn" style="background-color:#F5EEFB;margin:0;color:#9A53D2;">Infosys</p>
                                    <p class="btn" style="background-color:#F5EEFB;margin:0;color:#9A53D2;">Tech Mahindra</p>
                                    <p class="btn" style="background-color:#F5EEFB;margin:0;color:#9A53D2;">Tech Mahindra</p>
                                    <p class="btn" style="background-color:#F5EEFB;margin:0;color:#9A53D2;">Tech Mahindra</p>
                                </div>
                            </div> -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn" style="background-color:#fee5dd;color:#e55d34;" data-dismiss="modal">Close</button>
                            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <footer class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Siddharth Ovalekar Foundation 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
            <div class="errorbox" id="errorbox"></div>
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/js/demo/chart-area-demo.js"></script>
    <script src="assets/js/demo/chart-pie-demo.js"></script>

    <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <script>
        $("#dataTable").DataTable({
            responsive: true
        });

    </script>

</body>

</html>