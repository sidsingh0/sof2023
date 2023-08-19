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

    <title>Admin - Dashboard</title>

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
                <div class="container-fluid mt-md-4 ">

                    <!-- Content Row -->
                    <div class="row">



                        <!-- Donut Chart -->
                        <div class="col-xl-4 col-lg-5 slide-in-blurred-bottom">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3">
                                    <p class="m-0 font-weight-medium" style="color:#302a68;">Category Wise Company</p>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4">
                                        <canvas id="myPieChart1"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 slide-in-blurred-bottom">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3">
                                    <p class="m-0 font-weight-medium" style="color:#302a68;">Students Placed</p>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4">
                                        
                                        <canvas id="myPieChart3"></canvas>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 slide-in-blurred-bottom">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3">
                                    <p class="m-0 font-weight-medium" style="color:#302a68;">Category Wise Students</p>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4">
                                        <canvas id="myPieChart2"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-xl-8 col-lg-7 slide-in-blurred-bottom" style="animation-delay: 0.3s;">

                            <!-- Area Chart -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <p class="m-0 font-weight-medium" style="color:#302a68;">Top 5 highest CTC offering companies</p>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myBarChart1"></canvas>
                                    </div>
                                </div>
                            </div>

                        </div>





                        <?php 
                            $prog = "select count(*) as count from allotments where status='placed'";
                            $total = "select count(*) as count from students where attended=1";

                            $r1 = mysqli_query($conn, $prog)->fetch_assoc()["count"];
                            $r2 = mysqli_query($conn, $total)->fetch_assoc()["count"];

                            $r3 = ($r1/$r2) * 100;

                            $r3 = number_format((float)$r3, 2, '.', '');
                        ?>

                        <div class="col-xl-4 col-lg-4 slide-in-blurred-bottom" style="animation-delay: 0.3s;">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3">
                                    <p class="m-0 font-weight-medium" style="color:#302a68;">Average CTC being offered</p>
                                </div>
                                <!-- Card Body -->
                                <?php 
                                    $avgsalary = "select avg(average_ctc) as count from companies";
                                    $avgsalary_res = intval(mysqli_query($conn, $avgsalary)->fetch_assoc()["count"]);
                                ?>
                                <div class="card-body">
                                    <div class="p-0 m-0">
                                        <h3 class="m-0 font-weight-medium" style="color: #302a68;"><span style="font-size:20px;">₹ </span><?php echo $avgsalary_res; ?><span style="font-size:16px"></span></h3>
                                    </div>
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
    <script src="assets/js/demo/chart-bar-demo.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>

    <script>
        $(document).ready(function() {
            showGraphBar();
            showGraphPie();
            showGraphPie2();
            showGraphProgress();
        });

        function showGraphBar() {
            {
                $.post("charts/bar.php",
                    function(data) {
                        var name = [];
                        var ctc = [];

                        for (var i in data) {
                            name.push(data[i].company_name);
                            ctc.push(data[i].maximum_ctc);
                        }

                        var graphTarget = $("#myBarChart1");

                        var barGraph = new Chart(graphTarget, {
                                type: 'bar',
                                data: {
                                    labels: name,
                                    datasets: [{
                                        label: 'CTC',
                                        backgroundColor: "#4e73df",
                                        hoverBackgroundColor: "#2e59d9",
                                        borderColor: "#4e73df",
                                        data: ctc
                                    }]
                                },
                                options: {
                                    maintainAspectRatio: false,
                                    legend: {
                                        display: true
                                    },
                                    tooltips: {
                                        titleMarginBottom: 10,
                                        titleFontColor: '#6e707e',
                                        titleFontSize: 14,
                                        backgroundColor: "rgb(255,255,255)",
                                        bodyFontColor: "#858796",
                                        borderColor: '#dddfeb',
                                        borderWidth: 1,
                                        xPadding: 15,
                                        yPadding: 15,
                                        displayColors: false,
                                        caretPadding: 10,
                                        callbacks: {
                                            label: function(tooltipItem, chart) {
                                                var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                                                return datasetLabel + ': Rs. ' + number_format(tooltipItem.yLabel);
                                            }
                                        }
                                    },
                                }
                            });
                        }
                    )
                }
            };

        function showGraphPie(){
            {
                $.post("charts/pie.php",
                    function(data) {
                        var category = [];
                        var count = [];

                        for (var i in data) {
                            category.push(data[i].result);
                            count.push(data[i].count);
                        }
                        var graphTarget = $("#myPieChart1");
                        var colors = [];
                        for(let i=0;i<category.length;i++){
                            colors.push('#'+Math.floor(Math.random()*16777215).toString(16));
                        }

                        var barGraph = new Chart(graphTarget, {
                                type: 'pie',
                                data: {
                                    labels: category,
                                    datasets: [{
                                        label: 'Count',
                                        backgroundColor: colors,
                                        hoverBorderColor: "rgba(234, 236, 244, 1)",
                                        data: count
                                    }]
                                },
                                options: {
                                        maintainAspectRatio: false,
                                        tooltips: {
                                        backgroundColor: "rgb(255,255,255)",
                                        bodyFontColor: "#858796",
                                        borderColor: '#dddfeb',
                                        borderWidth: 1,
                                        xPadding: 15,
                                        yPadding: 15,
                                        displayColors: false,
                                        caretPadding: 10,
                                        },
                                        legend: {
                                        display: false
                                        },
                                      
                                    },
                            });
                        }
                    )
                
            }
        }

        function showGraphPie2(){
            {
                $.post("charts/pie1.php",
                    function(data) {
                        var category = [];
                        var count = [];

                        for (var i in data) {
                            category.push(data[i].category);
                            count.push(data[i].count);
                        }
                        var graphTarget = $("#myPieChart2");
                        var colors = [];
                        for(let i=0;i<category.length;i++){
                            colors.push('#'+Math.floor(Math.random()*16777215).toString(16));
                        }

                        var barGraph = new Chart(graphTarget, {
                                type: 'pie',
                                data: {
                                    labels: category,
                                    datasets: [{
                                        label: 'Count',
                                        backgroundColor: colors,
                                        hoverBorderColor: "rgba(234, 236, 244, 1)",
                                        data: count
                                    }]
                                },
                                options: {
                                        maintainAspectRatio: false,
                                        tooltips: {
                                        backgroundColor: "rgb(255,255,255)",
                                        bodyFontColor: "#858796",
                                        borderColor: '#dddfeb',
                                        borderWidth: 1,
                                        xPadding: 15,
                                        yPadding: 15,
                                        displayColors: false,
                                        caretPadding: 10,
                                        },
                                        legend: {
                                        display: false
                                        },
                                      
                                    },
                            });
                        }
                    )
                
            }
        }

        
        function showGraphProgress(){
            var graphTarget = $("#myPieChart3");
            let percent = '<?php echo $r3 ?>';
            var barGraph = new Chart(graphTarget, {
                    type: 'doughnut',
                    data: {
                        datasets: [{
                        label: 'Percent Students Placed',
                        percent: percent,
                        backgroundColor: ['#00ff00']
                        }]
                    },
                    plugins: [{
                        beforeInit: (chart) => {
                            const dataset = chart.data.datasets[0];
                            chart.data.labels = [dataset.label];
                            dataset.data = [dataset.percent, 100 - dataset.percent];
                        }
                        },
                        {
                        beforeDraw: (chart) => {
                            var width = chart.chart.width,
                            height = chart.chart.height,
                            ctx = chart.chart.ctx;
                            ctx.restore();
                            var fontSize = (height / 150).toFixed(2);
                            ctx.font = fontSize + "em sans-serif";
                            ctx.fillStyle = "#9b9b9b";
                            ctx.textBaseline = "middle";
                            var text = chart.data.datasets[0].percent + "%",
                            textX = Math.round((width - ctx.measureText(text).width) / 2),
                            textY = height / 2;
                            ctx.fillText(text, textX, textY);
                            ctx.save();
                        }
                        }
                    ],
                    options: {
                        maintainAspectRatio: false,
                        cutoutPercentage: 65,
                        rotation: Math.PI / 2,
                        legend: {
                        display: false,
                        },
                        tooltips: {
                        filter: tooltipItem => tooltipItem.index == 0
                        }
                    }
                });
        }

        
        

            
    </script>

</body>

</html>