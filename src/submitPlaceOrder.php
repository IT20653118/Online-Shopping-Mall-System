<?php
	//Linking the configuration file
	include_once("config.php");
	
?>

<?php
	$name=$_POST["Name"];
	$address=$_POST["Address"];
	$postalcode=$_POST["PostalCode"];
	$mobilenumber=$_POST["MobileNumber"];
	$total=$_POST["Total"];
	
    $sql="INSERT INTO customer_order(C_name,C_address,Postal_code,C_mobileno,Price) VALUES('$name','$address','$postalcode','$mobilenumber','$total')";

	if($con->query($sql)){
		echo "Inserted successfully";
	}
	else{
		echo "Error:". $con->error;
	}
	
	$con->close();


?>