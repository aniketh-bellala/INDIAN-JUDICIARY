<?php
session_start();

if(!isset($_SESSION['judge'])){
  echo "You are logged out!";
  header('location:index.php');
}
if (isset($_POST['delete'])) {
    $default_ch = $_POST['chap'];
    $default_sd = $_POST['sdiv'];
    $default_cl = $_POST['clprev'];
    // echo $default_ch;
    // echo $default_sd;
    // echo $default_cl;
} else {
    $default_ch = "";
    $default_sd = "";
    $default_cl = "";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//Dp XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/Dp/xhtml1-transitional.dp">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Delete</title>

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

        form {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            padding: 1.2rem;
        }

        form input,
        textarea {
            margin: 0.5rem 0rem;
            width: 12rem;
        }

        textarea {
            height: 10rem;
        }

        .btn {
            color: white;
            font-size: 0.8rem;
            border-radius: 0.5rem;
            cursor: pointer;
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
           <li><a href="judge_welcome.php">Home</a></li>

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

    <div class="content" id="content_id">
        <h3 class="title2">Code of Law</h3>
        <h5>Delete Law!</h5>
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
        $insert = false;
        if (isset($_POST['delete_case_form'])) {
            $cid = $_POST['case_id'];
            if (!empty($cid)) {
                $sql_case1 = "DELETE from CASE_DETAILS where Case_ID like '" . $cid . "';";
                $sql_case2 = "DELETE from CASE_RECORDS where Case_ID like '" . $cid . "';";
                $sql_case3 = "DELETE from COURT_SCHEDULE where Case_ID like '" . $cid . "';";
                if (mysqli_query($mysqli, $sql_case1) && mysqli_query($mysqli, $sql_case2)&& mysqli_query($mysqli, $sql_case3)) {
                    $insert = true;
                }
            }
        }
        if ($insert) {
            echo "<p style=\"color:green\">Case Deleted!</p>";
        ?>
            <br>
            <a href="./judge_unscheduled.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Go Back!</a>
            <?php
        } else {
            if (isset($_POST['delete_case'])) {
                $ci = $_POST['case_id'];
                $sql_case_rtrv = "SELECT * from case_details join case_records on case_details.Case_ID = case_records.Case_ID where case_records.Case_ID like '" . $ci . "';";
                $result_case_rtrv = $mysqli->query($sql_case_rtrv);
                $case_info = $result_case_rtrv->fetch_assoc();

            ?>
                <form action="./delete_case.php" method="post">
                    <label><strong>Case ID</strong></label>
                    <input type="text" readonly="readonly" name="case_id" value='<?php echo $case_info['Case_ID'] ?>'>
                    <label><strong>Section & Division</strong></label>
                    <input type="text" readonly="readonly" value='<?php echo $case_info['Section_Division'] ?>'>
                    <label><strong>Prosecutor</strong></label>
                    <input type="text" readonly="readonly" value='<?php echo $case_info['Prosecutor'] ?>'>
                    <label><strong>Prosecutor Client</strong></label>
                    <input type="text" readonly="readonly" value='<?php echo $case_info['Prosecutor_Client'] ?>'>
                    <label><strong>Accussor</strong></label>
                    <input type="text" readonly="readonly" value='<?php echo $case_info['Accussor'] ?>'>
                    <label><strong>Accussor Client</strong></label>
                    <input type="text" readonly="readonly" value='<?php echo $case_info['Accussor_Client'] ?>'>
                    <label><strong>Hearing By</strong></label>
                    <input type="text" readonly="readonly" value='<?php echo $case_info['Hearing_By'] ?>'>
                    <label><strong>Verdict</strong></label>
                    <input type="text" readonly="readonly" value='<?php echo $case_info['Final_Verdict']; ?>'>
                    <input type="submit" class="btn" name="delete_case_form" style="background-color:purple;" onclick="return confirm('Are you sure you want to delete?');">
                </form>
                <a href="./judge_unscheduled.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Go Back!</a>
        <?php
            }
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