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

$sql = "SELECT DISTINCT Title FROM Works_on;";
$result2 = $conn->query($sql);
if ($result2->num_rows > 0) {

}
else{
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
<div class="title">Search for the Professor you want to delete</div>
<div class="line"></div>
<div class="image"><img src="uorImage.png"></div>

<div class="form-style-8">
<form action="deleteProfessor.php" method="post">
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
   Research (title) <select name = "title">
        <?php
         $title = "Any";
    echo "<option value='$title'>$title</optoin>";
    while($rows2 = $result2->fetch_assoc()){
        $title = $rows2['Title'];
        echo"<option value='$title'>$title</optoin>";
    }
          ?>
    </select>

   <input type="submit" class = "buttondesign">
</form>
</div>
</body>
</html>