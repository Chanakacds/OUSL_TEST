<?php

$conn = mysqli_connect("localhost", "root", "","usdl");
	mysqli_select_db($conn,"usdl") or die("Cannot connect to database");
 
 $fname = $_REQUEST['fname'];
 $lname =$_REQUEST['lname'];
 $nation_id = $_REQUEST['nation_id'];
 $mobile_Number =$_REQUEST['mobile_Number'];
 $email  =$_REQUEST['email'];
 $degree = $_REQUEST['degree'];
 $class = $_REQUEST['class'];
 $university = $_REQUEST['university'];
 $date = $_REQUEST['date'];
 $company = $_REQUEST['company'];
 $position = $_REQUEST['position'];
 $period = $_REQUEST['period'];

 //var_dump($position); 



 $sql = "INSERT INTO usdl (firstname, lastname, email, class, companyname, moblile_nu, nation_id, periods, postition, title_degree, uniname)
 VALUES ('$fname', '$lname', '$email', '$class', '$company', '$mobile_Number', '$nation_id', '$period', '$position','$degree', '$university')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();


?>


