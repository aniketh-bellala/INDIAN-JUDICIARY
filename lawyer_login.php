<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lawyer Login</title>

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
<style>
    .login-form {
        width: 340px;
        margin: 200px auto;
        font-size: 15px;
        flex-wrap: wrap;
    }

    .login-form form {
        margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }

    .login-form h2 {
        margin: 0 0 15px;
    }

    .form-control,
    .btn {
        min-height: 38px;
        border-radius: 2px;
    }

    .btn {
        font-size: 15px;
        font-weight: bold;
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
 
</head>

<body>
<?php
  $server = "localhost";
  $username = "root";
  $password = "";
  $dbname = "INDIAN_JUDICIARY";
  $portnumber = 3306;

  $connection = mysqli_connect($server, $username, $password, $dbname, $portnumber);

  if(isset($_POST['submit'])){
    $LawyerID = $_POST['lawyer'];
    $Password = $_POST['password'];

    $Lawyer_search = "SELECT * from ADVOCATES where Lawyer_ID='$LawyerID'";
    $query = mysqli_query($connection,$Lawyer_search);

    $Lawyer_count = mysqli_num_rows($query);

    if($Lawyer_count){
      $Lawyer_pass = mysqli_fetch_assoc($query);
      $db_pass = $Lawyer_pass['Password'];

      $_SESSION['lawyer'] = $Lawyer_pass['Lawyer_ID'];

      // $pass_decode = password_verify($Password,$db_pass);

      if($Password === $db_pass){
        echo "Login Successfull!";
        header("Location: lawyer_welcome1.php");
        exit();
      }
      else{
        header("Location: lawyer_login.php?err=true");       }
    }
    else{
      header("Location: lawyer_login.php?err=true");     }
  }
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
  
  
  
  
  <div class="main_navigation">
    <div class="container">
      <div class="row">
        <div id='cssmenu'>
             <div id="loginBar">
              <span class="loginSpan"></span><span class="loginSpan">Login</span>
             </div>
         </div>
      </div>
    </div>
  </div>

  <div class>
    <div class="login-form">
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
            <h2 class="text-center">Log in</h2>
            <?php if (isset($_GET['err'])) { ?>
                    <div class="alert alert-danger text-center"><?php echo "Invalid email-id or password!"; ?></div>
                    <?php } ?>
            <div class="form-group">
                <input type="text" class="form-control" name="lawyer" placeholder="Lawyer ID" required="required">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password" required="required">
            </div>
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary btn-block">Log in</button>
            </div>
            <div class="clearfix">
                <!-- <label class="float-left form-check-label"><input type="checkbox"> Remember me</label> -->
                <!-- <p class="text-center float"><a href="signup.html">Create an Account</a></p> -->
            </div>
        </form>
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
