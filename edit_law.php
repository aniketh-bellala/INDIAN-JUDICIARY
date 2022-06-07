<?php
session_start();

if(!isset($_SESSION['admin'])){
  echo "You are logged out!";
  header('location:index.php');
}
if (isset($_POST['modify'])) {
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
    <title>Edit</title>

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
            <li><a href="admin_welcome.php">Home</a></li>
            <li><a href="admin_profile.php">Profile</a></li>
            <li><a href="#">Appoint Judges</a></li>
            <li class='active'><a href="crud_laws.php"> Add/Modify Laws</a>
             </li>
           </ul>
        </div>
      </div>
    </div>
  </div>

    <div class="content" id="content_id">
        <h3 class="title2">Code of Law</h3>
        <h5>Edit Law details!</h5>
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
        $messsage = '';
        if (isset($_POST['edit_form'])) {
            $cl = $_POST['clause_edit'];
            $ch = $_POST['ch'];
            $sd = $_POST['sd'];

            if ((!empty($cl)) && (!empty($ch)) && (!empty($sd))) {
                $sql_law = "UPDATE LAWS SET Clause='" . $cl . "' where Section_Division like '" . $sd . "';";

                if (mysqli_query($mysqli, $sql_law)) {
                    $insert = true;
                }
            } else {
                echo "<br><p style=\"color:red;\">Clause can not be empty!</p>";
            }
        }
        if ($insert) {
            echo "<p style=\"color:green\">Law Modified!</p>";
        ?>
            <br>
            <a href="./crud_laws.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Go Back!</a>
        <?php
        } else {
        ?>
            <form action="./edit_law.php" method="post">
                <label><strong>Chapter</strong></label>
                <input type="text" readonly="readonly" name="ch" value=<?php echo $default_ch ?>>
                <label><strong>Section & Division</strong></label>
                <input type="text" readonly="readonly" name="sd" value=<?php echo $default_sd ?>>
                <label><strong>Clause</strong></label>
                <textarea name="clause_edit" id="clause_edit"><?php echo $default_cl; ?></textarea>
                <input type="submit" class="btn" name="edit_form" style="background-color:purple;" onclick="return confirm('Are you sure you want to continue?');">
            </form>
            <a href="./crud_laws.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Go Back!</a>
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