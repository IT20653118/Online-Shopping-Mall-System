<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for item update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	$name=$_POST['First_Name'];
	$Details=$_POST['Last_Name'];
	$Price=$_POST['Email'];
		
	// update user data
	$result = mysqli_query($conn, "UPDATE samsung SET name='$First_Name',Details='$Last_Name',Price='$Email' WHERE id=$id");
	
	// Redirect to homepage to display updated item in list
	header("Location: userdata.php");
}
?>
<?php
// Display selected item data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech item data based on id
$result = mysqli_query($conn, "SELECT * FROM user WHERE id=$id");

while($row = mysqli_fetch_array($result))
{
	$name = $row['First_Name'];
	$Details = $row['Last_Name'];
	$Price = $row['Email'];
}
?>
<html>
<head>

    	
	<title>Edit User Data</title>
    <style>
        body{background:url(images/e-Mall.png);}

    </style>
</head>
<body>
  

	<form method="get" action="Home.php">
    <button type="submit">Home</button>
</form>
	<br/>
	<form name="update_Item" method="post" action="update.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="Name" value=<?php echo $name;?>></td>
			</tr>
			<tr> 
				<td>Details</td>
				<td><input type="text" name="Details" value=<?php echo $Details;?>></td>
				
			</tr>
			<tr> 
				<td>Price</td>
				<td><input type="text" name="Price" value=<?php echo $Price;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</table>
</body>
</html>