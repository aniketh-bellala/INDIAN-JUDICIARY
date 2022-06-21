<?php
session_start();

if(!isset($_SESSION['lawyer'])){
  echo "You are logged out!";
  header('location:index.php');
}

?>
<!DOCTYPE html PUBLIC "-//W3C//Dp XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/Dp/xhtml1-transitional.dp">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lawyer Welcome</title>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<link id="pagestyle" rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/footer.css">
<link rel="stylesheet" href="css/more_nav.css">
<link rel="shortcut icon" type="image/jpg" href="./images/logo.jpeg"/>
<link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Themify Icons -->
    <link rel="stylesheet" href="css/themify-icons.css" />
    <!-- Owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <!-- Main css -->
    <link href="css/style3.css" rel="stylesheet" />


<link rel="stylesheet" href="navigation/styles.css">
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script type="text/javascript" src="navigation/script.js"></script>

<script type="text/javascript">
    function changesheet(sheet) {
        document.getElementById('pagestyle').setAttribute('href', sheet); 
    }
</script>
 
</head>

<body>
<?php
    $server = "localhost";
    $database = "INDIAN_JUDICIARY";
    $username = "root";
    $password = "";
    $portnumber = 3306;

    $conn = mysqli_connect($server, $username, $password, $database, $portnumber);

    $query = "SELECT Full_Name from BIODATA A,(SELECT Lawyer_ID,Aadhaar_ID from ADVOCATES where Lawyer_ID = '$_SESSION[lawyer]') B WHERE A.Aadhaar_ID=B.Aadhaar_ID;";

    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);


        $lwyr = $row['Full_Name'];


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
  

  <header class="bg-gradient" id="home">
      <div class="title2">
        <h1><?php echo "Welcome"?><br></h1> <h1><?php echo "Advocate  $lwyr! "?></h1>
        <p class="text">
        </p>
      </div>
      <div class="img-holder mt-3">
      
      </div>
    </header>
    <br>


<div class="container">

    <div class="section-title">
        <h3>Features</h3>
    </div>


    <div class="row">
        <div class="col-12 col-lg-4">
            <div class="card features">
                <div class="card-body">
                    <div class="media">
                        <span class="ti-user gradient-fill ti-3x mr-3"></span>
                        <div class="media-body">
                        <a href="appointjudges.php"><h4 class="card-title">Client Case</h4></a>
                            <p class="card-text">Judges, presently serving in High Courts of India with efficient work experience can be promoted/appointed as Judge to Supreme Court Of India! </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <div class="card2 features">
                <div class="card-body">
                    <div class="media">
                        <!-- <span class="ti-user gradient-fill ti-3x mr-3"></span>
                        <div class="media-body">
                        <a href="appointjudges.php"><h4 class="card-title">Appoint Judges</h4></a>
                            <p class="card-text">Judges, presently serving in High Courts of India with efficient work experience can be promoted/appointed as Judge to Supreme Court Of India! </p>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
       
        <div class="col-12 col-lg-4">
            <div class="card features">
                <div class="card-body">
                    <div class="media">
                        <span class="ti-clipboard gradient-fill ti-3x mr-3"></span>
                        <div class="media-body">
                            <a href="crud_laws.php"><h4 class="card-title">File Case</h4></a>
                            <p class="card-text">Laws can be modified persisting to present development and as approved by the passed by Parliament of India.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<br>
<div class="container">
<div class="row">
<div class="col-12 col-lg-4">
            <div class="card features">
                <div class="card-body">
                    <div class="media">
                        <span class="ti-calendar gradient-fill ti-3x mr-3"></span>
                        <div class="media-body">
                        <a href="court_schedule_postlogin_lawyer.php"><h4 class="card-title">Court Schedule</h4></a>
                            <p class="card-text">Court Schedule gives a personalized schedule for the Advocate consisting of the case slate that the respective Lawyer has to represent at a Judicial Court in India.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <div class="card2 features">
                <div class="card-body">
                    <div class="media">
                        <!-- <span class="ti-pencil gradient-fill ti-3x mr-3"></span>
                        <div class="media-body">
                            <a href="crud_laws.php"><h4 class="card-title">Modify Law</h4></a>
                            <p class="card-text">Laws can be modified persisting to present development and as approved by the passed by Parliament of India.</p>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    
        <div class="col-12 col-lg-4">
            <div class="card features">
                <div class="card-body">
                    <div class="media">
                        <span class="ti-view-list gradient-fill ti-3x mr-3"></span>
                        <div class="media-body">
                        <a href="lawyer_view_cases.php"><h4 class="card-title">View Case</h4></a>
                            <p class="card-text">Add New laws i.e. the chapter, section and clause in the Constitution after they are passed through the Parliamentary procedures of India.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div> 
</div>
</div>

<br>




      
      
 
<footer>
    <div class="container">
          <div class="row">


            
            <div class="col-md-2">
              <div class="widget">
                <h5 class="widgetheading">Quick Links</h5>
                <ul class="link-list">
                  <li><a href="logout.php"><i class="fa fa-chevron-right icred"></i> Logout</a></li>
                  <li><a href="admin_profile.php"><i class="fa fa-chevron-right icred"></i> Profile</a></li>


                </ul>
              </div>
            </div>

            <div class="col-md-2">
              <div class="widget">
                <h5 class="widgetheading">Contact dev</h5>
                <ul class="link-list">
                  <li><a href="#"><i class="fa fa-phone icred"></i> +91 8296399994 <br><i class="fa fa-envelope"></i> <a href="mailto:ajayvikramp@gmail.com" >Mail:ajayvikramp@gmail.com</a></li>

                </ul>
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
  </div>
  </div>


</footer>
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
