<!DOCTYPE html PUBLIC "-//W3C//Dp XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/Dp/xhtml1-transitional.dp">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Feedback form</title>

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

<body >

<div class="top-header">
   <div class="container">
      <div class="row">
         <div class="col-md-4 col-12 text-md-left text-center leftmy">
            <ul class="top_nav1">
              <li><i class="fa fa-calendar"></i> <span id="datedisplay"></span></li>
              <li><i class="fa fa-clock-o"></i> <span id="clockDisplay"></span></li>
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

         


   
           </ul>
        </div>
      </div>
    </div>
  </div>
 
  <!-- <div class="title">
    <div class="row2">
      <h1>Feedback Form:</h1>
  </div>
    </div> -->
    <div align="center"><span class="title" style="font-weight: bold; font-size:30px">FEEDBACK FORM</span> </div>
      <hr align="center" width="40%">	

    <form target="blank" style="background-color: bisque;width: 25vw;margin-left: 37vw;"  class="box1" action="https://script.google.com/macros/s/AKfycbwfz2iDdy_MBn48jWNNCudEMD39UsjMHTcJDvOyFzY4QRfxudjaLOhvRfzixL9Gbhxp/exec" method="post" >

        <label for="name">Name<strong>*</strong></label><br>
        <input type="text" name="Name" placeholder="Full Name" required><br><br>
        <label for="number">Number<strong>*</strong></label><br>
        <input name="Mobile"
    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
    type = "number"
    placeholder="Mobile Number"
    maxlength = "10"
 /><br><br>
        <label for="email">Email Address<strong>*</strong></label><br>
        <input type="email" name="Email" placeholder="Email Address" required> <br><br>
        <label for="feedback">Feedback<strong>*</strong></label><br>
        
        <textarea type="message" name="Feedback" placeholder="Write your feedback here..."  style=width:300px;height:100px required></textarea> <br><br><button type="submit" name="submit">Submit</button>
  </form>
 
 



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
        <?php
      if (isset($_POST['Name'])) {

        $_SESSION['Name'] = $_POST["Name"];
    
        echo "<input type='submit' name='submit' method='submit' value='submit'>";
        echo "</form>";
        echo "</h1>";
        echo "</div>";
    
        if(isset($_POST['submit']) && ($_POST['submit'] == "submit")) { 
            unset($_SESSION['Name']); 
        }

        
    }
    ?>
    </script>




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
