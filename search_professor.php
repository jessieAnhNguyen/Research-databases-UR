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

$pid = $_POST['pid'];
$did = $_POST['did'];
$fname = $_POST['fname'];
$mi = $_POST['mi'];
$lname = $_POST['lname'];
$email = $_POST['email'];

$foundsomething = 0;

$sql = "SELECT * FROM Professor";
if(!empty($pid)){
  if($foundsomething == 0){
          $foundsomething = 1;
          $sql = $sql." WHERE ProfessorID = ".$pid;
  }else{
    $sql = $sql." and ProfessorID = ".$pid;
  } 
}
if(!empty($did)){
  if($foundsomething == 0){
          $foundsomething = 1;
          $sql = $sql." WHERE DepartmentID = ".$did;
  }else{
    $sql = $sql." and DepartmentID = ".$did;
  }
    
}
if(!empty($fname)){
  if($foundsomething == 0){
          $foundsomething = 1;
          $sql = $sql." WHERE FirstName = '".$fname."'";
  }else{
    $sql = $sql." and FirstName = '".$fname."'";
  }
    
}
if(!empty($mi)){
  if($foundsomething == 0){
          $foundsomething = 1;
          $sql = $sql." WHERE MI = '".$mi."'";
  }else{
    $sql = $sql." and MI = '".$mi."'";
  }
    
}
if(!empty($lname)){
  if($foundsomething == 0){
          $foundsomething = 1;
          $sql = $sql." WHERE LastName = '".$lname."'";
  }else{
    $sql = $sql." and LastName = '".$lname."'";
  }
    
}
if(!empty($email)){
  if($foundsomething == 0){
          $foundsomething = 1;
          $sql = $sql." WHERE Email = '".$email."'";
  }else{
    $sql = $sql." and Email = '".$email."'";
  }
    
}

echo $sql;
//$sql = "SELECT * FROM Professor";
$result = $conn->query($sql);
if($result->num_rows > 0){

?>
   <table class="table table-striped">
      <tr>
         <th>ProfessorID</th>
         <th>DepartmentID</th>
         <th>FirstName</th>
         <th>MI</th>
         <th>LastName</th>
         <th>Email</th>
      </tr>
<?php
while($row = $result->fetch_assoc()){
?>
      <tr>
          <td><?php echo $row['ProfessorID']?></td>
          <td><?php echo $row['DepartmentID']?></td>
          <td><?php echo $row['FirstName']?></td>
          <td><?php echo $row['MI']?></td>
          <td><?php echo $row['LastName']?></td>
          <td><?php echo $row['Email']?></td>
      </tr>

<?php
}
}
else {
echo "Nothing to display";
}
?>

    </table>

<?php
$conn->close();
?>

</body>
</html>
