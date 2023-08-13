<?php
include("../connect.php");
$url = "/sof_new/sof2023";
$redirectUrl = $url . "/admin/login.php";

//   if(!(isset($_COOKIE["username"]))){
//     header("Location: " . $redirectUrl);
//     exit();
//   }

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - All Students</title>

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
                <div class="container-fluid mt-md-4">

                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-xs-12 py-1 py-md-2 py-lg-3">
                            <div class="card " style="padding: 20px;background-color: #fff;">
                                <div class="col mr-2 d-flex h-100" style="flex-direction: column;justify-content:end!important;">
                                    <div class="text-xs mycardsubtitle font-weight-light text-uppercase mb-1" style="color:#8c90ae">Total </div>
                                    <h3 class="m-0 font-weight-medium" style="color: #302a68;"><?php echo $c1; ?><span style="font-size:16px"></span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-xs-12 py-1 py-md-2 py-lg-3">
                            <div class="card " style="padding: 20px;background-color: #fff;">
                                <div class="col mr-2 d-flex h-100" style="flex-direction: column;justify-content:end!important;">
                                    <div class="text-xs mycardsubtitle font-weight-light text-uppercase mb-1" style="color:#8c90ae">Attending </div>
                                    <h3 class="m-0 font-weight-medium" style="color: #302a68;"><?php echo $c2; ?><span style="font-size:16px"></span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-xs-12 py-1 py-md-2 py-lg-3">
                            <div class="card " style="padding: 20px;background-color: #fff;">
                                <div class="col mr-2 d-flex h-100" style="flex-direction: column;justify-content:end!important;">
                                    <div class="text-xs mycardsubtitle font-weight-light text-uppercase mb-1" style="color:#8c90ae">Top </div>
                                    <h3 class="m-0 font-weight-medium" style="color: #302a68;">91<span style="font-size:16px"></span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-xs-12 py-1 py-md-2 py-lg-3">
                            <div class="card " style="padding: 20px;background-color: #fff;">
                                <div class="col mr-2 d-flex h-100" style="flex-direction: column;justify-content:end!important;">
                                    <div class="text-xs mycardsubtitle font-weight-light text-uppercase mb-1" style="color:#8c90ae">Pending </div>
                                    <h3 class="m-0 font-weight-medium" style="color: #302a68;">50<span style="font-size:16px"></span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header py-3" style="border-bottom:1.5px solid #eadbf6; ">
                            <h3 class="m-0 font-weight-medium" style="color:#302a68;">Allot Companies</h3>
                            <p class="m-0 font-weight-light" style="color:#8c90ae;">All the attendees who have not been alloted companies and rejected candidates are listed below.</p>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Sr</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Field</th>
                                            <th>Company</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $q = "select * from students";
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

                                            $company_query = "select * from companies";
                                            $company_query_res = mysqli_query($conn, $company_query);
                                            $companylist = "";
                                            while ($company = $company_query_res->fetch_assoc()) {
                                                $companylist .= "<option value='" . $company['id'] . "'>" . $company['company_name'] . "</option>";
                                            }

                                            echo "<tr>
                                                    <td>" . $i . "</td>
                                                    <td>" . $res['first_name'] . " " . $res['last_name'] . "</td>
                                                    <td>" . $res['phone'] . "</td>
                                                    <td>" . $res['field'] . "</td>
                                                    <td style='display:flex;gap:5px;'>
                                                    <select onchange='btneanbler(this," . $res['phone'] . ")' id='select-state' style='width:80%' placeholder='Company'>
                                                        <option value=''></option>
                                                        $companylist
                                                    </select>
                                                    <button id=" . $res['phone'] . " onclick='allot(this)' style='border:none;height: 35px;color: #39b16d;background-color:#d8efe2;border-radius:4px;padding:6px 12px;' disabled><i class='fas fa-chevron-right'></i></button>
                                                    </td>
                                                  </td>
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

    <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <script>
        $("#dataTable").DataTable({
            responsive: true
        });
        $(document).ready(function() {
            $('select').selectize({
                sortField: 'text'
            });
        });

        function btneanbler(element, btnid) {
            if (element.value != '') {
                let userbutton = document.getElementById(btnid)
                userbutton.disabled = false;
                userbutton.setAttribute("value", element.value)
            }
        }

        function allot(element) {
            $(element).css("backgroundColor","#fff");
            $.ajax({
                type: "POST",
                url: "allotment.php",
                data: {
                    "company_id": element.value,
                    "student_id": element.id,
                },
                success: function(data) {
                    $(element).attr("status", data);
                    if (data == 1) {
                        $(element).css("backgroundColor", "#d8efe2");
                        $(element).html("<span class='text' style='color: #39b16d;font-weight: 400;'><i class='fas fa-check' style='margin-right: 5px;'></i>Present</span>")
                    } else {
                        $(element).css("backgroundColor", "#fee5dd");
                        $(element).html("<span class='text' style='color: #e55d34;font-weight: 400;'><i class='fas fa-times' style='margin-right: 5px;'></i>Absent</span>")
                    }
                }
            });

        }

        function test(element) {
            let attended = $(element).attr("status");
            let phone = element.value;
            $.ajax({
                type: "POST",
                url: "attendance.php",
                data: {
                    "attended": attended,
                    "phone": phone
                },
                success: function(data) {
                    $(element).attr("status", data);
                    if (data == 1) {
                        $(element).css("backgroundColor", "#d8efe2");
                        $(element).html("<span class='text' style='color: #39b16d;font-weight: 400;'><i class='fas fa-check' style='margin-right: 5px;'></i>Present</span>")
                    } else {
                        $(element).css("backgroundColor", "#fee5dd");
                        $(element).html("<span class='text' style='color: #e55d34;font-weight: 400;'><i class='fas fa-times' style='margin-right: 5px;'></i>Absent</span>")
                    }
                }
            });
        }
    </script>

</body>

</html>