<?php
session_start();

if(!isset($_SESSION['aadhaar'])){
  echo "You are logged out!";
  header('location:index.php');
}

?>
<!DOCTYPE html PUBLIC "-//W3C//Dp XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/Dp/xhtml1-transitional.dp">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Client Welcome</title>

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

    $query = "SELECT Full_Name from BIODATA where Aadhaar_ID = $_SESSION[aadhaar];";


    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);


        $cli = $row['Full_Name'];


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
                    <li><a href="client_welcome1.php">Home</a></li>
                        <li><a href="client_profile.php">Profile</a></li>
                        <li><a href="court_schedule_postlogin_client.php">Court Schedule</a></li>
                        <li><a href="client_case_details.php">Case Details</a></li>
                        <li><a href="step1_find_case.php">Find Lawyer</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
  

  <header class="bg-gradient" id="home">
      <div class="title2">
        <h1><?php echo "Welcome"?><br></h1> <h1><?php echo "  $cli!"?></h1>
        <p class="text">
        </p>
      </div>
      <div class="img-holder mt-3">
      
      </div>
    </header>
    

<br><br>
<div class="container">

    <div class="section-title">
        <h3>Features</h3>
    </div>


    <div class="row">
        <div class="col-12 col-lg-4">
            <div class="card features">
                <div class="card-body">
                    <div class="media">
                        <span class="ti-calendar gradient-fill ti-3x mr-3"></span>
                        <div class="media-body">
                        <a href="court_schedule_postlogin_client.php"><h4 class="card-title">Court Schedule</h4></a>
                            <p class="card-text">Court Schedule gives a personalized schedule for the client consisting of the case slate that the respective client has to attend at a Judicial Court in India.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <div class="card features">
                <div class="card-body">
                    <div class="media">
                        <span class="ti-files gradient-fill ti-3x mr-3"></span>
                        <div class="media-body">
                        <a href="client_case_details.php"><h4 class="card-title">Case Details</h4></a>
                            <p class="card-text">Case Details provides information about the cases that the client has been a part of in the past and also those  at present in any of the Judicial Courts of India.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <div class="card features">
                <div class="card-body">
                    <div class="media">
                        <span class="ti-search gradient-fill ti-3x mr-3"></span>
                        <div class="media-body">
                          <!-- <p>lawyer find page</p> -->
                            <a href="step1_find_case.php"><h4 class="card-title">Find Lawyer</h4></a> 
                            <p class="card-text">Find Lawyer helps the client to Find a Lawyer to take up his/her case and to represent the client in a Judicial Court in India.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<br> <br> <br>
<!-- <div class="container">
    <div class="text box">
      <h2 class="title2 inbox">Chief Justice of India:</h2>
      <p class="inbox">The chief justice of India, officially the chief justice of the Supreme Court of India, is the chief judge of the Supreme Court of India as well as the highest-ranking officer of the Indian federal judiciary. The Constitution of India grants power to the president of India to appoint, in consultation with the outgoing chief justice, the next chief justice, who will serve until they reach the age of sixty-five or are removed by impeachmentAs head of the Supreme Court, the chief justice is responsible for the allocation of cases and appointment of constitutional benches which deal with important matters of law.In accordance with Article 145 of the Constitution of India and the Supreme Court Rules of Procedure of 1966, the chief justice allocates all work to the other judges who are bound to refer the matter back to them (for re-allocation) in any case where they require it to be looked into by a larger bench of more judges.
On the administrative side, the chief justice carries out functions of maintenance of the roster, appointment of court officials and general and miscellaneous matters relating to the supervision and functioning of the Supreme Court.</p> </div></div><br>
 -->



      
      
 
<footer>
    <div class="container">
          <div class="row">


            
            <div class="col-md-2">
              <div class="widget">
                <h5 class="widgetheading">Quick Links</h5>
                <ul class="link-list">
                  <li><a href="logout.php"><i class="fa fa-chevron-right icred"></i> Logout</a></li>
                  <li><a href="client_profile.php"><i class="fa fa-chevron-right icred"></i> Profile</a></li>


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
