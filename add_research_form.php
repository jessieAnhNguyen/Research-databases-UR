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
<div class="title">Add Research</div>
<div class="line"></div>
<div class="image"><img src="uorImage.png"></div>
<div class="form-style-8">

<form action="add_research.php" method="post">
   Title:  <input type="text" name="title"><br>
   No of researchers:  <input type="number" name="no_of_researchers"><br>
   Vacancy:  <input type="number" name="vacancy"><br>
   Funding:  <input type="number" name="funding"><br>
   Start Date:  <input type="date" name="startDate"><br>
   End Date:  <input type="date" name="endDate"><br>
   Contact email:  <input type="text" name="contact_email"><br>
   Contact position:  <input type="text" name="contact_position"><br>
   DepartmentName:  <select name = "dname">
        <?php
	while($rows = $result->fetch_assoc()){
          $dname = $rows['DepartmentName'];
          echo"<option value='$dname'>$dname</optoin>";
        }?>
      </select>

  <input type="submit" class = "buttondesign">
</form>
</div>

</body>
</html>
