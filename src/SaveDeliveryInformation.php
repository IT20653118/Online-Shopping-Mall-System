<?php
	//Linking the configuration file
	include_once("config.php");
	
?>

<?php
	$name=$_POST["Name"];
	$address=$_POST["Address"];
	$postalcode=$_POST["PostalCode"];
	$mobilenumber=$_POST["MobileNumber"];
	
    $sql="INSERT INTO delivery_information(C_name,C_address,Postal_code,C_mobileno) VALUES('$name','$address','$postalcode','$mobilenumber')";

	if($conn->query($sql)){
		echo "Inserted successfully";
		//header("Location:Order Details Page.html");
	}
	else{
		echo "Error:". $conn->error;
	}
	
	$conn->close();


?>