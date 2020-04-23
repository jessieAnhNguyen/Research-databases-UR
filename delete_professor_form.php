<html>
<head>
<link rel="stylesheet" href="form8.css">
<script src="form8.js"></script>

</head>
<body>
<?php
require_once('db_setup.php');
$sql = "USE ashrest2_1;";
if ($conn->query($sql) === TRUE) {
    //echo "using Database tbiswas2_company";
} else {
   echo "Error using  database: " . $conn->error;
}

$sql = "SELECT DepartmentName FROM Department;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    //echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
<div class="title">Search the Professor you want to delete</div>
<div class="line"></div>
<div class="image"><img src="uorImage.png"></div>

<div class="form-style-8">
<form action="delete_professor.php" method="post">
   ProfessorID:  <input type="text" name="pid"><br>
   DepartmentName:  <select name = "dname">
        <?php
         $dname = "Any";
        echo"<option value='$dname'>$dname</option>";
  while($rows = $result->fetch_assoc()){
          $dname = $rows['DepartmentName'];
          echo"<option value='$dname'>$dname</optoin>";
         }
  ?>
  </select>
   FirstName:  <input type="text" name="fname"><br>
   MI:  <input type="text" name="mi"><br>
   LastName:  <input type="text" name="lname"><br>
   Email:  <input type="text" name="email"><br>

   <input type="submit" class = "buttondesign">
</form>
</div>
</body>
</html>
