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
    <title>Add/Modify Laws</title>

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
            justify-content: space-evenly;
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
            text-decoration: none;
            color: white;
        }

        td a:hover {
            text-decoration: none;
            color: white;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 0.2rem;
        }

        .btn {
            color: white;
            font-size: 0.8rem;
            border-radius: 0.5rem;
            margin: 0rem 0.4rem;
            cursor: pointer;
        }

        td form {
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
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
            <li class='active'><a href="crud_laws.php"> Add/Modify Laws</a>
             </li>
           </ul>
        </div>
      </div>
    </div>
  </div>

    <div class="content" id="content_id">
        <h3 class="title2">Code of Law</h3>
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Chapter</th>
                    <th scope="col">Section & Division</th>
                    <th scope="col">Clause</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <th scope="row"></th>
                    <th scope="row"></th>
                    <th scope="row"></th>
                    <th scope="row" id="clause_0"></th>
                    <th>
                        <a href="./add_law.php" role="button" class="btn btn-success btn-small ">Add Law</a>
                    </th>
                </tr>
                <?php

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
                $sql_laws = "SELECT * FROM LAWS order by Chapter, Section_Division ;";
                $result_laws = $mysqli->query($sql_laws);
                $counter = 1;
                while ($row_laws = $result_laws->fetch_assoc()) {
                ?>
                    <tr>
                        <th scope="row" class="cntr"><?php echo $counter++; ?></th>
                        <td scope="row" class="cntr"><?php echo $row_laws['Chapter'] ?></td>
                        <td scope="row" class="cntr"><?php echo $row_laws['Section_Division'] ?></td>
                        <td scope="row" class="clause_col cntr"><?php echo $row_laws['Clause'] ?></td>
                        <td scope="row" class="row_flex cntr">
                            <form action="./edit_law.php" method="post">
                                <?php echo '
                                <input type="hidden" value=\'' . $row_laws['Chapter'] . '\' name="chap">
                                <input type="hidden" value=\'' . $row_laws['Section_Division'] . '\' name="sdiv">
                                <input type="hidden" value=\'' . $row_laws['Clause'] . '\' name="clprev">
                                <button type="submit" class="btn btn-warning btn-small" name="modify" onclick="location.href = \'./edit_law.php\';">Edit</button>'; ?>
                            </form>
                            <form action="./delete_law.php" method="post">
                                <?php echo '
                                <input type="hidden" value=\'' . $row_laws['Chapter'] . '\' name="chap">
                                <input type="hidden" value=\'' . $row_laws['Section_Division'] . '\' name="sdiv">
                                <input type="hidden" value=\'' . $row_laws['Clause'] . '\' name="clprev">
                                <button type="submit" class="btn btn-danger btn-small" name="delete" onclick="return confirm(\'Are you sure you want to continue?\');">Delete</button>'; ?>
                            </form>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>


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