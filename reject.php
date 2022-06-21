<?php
session_start();

if (!isset($_SESSION['lawyer'])) {
    echo "You are logged out!";
    header('location:index.php');
}

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


$login_lawyerId = $_SESSION['lawyer'];

if (isset($_POST['submit1'])) {
    $current_lawyer = $_SESSION['lawyer'];
    $current_case = $_POST['reject1'];

    $sql = "SELECT * FROM CASE_DETAILS where CASE_ID = '$current_case';";
    $result = $mysqli->query($sql);
    $row = $result->fetch_assoc(); 

    $req_pros = $row['Request_Pros'];
    $req_accs = $row['Request_Accs'];



    if($req_pros==$current_lawyer)
    {
        $sql1 = "UPDATE CASE_DETAILS SET Request_Pros='NULL' WHERE Case_ID='$current_case';";
        $result1 = $mysqli->query($sql1);
    }
    else if ($req_accs==$current_lawyer)
    {
        $sql1 = "UPDATE CASE_DETAILS SET Request_Accs='NULL' WHERE Case_ID='$current_case';";
        $result1 = $mysqli->query($sql1);
    }
    else
    {
        echo "Error1";
    }
    
}
else{
    echo "Error2";
}
header("Location: client_case_confirm.php");
exit();
?>