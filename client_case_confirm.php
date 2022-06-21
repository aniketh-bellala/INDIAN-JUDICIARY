<?php
session_start();

if (!isset($_SESSION['lawyer'])) {
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


$login_lawyerId = $_SESSION['lawyer'];

?>

<!DOCTYPE html PUBLIC "-//W3C//Dp XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/Dp/xhtml1-transitional.dp">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Cases</title>

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
        .btn {
            margin: 0rem 0.4rem;
        }

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
            justify-content: center;
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

        form {
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        form select {
            margin: 1.6rem 0.8rem;
        }

        .space {
            width: 1rem;
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

    <div class="content">
        <h3 class="title2">Cases</h3>
        <div class="row_flex">


        </div>

        <?php

        $sql_schedule = "SELECT * from CASE_RECORDS as A join CASE_DETAILS as B where A.Case_ID = B.Case_ID and (B.Request_Pros like '" . $login_lawyerId . "' or Request_Accs like '" . $login_lawyerId . "') and A.Final_Verdict='Pending' and (Prosecutor not like '" . $login_lawyerId . "' and Accussor not like '" . $login_lawyerId . "');";
        $result_schedule = $mysqli->query($sql_schedule);
        ?>

        <br>
        <br>
        <table class="table table-bordered schedule">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Sl no.</th>
                    <th scope="col">Case ID</th>
                    <th scope="col">Client ID</th>
                    <th scope="col">Section & Division</th>
                    <th scope="col">Hearing By</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $counter = 0;
                while ($rows = $result_schedule->fetch_assoc()) {
                    if ($rows["Request_Pros"] == $login_lawyerId) {
                        $test = $rows["Prosecutor_Client"];
                    } else if ($rows["Request_Accs"] == $login_lawyerId) {
                        $test = $rows["Accussor_Client"];
                    }
                    $counter += 1;
                ?>
                    <tr>
                        <th scope="row"><?php echo $counter ?></td>
                        <td><?php echo $rows["Case_ID"] ?></td>
                        <td><?php echo $test ?></td>
                        <td><?php echo $rows["Section_Division"] ?></td>
                        <td><?php echo $rows["Hearing_By"] ?></td>
                        <td scope="row" class="row_flex cntr">
                            <form action="accept.php" method="post">
                                <?php echo '<input type="hidden" value=\'' . $test . '\' name="accept"> ' ?>
                                <?php echo '<input type="hidden" value=\'' . $rows['Case_ID'] . '\' name="accept1"> ' ?>
        
                                <button type="submit1" name="submit" class="btn btn-success btn-sm" onclick="location.href='accept.php'">Accept</button>
                            </form>
                            <form action="reject.php" method="post">
                            <?php echo '<input type="hidden" value=\'' . $test . '\' name="reject"> ' ?>
                            <?php echo '<input type="hidden" value=\'' . $rows['Case_ID'] . '\' name="reject1"> ' ?>

                                <button type="submit2" name="submit1" class="btn btn-danger btn-sm" onclick="location.href='reject.php'">Reject</button>
                            </form>
                        </td>
                    </tr>
                <?php
                }

                ?>
            </tbody>
        </table>
    </div>
    </div>



    <!-- http://localhost/ij/court_schedule.php -->



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