

<!DOCTYPE html>
<html>
   <head>
		<link rel="stylesheet" href="styles/styles.css">
		<title>Contact_Us</title>
		<style>
 input[type=tex] {
 
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
body {
  background-color: lightblue;
}
footer{
	 font-size: 16px;
	 font-color: black
}
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 14px 2px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 10%;
}

input[type=reset] {
  background-color: red;
  color: white;
  padding: 14px 2px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 10%;
}
          }
          .button:hover{
            background-color: #737373;
          }
          .table1{
          	background-color: #cceeff;
          	border-color: blue;
</style> 
	</head>
<body>

   <header>
			<img class = "logo" src="images/eMall_logo2.gif" alt="logo" width="300px" height="150px" align="left">
			<ul class="menu">
				<li class="menu"><a href="Shopping_Cart/myShopping_cart.php"><img src="Icons\Shoppingcart_icon.png" alt="Profile icon" width="25px" height="25px"></a> <br></li>
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
        <hr class="new1">


        <table class="table1" border="1" align="center" width="30%" > 
		  <tr> 
			<td>
				<center>
                  <p><b> Hi!!<br>
                     Tell US Your <br>
	                   Problem
	            
	<br>
</p>	
<form  method="post" action="Contact us.php">
 <input type="tex" name="name" placeholder="Subject" required><br>
 <br>
<textarea name="comment" rows="15" cols="60" placeholder="Comment"required></textarea>
<br>
<br>

<input type="submit">
<input type="Reset">
</center>
</form>
 
 
 <?php

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$Subject = $_POST['Subject'];
		$Comment = $_POST['Comment'];
		
		
		
		// include database connection file
		require_once("config.php");
				
		// Insert user data into table
		$sql="INSERT INTO  contact (Subject,Comment) VALUES('$Subject','$Comment')";
		$result = mysqli_query($conn,$sql);
		
		// Show message when user added
		//echo "Item added successfully. <br><a href='home.php'>View Items</a>";
	}
	?>
	

               </td>
	        </tr>
	    </table> 
     <hr class="new1">

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