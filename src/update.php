<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for item update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	$name=$_POST['Name'];
	$Details=$_POST['Details'];
	$Price=$_POST['Price'];
		
	// update user data
	$result = mysqli_query($conn, "UPDATE samsung SET name='$name',Details='$Details',Price='$Price' WHERE id=$id");
	
	// Redirect to homepage to display updated item in list
	header("Location: home.php");
}
?>
<?php
// Display selected item data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech item data based on id
$result = mysqli_query($conn, "SELECT * FROM samsung WHERE id=$id");

while($row = mysqli_fetch_array($result))
{
	$name = $row['Name'];
	$Details = $row['Details'];
	$Price = $row['Price'];
}
?>
<html>
<head>

    <link rel="stylesheet" href="styles/styles.css">	
	<title>Edit Item Data</title>
    <style>
        body{background:url(images/e-Mall.png);}

    </style>
</head>

		<header>
			<img class = "logo" src="images/eMall_logo2.gif" alt="logo" width="300px" height="150px" align="left">
			<ul class="menu">
				<li class="menu"><a href="Shoping cart.php"><img src="Icons\Shoppingcart_icon.png" alt="Profile icon" width="25px" height="25px"></a> <br></li>
				<li class="menu"><a href="user.php"><img src="Icons\Profile_icon.png" alt="Profile icon" width="25px" height="25px">Account </a> <br></li>
				<li class="menu"><a href="Watchlist.php"> Watchlist </a> <br></li>
				<li class="menu"><a href="#"> Ship to </a> <br></li>
				<li class="menu"><a href="Shops Display Page.html"> Shops </a> <br></li>
				<li class="menu"><a href="eMall_Project.html"><img src="Icons\Home_icon.png" alt="Home icon" width="25px" height="25px">Home </a><br></li>
				<li><center><div class="search-container">
					<form action="/action_page.php">
						<input type="text" placeholder="Search.." name="search">
						<button type="submit">Search</button>
					</form>
				    </div>
				    </center>
				</li>
			</ul>
          
		</header>



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

		<footer>
			<table style="width: 100%">
				<tr>
					<th>Quick Access</th>
					<th>About Us</th>
					<th>Healp & Contact</th>
					<th>Stay Connected</th>
				</tr>
				<tr>
					<td><a href="eMall_Project.html"> Home </a></td>
					<td><a href="About us.html"> Company info </a></td>
					<td><a href="Contact us.php"> Help </a></td>
					<td><a href="#"> Facebook </a></td>
				</tr>
				<tr>
					<td><a href="Shops Display Page.html"> Shops </a></td>
					<td><a href="#"> News </a></td>
					<td><a href="Contact us.php"> Contact us </a></td>
					<td><a href="#"> twitter </a></td>
				</tr>
				<tr>
					<td><a href="Watchlist.php"> Watchlist </a></td>
					<td><a href="#"> Policies </a></td>
					<td></td>
					<td><a href="#"> Instagram </a></td>
				</tr>
				<tr>
					<td><a href="user.php"> Account </a></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</table>
				

			
		</footer>
</body>
</html>

