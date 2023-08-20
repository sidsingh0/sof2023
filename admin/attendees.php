<?php
include("../connect.php");
$url = "/sof2023";
$redirectUrl = $url . "/admin/login.php";

  if(!(isset($_COOKIE["username"]))){
    header("Location: " . $redirectUrl);
    exit();
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

    <title>Admin - Allot Candidates</title>

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
        $q2 = "select count(*) as count from students where attended = 1";
        $q3 = "select count(*) as count from students where top = 1";
        $q4 = "select count(*) as count from allotments where status = 'pending'";

        $c1 = mysqli_query($conn, $q1)->fetch_assoc()["count"];
        $c2 = mysqli_query($conn, $q2)->fetch_assoc()["count"];
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

                    <div class="card mb-4">
                        <div class="card-header py-3 d-flex" style="border-bottom:1.5px solid #eadbf6;align-items:center;justify-content:space-between ">
                            <div class="">
                                <h3 class="m-0 font-weight-medium" style="color:#302a68;">Allot Companies</h3>
                                <p class="m-0 font-weight-light" style="color:#8c90ae;">All the attendees who have not been alloted companies and rejected candidates are listed below.</p>
                            </div>
                            <div class="d-flex" style="flex-direction:column;align-items:center;">
                                <p style="color:#9A53D2;font-size:30px;margin:0;cursor:pointer;" data-toggle="modal" data-target="#exampleModalLong"><i class="far fa-question-circle rotate-center" style="animation-delay: 0.5s;"></i></p>
                                <p class="text-xs m-0" style="color:#8c90ae;translate:0 -5px;">Companies</p>
                            </div>
                            
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Sr</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Aptitude</th>
                                            <th>Field</th>
                                            <th>Company</th>
                                            <th style="display:none;">Category</th>
                                            <th style="display:none;">Prime</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $q = "select * from students where attended=1 and phone not in (select student_id from allotments) OR phone in (SELECT e.student_id from allotments e WHERE e.timestamp = (SELECT MAX(timestamp) FROM allotments WHERE student_id = e.student_id) and status='not placed');";
                                        $r = mysqli_query($conn, $q);
                                        $i = 1;



                                        while ($res = $r->fetch_assoc()) {
                                            $btn = "";
                                            if ($res["attended"] == 1) {
                                                $btn = "<button status='" . $res['attended'] . "' value='" . $res['phone'] . "' onclick='test(this)' style='background-color: #d8efe2!important;border: none;' class='btn btn-success btn-icon-split ml-sm-0 w-100'>
                                              <span class='text' style='color: #39b16d;font-weight: 400;'><i class='fas fa-check' style='margin-right: 5px;'></i>Present</span>
                                          
                                              </button>";
                                            } else {
                                                $btn = "<button status='" . $res['attended'] . "' value='" . $res['phone'] . "' onclick='test(this)' style='background-color: #fee5dd!important;border: none;' class='btn btn-success btn-icon-split ml-sm-0 w-100'>
                                            <span class='text' style='color: #e55d34;font-weight: 400;'><i class='fas fa-times' style='margin-right: 5px;'></i>Absent</span>
                                        </button>";
                                            }
                                            $bgbg='#fff';
                                            $prime="404";
                                            if ($res["top"] == 0) {
                                                $bgbg = "#fff";
                                            } else {
                                                $bgbg = "#F0E5F8!important";
                                                $prime="prime";
                                            }
                                            $company_query = "select * from companies";
                                            $company_query_res = mysqli_query($conn, $company_query);
                                            $companylist = "";
                                            while ($company = $company_query_res->fetch_assoc()) {
                                                $companylist .= "<option value='" . $company['id'] . "'>" . $company['company_name'] . "</option>";
                                            }

                                            echo "<tr style='background-color:$bgbg'>
                                                    <td>" . $i . "</td>
                                                    <td>" . $res['first_name'] . " " . $res['last_name'] . "</td>
                                                    <td>" . $res['phone'] . "</td>
                                                    <td>" . $res['apti_marks'] . "</td>
                                                    <td>" . $res['field'] . "</td>
                                                    <td style='display:flex;gap:5px;'>
                                                    
                                                    <select class='select-state-h' onchange='btneanbler(this," . $res['phone'] . ")' style='width:80%' placeholder='Company'>
                                                        <option value=''></option>
                                                        $companylist
                                                    </select>
                                                    <button id=" . $res['phone'] . " onclick='allot(this)' style='border:none;height: 33px;color: #39b16d;background-color:#d8efe2;border-radius:4px;padding:6px 12px;' disabled><i class='fas fa-chevron-right'></i></button>
                                                    </td>
                                                    <td style='display:none'>".$res['category']."</td>
                                                    <td style='display:none'>".$prime."</td>
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
                                            <div class="mb-4" style="display:grid;grid-template-columns:auto 1fr;gap:7px;">
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
        $(document).ready(function() {
            $('.select-state-h').selectize({
                sortField: 'text'
            });
        });

        function btneanbler(element, btnid) {
            if (element.value != '') {
                let userbutton = document.getElementById(btnid)
                userbutton.disabled = false;
                $(userbutton).animate({
                    backgroundColor: "#39b16d",
                    color: "#fff"
                }, 500);
                userbutton.setAttribute("value", element.value)

            }
        }

        function allot(element) {

            $.ajax({
                type: "POST",
                url: "allotment.php",
                data: {
                    "company_id": element.value,
                    "student_id": element.id,
                },
                success: function(data) {
                    data = JSON.parse(data)
                    if (data.status == 1) {
                        location.reload();
                    } else {
                        document.getElementById("errorbox").innerHTML = `
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Something went wrong!</strong> ` + data.error + `
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>`;
                    }
                }
            });

        }

    </script>

</body>

</html>