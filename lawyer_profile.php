<?php
session_start();

if (!isset($_SESSION['lawyer'])) {
    echo "You are logged out!";
    header('location:index.php');
}

?>
<!DOCTYPE html PUBLIC "-//W3C//Dp XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/Dp/xhtml1-transitional.dp">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lawyer Profile</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link id="pagestyle" rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/more_nav.css">
    <link rel="shortcut icon" type="image/jpg" href="./images/logo.jpeg"/>


    <link rel="stylesheet" href="navigation/styles.css">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="navigation/script.js"></script>

    <script type="text/javascript">
        function changesheet(sheet) {
            document.getElementById('pagestyle').setAttribute('href', sheet);
        }
    </script>

    <style>
        .profile body {
            margin-top: 20px;
            color: #1a202c;
            text-align: left;
            background-color: #e2e8f0;
        }

        .profile .main-body {
            padding: 15px;
        }

        .profile .card {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
        }

        .profile .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid rgba(0, 0, 0, .125);
            border-radius: .25rem;
        }

        .profile .card-body {
            flex: 1 1 auto;
            min-height: 1px;
            padding: 1rem;
        }

        .profile .gutters-sm {
            margin-right: -8px;
            margin-left: -8px;
        }

        .profile .gutters-sm>.col,
        .profile .gutters-sm>[class*=col-] {
            padding-right: 8px;
            padding-left: 8px;
        }

        .profile .mb-3,
        .profile .my-3 {
            margin-bottom: 1rem !important;
        }

        .profile .bg-gray-300 {
            background-color: #e2e8f0;
        }

        .profile .h-100 {
            height: 100% !important;
        }

        .profile .shadow-none {
            box-shadow: none !important;
        }
    </style>

</head>

<body>
    <?php
    $server = "localhost";
    $database = "INDIAN_JUDICIARY";
    $username = "root";
    $password = "";
    $portnumber = 3306;

    $conn = mysqli_connect($server, $username, $password, $database, $portnumber);

    $query = "SELECT A.Aadhaar_ID,A.Full_Name,A.Date_Of_Birth,A.Address,A.Mobile_Number,A.Email_ID,B.Lawyer_ID from BIODATA A,(SELECT Lawyer_ID,Aadhaar_ID from ADVOCATES where Lawyer_ID = '$_SESSION[lawyer]') B WHERE A.Aadhaar_ID=B.Aadhaar_ID;";

    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

        $aadhaar_fetched = $row['Aadhaar_ID'];
        $fName_fetched = $row['Full_Name'];
        $email_fetched = $row['Email_ID'];
        $dob_fetched = $row['Date_Of_Birth'];
        $mobile_fetched = $row['Mobile_Number'];
        $address_fetched = $row['Address'];
        $lawyer_fetched = $row['Lawyer_ID'];

    ?>
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-12 text-md-left text-center leftmy">
                    <ul class="top_nav1">
                        <li><i class="fa fa-calendar"></i> <span id="datedisplay"></span></li>
                        <li><i class="fa fa-clock-o"></i> <span id="clockDisplay"></span></li>
                    </ul>
                </div>
                <div class="col-md-8 col-12 text-md-right text-center righthd">
                    <ul class="top_nav">
                        <li><a href="logout.php"><i class="fa fa-reply-all"></i> Logout</a></li>
                    </ul>
                </div>


            </div>
        </div>
    </div>


    <div class="header">
        <div class="container">
            <div class="row">
                <div class="logo"><a href="#"><img src="images/embnew.jpg" /></a></div>
                <div class="col-md-6 h_right text-right">

                </div>
            </div>
        </div>
    </div>




    <div id="myheader" class="main_navigation">
    <div class="container">
      <div class="row">
        <div id='cssmenu'>
           <ul>
           <li><a href="lawyer_welcome1.php">Home</a></li>

            <li><a href="lawyer_profile.php">Profile</a></li>
            <li class='active'><a href="client_case_confirm.php">Client Case</a>
            <li><a href="court_schedule_postlogin_lawyer.php">Court Schedule</a></li>
            <li><a href="lawyer_view_cases.php">View Cases</a></li>
           </ul>
        </div>
      </div>
    </div>
  </div>


    <div class="profile">
        <div class="container">
            <div class="main-body">

                <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body box">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="./images/lawyer.png" alt="Admin" class="rounded-circle" width="150" height="150px">
                                    <h4><?php
                                            echo $fName_fetched;
                                            ?></h4>
                                        <p class="text-secondary mb-1">Lawyer</p>
                                        <p class="text-secondary mb-1">
                                            <?php
                                            echo $lawyer_fetched;
                                            ?>

                                        </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 ">
                        <div class="card mb-3">
                            <div class="card-body box">
                                <div class="row mx-5">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0 ">Full Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary ">
                                        <?php
                                            echo $fName_fetched;
                                        ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row mx-5">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0 ">Aadhaar ID</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary ">
                                    <?php
                                            echo $aadhaar_fetched;
                                        ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row mx-5">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email ID</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                    <?php
                                            echo $email_fetched;
                                        ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row mx-5">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Date Of Birth</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                    <?php
                                            echo $dob_fetched;
                                        ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row mx-5">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Mobile Number</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                    <?php
                                            echo $mobile_fetched;
                                        ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row mx-5">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Address</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                    <?php
                                            echo $address_fetched;
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>






    <div id="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="copyright">
                        <p>
                            <span>Designed by T Naga Tarun, Ajay Vikram P, Aniketh Narayan Bellala</span>
                        </p>

                    </div>
                </div>

            </div>
        </div>
    </div>




    <script>
        window.onscroll = function() {
            myFunction()
        };

        var header = document.getElementById("myheader");
        var sticky = header.offsetTop;

        function myFunction() {
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        }
    </script>



    <script src="js/main.js"></script>
    <script src="js/font.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</body>

</html>