<!DOCTYPE html>
<html>

<head>
		<link rel="stylesheet" href="styles/styles.css">
		<title>Home_Page</title>
	<style>
        body{background:url(images/e-Mall.png);}

    </style>
		
</head>
	<body>
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
<!--<a href="add.php"><button class="add">Add New Item</button</a-->
<form method="get" action="add.php">
    <button type="submit">Add New Item</button>
</form>
<br/></br>
<table width='100%' border=1>
    
      <tr>
        <th>Name</th> <th>Details</th> <th>Price</th> <th>Update</th>
    </tr>
    
    <?php
        // Create database connection using config file
        include_once("config.php");

        // Fetch all items data from users table
        $sql = "SELECT * FROM samsung ORDER BY id DESC";
        $result = mysqli_query($conn, $sql);


      // output data of each row
      if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row['Name']."</td>";
				//echo "<tr>".$row['photo']."</tr><br>";
                echo "<td>".$row['Details']."</td>";
                echo "<td>".$row['Price']."</td>";
                echo "<td><a href='update.php?id=$row[id]'>Edit</a> | <a href='delete.php?id=$row[id]'>Delete</a></td>";
                echo "</tr>";
				
				
            }
        }

    ?>
    </table>
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