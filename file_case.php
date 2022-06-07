<?php
session_start();

if(!isset($_SESSION['judge'])){
  echo "You are logged out!";
  header('location:index.php');
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

        table {
            text-align: center;
        }

        .clause_col {
            text-align: justify;
        }

        th {
            white-space: nowrap;
        }

        th.cntr,
        td.cntr {
            vertical-align: middle;
        }

        td a {
            margin: 0.2rem;
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
            margin: 0.6rem 0rem;
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

        $sql = "SELECT * from JUDGES where Judge_ID='$_SESSION[judge]'";
        $result = $mysqli->query($sql);
        $row = mysqli_fetch_assoc($result);
        $courtid=$row['Court_ID'];
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
           <li><a href="judge_welcome1.php">Home</a></li>

            <li><a href="judge_profile.php">Profile</a></li>
            <li class='active'><a href="#">Case</a>
              <ul>
                 <li><a href="file_case.php">File Case</a></li>
                 <li><a href="yet_to_register.php">Pending Cases</a></li>
                 <li><a href="#">Case Records</a></li>
              </ul>
             </li>
            <li><a href="court_schedule_form.php">Court Scheduler</a></li>
            <li><a href="#">Appoint Judges</a></li>
            <li><a href="court_schedule_postlogin_judge.php">Court Schedule</a></li>
           </ul>
        </div>
      </div>
    </div>
  </div>

    <div class="content" id="content_id">
        <h3 class="title2">File Case</h3>
        <h5>Hearing By : <?php echo $_SESSION['judge']?><h5>
            <br>
        <h5>Court ID : <?php echo $courtid?></h5>
        <?php
        
        $insert = false;
        $messsage = '';
        if (isset($_POST["file_case"])) {
            $ci = $_POST['case_id'];
            $sd = $_POST['sec_div'];
            $vc = $_POST['vrdct'];
            $pr_cl = $_POST['pros_cl'];
            $ac_cl = $_POST['accs_cl'];
            if ((!empty($ci))) {
                $sql_check1 = "SELECT count(Case_ID) as case_check FROM CASE_RECORDS where Case_ID like '" . $ci . "';";
                $sql_check2 = "SELECT count(Section_Division) as law_check FROM LAWS where Section_Division like '" . $sd . "';";
                $sql_check3 = "SELECT count(Client_ID) as client_check1 FROM CLIENTS where Client_ID like '" . $pr_cl . "';";
                $sql_check4 = "SELECT count(Client_ID) as client_check2 FROM CLIENTS where Client_ID like '" . $ac_cl . "';";
                $result_check1 = $mysqli->query($sql_check1);
                $result_check2 = $mysqli->query($sql_check2);
                $result_check3 = $mysqli->query($sql_check3);
                $result_check4 = $mysqli->query($sql_check4);
                $verify1 = $result_check1->fetch_assoc();
                $verify2 = $result_check2->fetch_assoc();
                $verify3 = $result_check3->fetch_assoc();
                $verify4 = $result_check4->fetch_assoc();
                if ($verify1['case_check'] != 0) {
                    echo "<br><p style=\"color:red;\">Case_ID Already Exists!</p>";
                } else if ($verify2['law_check'] < 1) {
                    echo "<br><p style=\"color:red;\">Section Division Doesn't Exist!</p>";
                    } else if ($verify3['client_check1'] == 0) {
                        echo "<br><p style=\"color:red;\">Prosecutor Client Doesn't Exist!</p>";
                    } else if ($verify4['client_check2'] == 0) {
                        echo "<br><p style=\"color:red;\">Accusor Client Doesn't Exist!</p>";
                } else {
                    $sql_law1 = "INSERT INTO CASE_RECORDS values ('$ci','$sd','$_SESSION[judge]','$vc');";
                    $sql_law2 = "INSERT INTO CASE_DETAILS values ('$ci','-','$pr_cl','-','$ac_cl','NULL','NULL','NULL');";
                    // echo $sql_law;
                    if (mysqli_query($mysqli, $sql_law1) && mysqli_query($mysqli, $sql_law2)) {
                        $insert = true;
                    }
                }
            }
        }
        if ($insert) {
            echo "<p style=\"color:green\">Case Registered!</p>";
        ?>
            <br>
            <a href="./file_case.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Go Back!</a>
        <?php
        } else {
        ?>
            <form action="file_case.php" method="post">
                <input type="text" name="case_id" id="case_id" placeholder="Case ID" required>
                <input type="text" minlength="1" maxlength="6" name="sec_div" id="sec_div" placeholder="Section & Division" required>
                <input type="text" name="pros" id="pros" placeholder="Prosecutor ID" disabled>
                <input type="text" name="pros_cl" id="pros_cl" placeholder="Prosecutor Client ID" required>
                <input type="text" name="accs" id="accs" placeholder="Accusor ID" disabled>
                <input type="text" name="accs_cl" id="accs_cl" placeholder="Accusor Client ID" required>
                <textarea name="stmnt" id="stmnt" placeholder="Statement" disabled></textarea>
                <label for="vrdct"><strong>Verdict</strong></label>
                <select name="vrdct" id="vrdct" required>
                    <option value="Pending" selected>Pending</option>
                    <option value="Scheduled" disabled>Scheduled</option>
                    <option value="Judgement Given" disabled>Judgement Given</option>
                </select>
                <input type="submit" class="btn" name="file_case" style="background-color:purple;">
                <br>
            </form>
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