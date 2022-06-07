<?php
session_start();

if(!isset($_SESSION['judge'])){
  echo "You are logged out!";
  header('location:index.php');
}
// Username is root
$user = 'root';
$password = '';

// Database name is gfg
$database = 'INDIAN_JUDICIARY';

// Server is localhost with
// port number 3308
$servername = 'localhost';
$mysqli = new mysqli(
    $servername,
    $user,
    $password,
    $database
);

// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
        $mysqli->connect_errno . ') ' .
        $mysqli->connect_error);
}

// SQL query to select data from database

//edit sql to select according to judge
$sql_pending = "SELECT * from CASE_RECORDS join CASE_DETAILS where CASE_RECORDS.Case_ID = CASE_DETAILS.Case_ID and Final_Verdict = 'Pending';";
$result_pending = $mysqli->query($sql_pending);
?>

<!DOCTYPE html PUBLIC "-//W3C//Dp XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/Dp/xhtml1-transitional.dp">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pending Cases</title>

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
        }

        .content th,
        td {
            text-align: center;
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
        <h3 class="title2">Court of Record (Pending)</h3>
        <br>
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Sl no.</th>
                    <th scope="col">Case ID</th>
                    <th scope="col">Section & Division</th>
                    <th scope="col">Prosecutor</th>
                    <th scope="col">Accussor</th>
                    <th scope="col">Hearing By</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $counter = 1;
                while ($rows = $result_pending->fetch_assoc()) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $counter ?></td>
                        <td><?php echo $rows["Case_ID"] ?></td>
                        <td><?php echo $rows["Section_Division"] ?></td>
                        <td><?php echo $rows["Prosecutor_Client"] ?></td>
                        <td><?php echo $rows["Accussor_Client"] ?></td>
                        <td><?php echo $rows["Hearing_By"] ?></td>
                    </tr>
                <?php
                    $counter += 1;
                }
                ?>
            </tbody>
        </table>
    </div>
    </div>



    <!-- http://localhost/ij/court_schedule.php -->



    <div id="sub-footer" >
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