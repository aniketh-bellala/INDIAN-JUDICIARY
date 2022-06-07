<!DOCTYPE html PUBLIC "-//W3C//Dp XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/Dp/xhtml1-transitional.dp">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Gallery</title>

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
           <li><a href="prelogin.php"><i class="fa fa-reply-all"></i> Login</a></li>
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
            <li><a href="index.php">Home</a></li>
            <li class='active'><a href="#">About Us</a>
              <ul>
                 <li><a href="history.php">History</a></li>
                 <li><a href="organizationstructure.php">Organisation Structure</a></li>
                 <li><a href="judicialacademies.php">Judicial Academies</a></li>
                 <li><a href="roles.php">Roles/Functions</a></li>
                 
              </ul>
             </li>
            <li><a href="judges_profile_home.php">Judges Profile</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="calendar.php">Calendar</a></li>
            <li><a href="constitution.php">Constitution</a></li>
             <li><a href="contactus.php">Contact Us </a></li>
         


   
           </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- <div class="title">
  <div class="row2">f
    <h1>Gallery</h1>
</div>
  </div> -->
  <div align="center"><span class="title" style="font-weight: bold; font-size:30px">GALLERY</span> </div>
  <hr align="center" width="40%">	
  <div class="main_slider">
    <div id="demo" class="carousel slide" data-ride="carousel">



<!-- The slideshow -->
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="images/1.jpg"  width=100% >
    </div>
  <div class="carousel-item ">
    <img src="images/2.jpg"  width=100% > 
  </div>
  <div class="carousel-item ">
    <img src="images/3.jpg"  width=100% >
    </div>
  <div class="carousel-item ">
    <img src="images/4.jpg"  width=100% > 
  </div>
  <div class="carousel-item ">
    <img src="images/5.jpg"  width=100% >
    </div>
  <div class="carousel-item ">
    <img src="images/6.jpg"  width=100% > 
  </div>
  <div class="carousel-item">
    <img src="images/sc1.jpg"  width=100% >
    </div>
  <div class="carousel-item ">
    <img src="images/history.jpg"  width=100% > 
  </div>
</div>

<!-- Left and right controls -->
<a class="carousel-control-prev" href="#demo" data-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
  <span class="carousel-control-next-icon"></span>
</a>

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
