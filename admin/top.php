<?php 
    include("partial.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Top Students</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

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
                <div class="container-fluid mt-md-4 slide-in-blurred-bottom">
                    <div class="card mb-4">
                        <div class="card-header py-3" style="border:1.5px solid #eadbf6; ">
                            <h3 class="m-0 font-weight-medium" style="color:#302a68;">Edit Prime Candidates</h3>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Sr</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Field</th>
                                            <th>Prime?</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $q= "select * from students";
                                        $r= mysqli_query($conn, $q);
                                        $i= 1;

                                        while($res=$r->fetch_assoc()){
                                          $btn = "";
                                          if($res["top"] == 1){
                                              $btn = "<button status='".$res['top']."' value='".$res['phone']."' onclick='test(this)' style='background-color: #F0E5F8!important;border: none;' class='btn btn-success btn-icon-split ml-sm-0 w-100'>
                                              <span class='text' style='color: #973cdd;font-weight: 400;'><i class='fas fa-star' style='margin-right: 5px;'></i>Prime</span>
                                          
                                              </button>";


                                          }
                                          else{
                                            $btn = "<button status='".$res['top']."' value='".$res['phone']."' onclick='test(this)' style='background-color: #fee5dd!important;border: none;' class='btn btn-success btn-icon-split ml-sm-0 w-100'>
                                            <span class='text' style='color: #e55d34;font-weight: 400;'><i class='fas fa-star' style='margin-right: 5px;'></i>Regular</span>
                                        </button>";
                                          }
                                  
                                            echo "<tr>
                                                    <td>".$i."</td>
                                                    <td>".$res['first_name']." ".$res['last_name']."</td>
                                                    <td>".$res['email']."</td>
                                                    <td>".$res['phone']."</td>
                                                    <td>".$res['field']."</td>
                                                    <td>".$btn."
                                                    
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

    <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <script>
      $("#dataTable").DataTable({
        responsive: true
      });

      function test(element){
        let top = $(element).attr("status");
        let phone = element.value;
        $.ajax({
          type: "POST",
          url: "changeprime.php",
          data: {"top": top, "phone":phone},
          success: function(data){
              $(element).attr("status", data);
              if(data == 1){
                $(element).css("backgroundColor", "#F0E5F8");
                $(element).html("<span class='text' style='color: #973cdd;font-weight: 400;'><i class='fas fa-star' style='margin-right: 5px;'></i>Prime</span>")
              }else{
                $(element).css("backgroundColor", "#fee5dd");
                $(element).html("<span class='text' style='color: #e55d34;font-weight: 400;'><i class='fas fa-star' style='margin-right: 5px;'></i>Regular</span>")
              }  
          }
        });
      }
    </script>

</body>

</html>