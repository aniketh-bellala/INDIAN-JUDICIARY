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

if (isset($_POST['submit'])) {
    $current_lawyer = $_SESSION['lawyer'];
    $current_case = $_POST['accept1'];

    $sql = "SELECT * FROM CASE_DETAILS where CASE_ID = '$current_case';";
    $result = $mysqli->query($sql);
    $row = $result->fetch_assoc(); 

    $req_pros = $row['Request_Pros'];
    $req_accs = $row['Request_Accs'];
   



    if($req_pros==$current_lawyer)
    {
        $sql1 = "UPDATE CASE_DETAILS SET Prosecutor='$current_lawyer' WHERE Case_ID='$current_case';";
        $result1 = $mysqli->query($sql1);
        
    }
    else if ($req_accs==$current_lawyer)
    {
        $sql1 = "UPDATE CASE_DETAILS SET Accussor='$current_lawyer' WHERE Case_ID='$current_case';";
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
$sql2 = "UPDATE CASE_RECORDS A JOIN CASE_DETAILS B ON A.Case_ID = B.Case_ID SET A.Final_Verdict='Unscheduled' WHERE A.Case_ID like '$current_case' and B.Accussor not like '-' and B.Prosecutor not like '-';";
        $result2 = $mysqli->query($sql2);
header("Location: client_case_confirm.php");
exit();
?>