<?php

$insert = false;
if (isset($_POST['submit_form'])) {
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";
    // $database = "judiciary";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if (!$con) {
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $cid = $_POST['case_id'];
    $sec_div = $_POST['sec_div'];
    $hby = $_POST['hear_by'];
    $vct = $_POST['verdict'];
    $plr = $_POST['p_lwyr'];
    $pcl = $_POST['p_clnt'];
    $alr = $_POST['a_lwyr'];
    $acl = $_POST['a_clnt'];
    $st = $_POST['stmnt'];
    $sql1 = "INSERT INTO `judiciary`.`case_details` (`Case_ID`,`Prosecutor`,`Prosecutor_Client`,`Accusor`,`Accusor_Client`,`Statement`) VALUES ('$cid','$plr','$pcl','$alr','$acl','$st');";
    // echo $sql1;
    $sql2 = "INSERT INTO `judiciary`.`case_records` (`Case_ID`,`Section_Division`,`Hearing_By`,`Verdict`) VALUES ('$cid','$sec_div','$hby','$vct');";
    // echo $sql2;

    // echo $sql;   

    // Execute the query
    if (($con->query($sql1) == true) && ($con->query($sql2) == true)) {
        $insert = true;
    } else {
        echo "ERROR: $sql1 <br> $con->error";
        echo "\nERROR: $sql2 <br> $con->error";
    }

    // Close the database connection
    $con->close();
}


?>

<!DOCTYPE html PUBLIC "-//W3C//Dp XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/Dp/xhtml1-transitional.dp">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>File Case</title>

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
            align-items: center;
        }

        .selector {
            margin: 0.8rem;
        }

        .title2 {
            color: #e59719;
            font-size: 2rem;
            text-decoration: underline;
            font-family: 'Open Sans';
        }

        .space {
            width: 1rem;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 1.2rem;
        }

        form input,
        select,
        textarea {
            width: 12rem;
            height: 2rem;
            margin: 0.8rem;
        }

        .btn {
            color: white;
            /* background: purple; */
            font-size: 0.8rem;
            border: 2px solid white;
            border-radius: 0.5rem;
            cursor: pointer;
        }

        .submitMsg {
            color: green;
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
                        <li><a href="#"><i class="fa fa-reply-all"></i> Login</a></li>
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

    <div class="content">
        <h3 class="title2">File Case Records</h3>
        <form action="cases_form.php" method="post">
            <input type="text" minlength="4" maxlength="5" name="case_id" id="case_id" placeholder="Case ID" reuired>
            <input type="text" minlength="4" maxlength="5" name="sec_div" id="sec_div" placeholder="Section & Division" reuired>
            <input type="text" name="p_lwyr" id="p_lwyr" placeholder="Prosecutor" required>
            <input type="text" name="p_clnt" id="p_clnt" placeholder="Prosecutor Client" required>
            <input type="text" name="a_lwyr" id="a_lwyr" placeholder="Accusor" required>
            <input type="text" name="a_clnt" id="a_clnt" placeholder="Accusor Client" required>
            <input type="text" name="hear_by" id="hear_by" placeholder="Hearing by" required>
            <select name="verdict" id="verdict">
                <option value="verdict" disabled>Verdict</option>
                <option value="pending">Pending</option>
                <option value="judgement_given">Judgement Given</option>
            </select><br>
            <textarea name="stmnt" id="stmnt" cols="30" rows="10" placeholder="Statement"></textarea>
            <input type="submit" class="btn" name="submit_form">
        </form>
        <?php
        if ($insert == true) {
            echo "<p class='submitMsg'>Case Record Updated!</p>";
        }
        ?>

    </div>



    <!-- http://localhost/ij/court_schedule_form.php -->



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