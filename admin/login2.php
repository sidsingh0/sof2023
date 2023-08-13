<?php
    session_start();
    $message = "";
    include("../connect.php");

    if(isset($_POST["email"])){
        $email = $_POST["email"];
        $password = $_POST["password"];

        $query = "select * from user where email='$email'";
        $res = mysqli_query($conn, $query);

        if(mysqli_num_rows($res) < 1){
            $message = "Incorrect Email";
        }else{
            $res = $res->fetch_assoc();
            if($res["password"] == $password){
                setcookie("username", '$email');
                header("Location: index.php");
            }else{
                $message = "Incorrect Password";
            }
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

    <title>Admin Login</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        .selectize-input{
            padding: 15px!important;
            font-size: 14px;
            border:2px solid hsl(231 39% 93% / 1);
            border-radius: 5px;
        }
        input{
            padding: 15px!important;
            font-size: 14px;
            border:2px solid hsl(231 39% 93% / 1);
            border-radius: 5px;
        }
        .selectize-input.focus{
            border: 2px solid hsl(274 64% 48% / 1)!important;
            outline: 0!important;
            box-shadow: none!important;
        }
        .selectize-input:focus{
            border: 2px solid hsl(274 64% 48% / 1)!important;
            outline: 0!important;
            box-shadow: none!important;
        }
        #password:focus{
            border: 2px solid hsl(274 64% 48% / 1)!important;
            outline: 0!important;
            box-shadow: none!important;
        }
        .btn{
            padding: 15px!important;
            font-size: 14px;
            border-radius: 5px;
            transition: 0.3s;
        }
        .btn:hover{
            background-color:hsl(274 64% 48% / 1)!important;
            color: #fff !important;
        }
        .selectize-dropdown [data-selectable].option {
            opacity: 1;
            padding: 10px 15px;
        }
        .selectize-input .items .not-full .has-options>input{
            width: 100% !important;
        }
    </style>
</head>

<body style="background: url('assets/img/bg.png');background-position: center;background-size: cover;">
    
    <div style="height:100vh;width:100vw;position: relative;">
        <div style="height:100vh;width:30%;position: absolute;top: 0;left: 0;background-color: #fff;display: flex;flex-direction: column;padding:60px;justify-content: center;">
                <h1 style="color:#302a68;font-weight: 500;">Sign In</h1>
                <form class="mt-4" action="login.php" method="POST">
                    <div class="mb-2">
                        <label for="company" id="companylabel" style="margin-bottom: 5px;font-size: 14px;color:#8c90ae;">Your Company</label>
                        <select id="company" name="email" style="padding: 10px;" required>
                            <option value="">Company</option>
                            <?php
                                $select_query="select * from companies";
                                $select_query_res=mysqli_query($conn,$select_query);
                                if (mysqli_num_rows($select_query_res) > 0) {
                                    while ($row = $select_query_res->fetch_assoc()) {
                                        echo '<option value="' . $row["id"] . '">' . $row["company_name"] . '</option>';
                                    }
                                }
                            ?>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="password" id="passwordlabel" style="margin-bottom: 5px;font-size: 14px;color:#8c90ae;">Password</label>
                        <input class="w-100" type="text" id="password" name="password" required></input>
                    </div>
                    <button type="submit" class="btn w-100" style="background-color: hsl(272 74% 93% / 1);color:hsl(274 64% 48% / 1);font-size: 12px;">SIGN IN</button>
                </form>
                <div class="mb-5"></div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>
    <script>
        $(document).ready(function () {
      $('select').selectize({
          sortField: 'text'
      });
  });
    </script>
</body>

</html>