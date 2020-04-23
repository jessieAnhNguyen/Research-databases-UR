<!DOCTYPE html>
<html>
<head>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

<?php
require_once('db_setup.php');
$sql = "USE ashrest2_1;";
if ($conn->query($sql) === TRUE) {
   // echo "using Database tbiswas2_company";
} else {
   echo "Error using  database: " . $conn->error;
}
// Query:
$Title = $_POST['title'];
$No_of_researchers = $_POST['no_of_researchers'];
$Vacancy = $_POST['vacancy'];
$Funding = $_POST['funding'];
$StartDate = $_POST['startDate'];
$EndDate = $_POST['endDate'];
$Contact_email = $_POST['contact_email'];
$Contact_position = $_POST['contact_position'];

if(empty($No_of_researchers)){$No_of_researchers = 0;}
if(empty($Vacancy)){$Vacancy = 0;}
if(empty($Funding)){$Funding = 0;}
if(empty($StartDate)){$StartDate = date('Y/m/d');}
if(empty($EndDate)){$EndDate = date('Y/m/d');}


$sql = "INSERT INTO research values ('$Title',$No_of_researchers,$Vacancy,$Funding,$StartDate,$EndDate,'$Contact_email','$Contact_position');";

echo $sql;
#$sql = "SELECT * FROM Department where Username like 'amai2';";
$result = $conn->query($sql);

if ($result === TRUE) {
    echo "New record created successfully";
    header("Location: add_successful.html");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
//$stmt = $conn->prepare("Select * from Students Where Username like ?");
//$stmt->bind_param("s", $username);
//$result = $stmt->execute();
//$result = $conn->query($sql);
?>

<?php
$conn->close();
?>

</body>
</html>





