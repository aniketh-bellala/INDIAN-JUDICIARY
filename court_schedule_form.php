<?php

session_start();

if (!isset($_SESSION['judge'])) {
    echo "You are logged out!";
    header('location:index.php');
}

$insert = false;
if (isset($_POST['submit_form'])) {
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "INDIAN_JUDICIARY";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password,$database);

    // Check for connection success
    if (!$con) {
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    // $slno = $_POST['sl_no'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $time = $time . ":00";
    $court_hall_no = $_POST['ch_no'];
    $case_id = $_POST['case_id'];
    $hearing_by = $_POST['hearing_by'];
    $sql = "INSERT INTO COURT_SCHEDULE VALUES ('$date', '$time', $court_hall_no, '$case_id', '$hearing_by');";

    // echo $sql;   

    // Execute the query
    if ($con->query($sql) == true) {
        $insert = true;
    } else {
        echo "ERROR: $sql <br> $con->error";
    }
    $sql1 = "UPDATE CASE_RECORDS SET Final_Verdict='Scheduled' WHERE Case_ID='$case_id';";

    // echo $sql;   

    // Execute the query
    if ($con->query($sql1) == true) {
        $insert = true;
    } else {
        echo "ERROR: $sql1 <br> $con->error";
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
    <title>Court Schedule Form</title>

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

        form input {
            width: 10rem;
            height: 2rem;
            margin: 0.8rem;
        }

        .btn {
            color: black;
            background: #e6a843;
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
           <li><a href="judge_welcome1.php">Home</a></li>

            <li><a href="judge_profile.php">Profile</a></li>
            <li class='active'><a href="#">Case</a>
              <ul>
                 <li><a href="file_case.php">File Case</a></li>
                 <li><a href="yet_to_register.php">Pending Cases</a></li>
                 <li><a href="judge_case_records.php">Case Records</a></li>
              </ul>
             </li>
            <li><a href="court_schedule_form.php">Court Scheduler</a></li>
            <li><a href="court_schedule_postlogin_judge.php">Court Schedule</a></li>
           </ul>
        </div>
      </div>
    </div>
  </div>
    <div class="content">
    <h3 class="title2">Court Scheduler</h3>
        <div class="box">
        <form action="court_schedule_form.php" method="post">
            <!-- <input type="number" min="0" name="sl_no" id="sl_no" placeholder="Sl no." required> -->
            <input type="date" name="date" id="date" placeholder="Date" required>
            <input type="time" min="09:00" max="15:00" name="time" id="time" placeholder="Time" required>
            <input type="number" min="0" max="12" name="ch_no" id="ch_no" placeholder="Court Hall NO." required>
            <input type="text" minlength="4" maxlength="5" name="case_id" id="case_id" placeholder="Case ID" reuired>
            <input type="text" name="hearing_by" id="hearing_by" readonly="readonly" placeholder="Hearing by" value='<?php echo "$_SESSION[judge]" ?>' required>
            <button type="submit" class="btn btn-warning" name="submit_form">Schedule</button>
        </form>
        </div>
        <?php
        if ($insert == true) {
            echo "<p class='submitMsg'>Court Schedule Updated!</p>";
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