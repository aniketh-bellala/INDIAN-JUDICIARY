<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prelogin</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link id="pagestyle" rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script type="text/javascript"
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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

    </style>
</head>

<body>
    <style>
        .box body {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .box .container {
            height: 450px;
            flex-wrap: wrap;
        }

        .box .outer {
            width: 1200px;
            height: 250px;
            margin: auto;

        }

        .box .top {
            width: 750px;
            height: 50px;
            margin: auto;
        }

        .box .select {
            width: 1140px;
            height: 150px;
            margin: auto;
        }

        .box .top h1 {
            text-align: center;
        }

        .box img {
            width: 250px;
            margin: 15px;
            height: 250px;
        }

        .box .admin {
            float: left;
        }

        .box .judge {
            float: left;
        }

        .box .lawyer {
            float: left;

        }

        .box .client {
            float: left;

        }

        .box .adminButton {
            display: flex;
            justify-content: center;
            width: 250px;
            margin: 15px;
            float: left;
        }

        .box .judgeButton {
            display: flex;
            justify-content: center;
            width: 250px;
            margin: 15px;
            float: left;
        }

        .box .lawyerButton {
            display: flex;
            justify-content: center;
            width: 250px;
            margin: 15px;
            float: left;
        }

        .box .clientButton {
            display: flex;
            justify-content: center;
            width: 250px;
            margin: 15px;
            float: left;
        }
        .loginSpan{
      font-size: x-large;
      color: #f7f7f7;
     }
     #loginBar{
       margin-left: 15px;
       padding: 5px;
     }
    </style>

    <div>
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
    </div>

    <div class="main_navigation">
        <div class="container">
            <div class="row">
                <div id='cssmenu'>
                    <div id="loginBar">
                        <span class="loginSpan"><span class="loginSpan">
                            Login</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="box">
        <div class="container">
            <div class="top">
                <h1>Choose Profile Type</h1>
            </div>
            <div class="outer">
                <div class="admin">
                    <img src="images/chief_justice.png" alt="Image Not Available.">
                </div>
                <div class="judge">
                    <img src="images/judge.png" alt="Image Not Available.">
                </div>
                <div class="lawyer">
                    <img src="images/lawyer.png" alt="Image Not Available.">
                </div>
                <div class="client">
                    <img src="images/client.png" alt="Image Not Available.">
                </div>
            </div>
            <div class="select">
                <div class="adminButton"><button onclick="location.href='admin_login.php';"
                   class="btn-primary btn-block">CHIEF JUSTICE</button></div>
                <div class="judgeButton"><button onclick="location.href='judge_login.php';"
                        class="btn-primary btn-block">JUDGE</button></div>
                <div class="lawyerButton"><button onclick="location.href='lawyer_login.php';"
                        class="btn-primary btn-block">LAWYER</button></div>
                <div class="clientButton"><button onclick="location.href='client_login.php';"
                        class="btn-primary btn-block">CLIENT</button></div>
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
        window.onscroll = function () { myFunction() };

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