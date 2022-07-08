<html>
<head>
    <link rel="stylesheet" href="styles/styles.css">
	<title>Add Users</title>
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
    <button type="submit">Go to Home</button>
</form>
	<br/>

	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text"name="name"placeholder="Name"></td>
			</tr>
			<tr> 
				<td>Details</td>
				<td><input type="text"name="Details" placeholder="Details"></td>
				
			</tr>
			<tr> 
				<td>Price</td>
				<td><input type="text"name="Price" placeholder="Price"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit"name="Submit" value="add"></td>
			</tr>
		</table>
	</form>
	
	<?php

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$name = $_POST['name'];
		$Details = $_POST['Details'];
		$Price = $_POST['Price'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($conn, "INSERT INTO samsung (Name,Details,Price) VALUES('$name','$Details','$Price')");
		
		// Show message when user added
		echo "Item added successfully. <br><a href='home.php'>View Items</a>";
	}
	?>
</body>
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
