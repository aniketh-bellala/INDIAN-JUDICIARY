<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "INDIAN_JUDICIARY";
$portnumber = 3306;

$connection = mysqli_connect($server, $username, $password, $dbname, $portnumber);
 

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $fName =  $_POST['full_name'];
    $Email = $_POST['email'];
    $Aadhaar = $_POST['aadhaar'];
    $DOB = $_POST['dob'];
    $Mobile = $_POST['mobile'];
    $Address = $_POST['address'];
    $Password = $_POST['password'];


    $query = "INSERT into BIODATA values($Aadhaar, '$fName', '$DOB','$Address',$Mobile,'$Email', '$Password');";
    $result = mysqli_query($connection, $query);

    $temp = "SELECT CONCAT('C',CAST(MAX(SUBSTR(Client_ID,2))AS INT)+1) as CID FROM CLIENTS;";
    $result2 = mysqli_query($connection, $temp);
    $row = $result2->fetch_assoc(); 
    echo $temp;

    $query1 = "INSERT into CLIENTS values('$row[CID]','$Aadhaar');";
    echo $query1;
    $result1 = mysqli_query($connection, $query1);

    if ($result && $result1){
        header("Location: prelogin.php");
        exit();
    }
    else
        echo "false";
}
