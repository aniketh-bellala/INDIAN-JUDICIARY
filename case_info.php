<?php
session_start();

if (!isset($_SESSION['judge'])) {
    echo "You are logged out!";
    header('location:index.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//Dp XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/Dp/xhtml1-transitional.dp">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Case Information</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link id="pagestyle" rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
        .content {
            margin: 0;
            padding: 1rem 4rem;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .row_flex {
            display: flex;
            flex-direction: row;
            align-items: baseline;

        }

        .selector {
            margin: 0.8rem;
        }

        .title1 {
            color: #e59719;
            font-size: 1.5rem;
            text-decoration: underline;
            font-family: 'Open Sans';
        }

        .title2 {
            color: #e59719;
            font-size: 2rem;
            text-decoration: underline;
            font-family: 'Open Sans';
            margin: 0.2rem auto 1.5rem auto;
        }

        .btn {
            color: white;
            font-size: 0.8rem;
            border-radius: 0.5rem;
            cursor: pointer;
            margin: auto;
        }
    </style>

</head>

<body>

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
                        <li><a href="index.php">Home</a></li>
                        <li class='active'><a href="#">About Us</a>
                            <ul>
                                <li><a href="history.php">History</a></li>
                                <li><a href="organizationstructure.php">Organisation Structure</a></li>
                                <li><a href="judicialacademies.php">Judicial Academies</a></li>
                                <li><a href="roles.php">Roles/Functions</a></li>

                            </ul>
                        </li>
                        <li><a href="#">Judges Profile</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="calender.php">Calender</a></li>
                        <li><a href="constitution.php">Constitution</a></li>
                        <li><a href="contactus.php">Contact Us </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="content" id="content_id">
        <h3 class="title2">Case Details</h3>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "INDIAN_JUDICIARY";
        $mysqli = new mysqli(
            $servername,
            $username,
            $password,
            $database
        );

        // Checking for connections
        if ($mysqli->connect_error) {
            die('Connect Error (' .
                $mysqli->connect_errno . ') ' .
                $mysqli->connect_error);
        }

        if (isset($_POST['info'])) {
            $cid = $_POST['case_id'];
            // echo $cid;
            $sql_case = "SELECT * from CASE_DETAILS join CASE_RECORDS on CASE_DETAILS.Case_ID = CASE_RECORDS.Case_ID and CASE_DETAILS.Case_ID like '" . $cid . "';";
            $result_case = $mysqli->query($sql_case);
            $case_info = $result_case->fetch_assoc();

            $sql_pros = "SELECT * from ADVOCATES join BIODATA on ADVOCATES.Aadhaar_ID = BIODATA.Aadhaar_ID where Lawyer_ID like '" . $case_info['Prosecutor'] . "';";
            $result_pros = $mysqli->query($sql_pros);
            $case_pros = $result_pros->fetch_assoc();

            $sql_accs = "SELECT * from ADVOCATES join BIODATA on ADVOCATES.Aadhaar_ID = BIODATA.Aadhaar_ID where Lawyer_ID like '" . $case_info['Accussor'] . "';";
            $result_accs = $mysqli->query($sql_accs);
            $case_accs = $result_accs->fetch_assoc();

            $sql_pc = "SELECT * from CLIENTS join BIODATA on CLIENTS.Aadhaar_ID = BIODATA.Aadhaar_ID where Client_ID like '" . $case_info['Prosecutor_Client'] . "';";
            $result_pc = $mysqli->query($sql_pc);
            $case_pc = $result_pc->fetch_assoc();

            $sql_ac = "SELECT * from CLIENTS join BIODATA on CLIENTS.Aadhaar_ID = BIODATA.Aadhaar_ID where Client_ID like '" . $case_info['Accussor_Client'] . "';";
            $result_ac = $mysqli->query($sql_ac);
            $case_ac = $result_ac->fetch_assoc();

            $sql_jd = "SELECT * from JUDGES join BIODATA on JUDGES.Aadhaar_ID = BIODATA.Aadhaar_ID where Judge_ID like '" . $case_info['Hearing_By'] . "';";
            $result_jd = $mysqli->query($sql_jd);
            $case_jd = $result_jd->fetch_assoc();

        ?>

            <!-- edit client field according to sql statement -->
            <p><strong>Case ID : </strong><?php echo $case_info['Case_ID']; ?></p>
            <p><strong>Section & Division : </strong><?php echo $case_info['Section_Division']; ?></p>
            <p><strong>Prosecutor : </strong><?php echo $case_pros['Full_Name']; ?></p>
            <p><strong>Prosecutor ID : </strong><?php echo $case_info['Prosecutor']; ?></p>
            <p><strong>Prosecutor Client : </strong><?php echo $case_pc['Full_Name']; ?></p>
            <p><strong>Prosecutor Client ID : </strong><?php echo $case_info['Prosecutor_Client']; ?></p>
            <p><strong>Accussor : </strong><?php echo $case_accs['Full_Name']; ?></p>
            <p><strong>Accussor ID : </strong><?php echo $case_info['Accussor']; ?></p>
            <p><strong>Accussor Client : </strong><?php echo $case_ac['Full_Name']; ?></p>
            <p><strong>Accussor Client ID : </strong><?php echo $case_info['Accussor_Client']; ?></p>
            <p><strong>Hearing By : </strong><?php echo $case_jd['Judge_ID']; ?></p>
            <p><strong>Verdict : </strong><?php echo $case_info['Final_Verdict']; ?></p>
            <p><strong>Statement : </strong><?php echo $case_info['Statement']; ?></p>
            <p></p>
            <a href="judge_case_records.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Go Back!</a>

        <?php
        }
        ?>

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