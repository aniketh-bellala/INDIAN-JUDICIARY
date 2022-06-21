<?php
session_start();

if (!isset($_SESSION['aadhaar'])) {
    echo "You are logged out!";
    header('location:index.php');
}

if (isset($_POST['submit_step1'])) {
    
    $client_id1 = $_POST['client_id_step1'];
    $client_type1 = $_POST['which_client1'];
    $client_opp1 = $_POST['opp_client1'];
    $case_id1 = $_POST['case_id_step1'];
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "INDIAN_JUDICIARY";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
$sql = "SELECT BIODATA.Full_Name,ADVOCATES.AORCode,ADVOCATES.Lawyer_ID FROM ADVOCATES join BIODATA where ADVOCATES.Aadhaar_ID=BIODATA.Aadhaar_ID and ADVOCATES.Status like 'Active';";
$result = $con->query($sql);




?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Find Lawyer</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link id="pagestyle" rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js">
    </script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/more_nav.css">
    <link rel="stylesheet" type="text/css" href="css\sorTable.css">
    <link rel="shortcut icon" type="image/jpg" href="./images/logo.jpeg"/>

    <script src="./js/sorTable.js"></script>


    <link rel="stylesheet" href="navigation/styles.css">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="navigation/script.js"></script>

    <script type="text/javascript">
        function changesheet(sheet) {
            document.getElementById('pagestyle').setAttribute('href', sheet);
        }
    </script>

    <style>
        table th,
        td {
            text-align: center;
        }

        .row_flex {
            display: flex;
            flex-direction: row;
            justify-content: center;
        }

        .btn {
            margin: 0.4rem;
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
                        <li><a href="client_welcome.php">Home</a></li>
                        <li><a href="client_profile.php">Profile</a></li>
                        <li><a href="court_schedule_postlogin_client.php">Court Schedule</a></li>
                        <li><a href="client_case_details.php">Case Details</a></li>
                        <li><a href="step1_find_case.php">Find Lawyer</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <br>

    <div align="center">
        <p class="title" style="font-weight: bold; font-size:30px">Find Lawyers</p>

        <a href="step1_find_case.php" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Go Back!</a>

    </div>
    <hr align="center" width="40%">

    <br>
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header row_flex">

                        <input type="text" id="filter0" placeholder="Filter By Name" style="margin-right: 0.5rem;">
                        <input type="text" id="filter1" placeholder="Filter By AOR Code" style="margin-left: 0.5rem;">
                    </div>






                    <br><br>

                    <table id="filter" class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>Name</th>
                                <th>AOR Code</th>
                                <th>Lawyer ID</th>
                                <th>Action</th>


                            </tr>
                        </thead>

                        <tbody>
                            <?php   // LOOP TILL END OF DATA 
                            $counter = 0;
                            while ($rows = $result->fetch_assoc()) {
                                $counter += 1;
                            ?>
                                <tr>
                                    <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                                    <td><?php echo $rows['Full_Name']; ?></td>
                                    <td><?php echo $rows['AORCode']; ?></td>
                                    <td><?php echo $rows['Lawyer_ID']; ?></td>
                                    <td>
                                        <form action="./lawyer_request.php" method="post">
                                            <input type="hidden" name="client_id_step2" value="<?php echo $client_id1 ?>">
                                            <input type="hidden" name="case_id_step2" value="<?php echo $case_id1 ?>">
                                            <input type="hidden" name="which_client2" value="<?php echo $client_type1 ?>">
                                            <input type="hidden" name="opp_client2" value="<?php echo $client_opp1 ?>">
                                            <input type="hidden" name="lawyer_id_step2" value="<?php echo $rows['Lawyer_ID'] ?>">
                                            <button type="submit" class="btn btn-success btn-sm" name="request_lawyer_step2" onclick="location.href='./lawyer_request.php'">Request</button>
                                        </form>
                                    </td>



                                <?php } ?>


                                </tr>
                        </tbody>
                    </table>

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


    <script src="js/TableFilter.min.js" defer></script>
    <script src="js/main.js"></script>
    <script src="js/font.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</body>

</html>