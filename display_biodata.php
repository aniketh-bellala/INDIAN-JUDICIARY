<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Biodata</title>
  <style>
    table{
      margin: 50px;
    }
    body {
    color: #566787;
    background: #f5f5f5;
    font-family: 'Roboto', sans-serif;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
	min-width: 1000px;
    background: #fff;
    padding: 20px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {
    font-size: 15px;
    padding-bottom: 10px;
    margin: 0 0 10px;
    min-height: 45px;
}
.table-title h2 {
    margin: 5px 0 0;
    font-size: 24px;
}
.table-title select {
    border-color: #ddd;
    border-width: 0 0 1px 0;
    padding: 3px 10px 3px 5px;
    margin: 0 5px;
}
.table-title .show-entries {
    margin-top: 7px;
}
.search-box {
    position: relative;
    float: right;
}
.search-box .input-group {
    min-width: 200px;
    position: absolute;
    right: 0;
}
.search-box .input-group-addon, .search-box input {
    border-color: #ddd;
    border-radius: 0;
}
.search-box .input-group-addon {
    border: none;
    border: none;
    background: transparent;
    position: absolute;
    z-index: 9;
}
.search-box input {
    height: 34px;
    padding-left: 28px;		
    box-shadow: none !important;
    border-width: 0 0 1px 0;
}
.search-box input:focus {
    border-color: #3FBAE4;
}
.search-box i {
    color: #a0a5b1;
    font-size: 19px;
    position: relative;
    top: 2px;
    left: -10px;
}
table.table tr th, table.table tr td {
    border-color: #e9e9e9;
}
table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
}
table.table td:last-child {
    width: 130px;
}
table.table td a {
    color: #a0a5b1;
    display: inline-block;
    margin: 0 5px;
}
table.table td a.view {
    color: #03A9F4;
}
table.table td a.edit {
    color: #FFC107;
}
table.table td a.delete {
    color: #E34724;
}
table.table td i {
    font-size: 19px;
}    
.pagination {
    float: right;
    margin: 0 0 5px;
}
.pagination li a {
    border: none;
    font-size: 13px;
    min-width: 30px;
    min-height: 30px;
    padding: 0 10px;
    color: #999;
    margin: 0 2px;
    line-height: 30px;
    border-radius: 30px !important;
    text-align: center;
}
.pagination li a:hover {
    color: #666;
}	
.pagination li.active a {
    background: #03A9F4;
}
.pagination li.active a:hover {        
    background: #0397d6;
}
.pagination li.disabled i {
    color: #ccc;
}
.pagination li i {
    font-size: 16px;
    padding-top: 6px
}
.hint-text {
    float: left;
    margin-top: 10px;
    font-size: 13px;
}
  </style>
</head>

<body>
  <?php
  $server = "localhost";
  $database = "INDIAN_JUDICIARY";
  $username = "root";
  $password = "";
  $portnumber = 3306;

  $conn = mysqli_connect($server, $username, $password, $database, $portnumber);

  $query = "SELECT * from BIODATA;";


  $result = mysqli_query($conn, $query);


  echo "<table class='table table-bordered'>";
  echo "<thead thead-dark>";
  echo "<tr>
        <th scope='col'>Aadhaar_ID</th>
        <th scope='col'>First_Name</th>
        <th scope='col'>Last_Name</th>
        <th scope='col'>Email_ID</th>
        <th scope='col'>Mobile_Number</th>
        <th scope='col'>Date_Of_Birth</th>
        <th scope='col'>Address</th>
        <th scope='col'>Password</th>
      </tr>";
  echo "</thead>";
  echo "<tbody>";

  while ($row = mysqli_fetch_assoc($result)) {

    $aadhaar_fetched = $row['Aadhaar_ID'];
    $fName_fetched = $row['First_Name'];
    $lName_fetched = $row['Last_Name'];
    $email_fetched = $row['Email_ID'];
    $dob_fetched = $row['Date_Of_Birth'];
    $mobile_fetched = $row['Mobile_Number'];
    $address_fetched = $row['Address'];
    $password_fetched = $row['Password'];
    echo "<tr>
        <td>$aadhaar_fetched</td>
        <td>$fName_fetched</td>
        <td>$lName_fetched</td>
        <td>$email_fetched</td>
        <td>$dob_fetched</td>
        <td>$mobile_fetched</td>
        <td>$address_fetched</td>
        <td>$password_fetched</td>
      </tr>";
  }


  echo "</tbody>";
  echo "</table>";
  ?>

</body>

</html>