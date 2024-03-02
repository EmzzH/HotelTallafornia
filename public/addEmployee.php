<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "templates/header.php";

include "../src/functions/newEmployee.php";
addNewEmployee();
?>

<h2>Add A New Employee</h2>
<div id="dataForm">
	<form method="post">
		
<!--		<label for="userID">UserID</label> -->
<!--		<input type="text"name="userID" id="userID"> -->
	
		<label for="name">Name</label> 
		<input type="text"name="name" id="name"> 
					
		<label for="dob">Date of Birth</label>
		<input type="text" name="dob" id="dob">
		
		<label for="address">Address</label>
		<input type="text" name="address" id="address"> 
		
		<label for="ph_no">Phone No</label>
		<input type="text" name="ph_no"id="ph_no">
		
<!--		<label for="employeeID">EmployeeID</label> -->
<!--		<input type="text"name="employeeID" id="employeeID"> -->
		
		<label for="job">Job</label> 
		<input type="text" name="job" id="job">
		
		<br>
		<input type="submit" name="submit" value="Next">
	</form>
</div>
<a href="index.php">Back to home</a>


<?php include "templates/footer.php"; ?>