<?php
session_start();

if(!isset($_SESSION['admin'])){
  echo "You are logged out!";
  header('location:index.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//Dp XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/Dp/xhtml1-transitional.dp">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Appoint Judges</title>

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
            margin: 0.8rem;
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
            <li><a href="admin_welcome1.php">Home</a></li>
            <li><a href="admin_profile.php">Profile</a></li>
            <li><a href="appointjudges.php">Appoint Judges</a></li>
            <li ><a href="crud_laws.php"> Add/Modify Laws</a>
             </li>
           </ul>
        </div>
      </div>
    </div>
  </div>

    <div class="content" id="content_id">
        <h3 class="title2">Appoint Judge</h3>
        <h5>Supreme Court of India</h5>
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
// Check connection
$sql = "SELECT i.Full_Name as Full_Name,j.Judge_ID,i.Date_Of_Birth as DOB,j.Date_Of_Appointment as DOA,j.Date_Of_Resignation as DOR,j.Court_ID FROM BIODATA i,JUDGES j,COURTS k where i.Aadhaar_ID=j.Aadhaar_ID and j.Court_ID=k.Court_ID and j.Court_ID like '%HC%'; ";
$result = $mysqli->query($sql);


        // Checking for connections
        if ($mysqli->connect_error) {
            die('Connect Error (' .
                $mysqli->connect_errno . ') ' .
                $mysqli->connect_error);
        }
        $insert = false;
        $messsage = '';
        if (isset($_POST["appoint_judge"])) {
            $aj = $_POST['ap_judge'];
            if ((!empty($aj))) {
                $sql_check = "SELECT judges.Judge_ID FROM judges JOIN biodata WHERE judges.Aadhaar_ID=biodata.Aadhaar_ID AND Court_ID LIKE '%HC%' AND (DATEDIFF(CURRENT_DATE,biodata.Date_Of_Birth))/365>=45 AND DATEDIFF(CURRENT_DATE,judges.Date_Of_Appointment)/365>=8 and judges.Judge_ID='$aj';";
                $sql_see="SELECT Hearing_by FROM case_records where Final_Verdict='Pending' and Hearing_by='$aj';";
                // echo $sql_check;
                $result_check = $mysqli->query($sql_check);
                $result_see=$mysqli->query($sql_see);

                if ($result_check->num_rows==1 && $result_see->num_rows==0) {
                    $sql_law = "UPDATE judges SET Court_ID='SC01',Date_Of_Appointment=CURDATE(),Password=CONCAT(Court_ID,SUBSTR(Judge_ID,2)) WHERE Judge_ID='$aj'; ";

                    // echo $sql_law;
                    if (mysqli_query($mysqli, $sql_law)) {
                        $insert = true;
                    }
                } else if($result_see->num_rows==1){
                    echo "<br><p style=\"color:red;\">Judge '$aj' cannot be appointed to Supreme Court of India! '$aj' has pending case</p>";
                }
                else{
                    echo "<br><p style=\"color:red;\">Judge '$aj' cannot be appointed to Supreme Court of India! '$aj' is not Qualified</p>";
                }
            }
        }
        if ($insert) {
            echo "<p style=\"color:green\">Judge '$aj' Appointed to Supreme Court of India!</p>";
        ?>
            <br>
        <?php
        } else {
        ?>
            <form action="./appointjudges.php" method="post">
                <input type="text" minlength="1" maxlength="6" name="ap_judge" id="ap_judge" placeholder="Judge_ID" required>

                <input type="submit" class="btn" name="appoint_judge" style="background-color:purple;" onclick="return confirm('Appoint as a Judge to supreme court');">
                <br>

            </form>
        <?php
        }
        ?>

    </div>
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                   
                    <input type="text" id="filter0" placeholder="Filter By Name">
                            <input type="text" id="filter1" placeholder="Filter By Judge ID">
                            </div>

                  
                    <br><br>

                    <table id="filter" class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Judge_ID</th>
                                <th>Court</th>
                                <th>Date_Of_Birth</th>
                                <th>Date_Of_Appointment</th>
                                <th>Date_Of_Retirement</th>
                                
                                
                            </tr>
                        </thead>

                        <tbody>
                            <?php   // LOOP TILL END OF DATA 
               while($rows=$result->fetch_assoc())
                {
             ?>
                            <tr>
                                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                                <td><?php echo $rows['Full_Name'];?></td>
                                <td><?php echo $rows['Judge_ID'];?></td>
                                <td><?php echo $rows['Court_ID'];?></td>
                                <td><?php echo $rows['DOB'];?></td>
                                <td><?php echo $rows['DOA'];?></td>
                                <td><?php echo $rows['DOR'];?></td>
                                
                                
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
<link rel="stylesheet" type="text/css" href="css\sorTable.css">
<script src="js\sorTable.js"></script>
<script src="js/TableFilter.min.js" defer></script>
    <script src="js/main.js"></script>
    <script src="js/font.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</body>

</html>