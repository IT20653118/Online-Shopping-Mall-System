  <!DOCTYPE html>
	<html>
	<head>
		<link rel="stylesheet" href="../styles/styles.css">
		<title>Shopping_Cart</title>
		<style>
         .button {
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            background-color: #008CBA;
          }
          .button:hover{
            background-color: #737373;
          }
          .table1{
          	background-color: #cceeff;
          	border-color: blue;
          }
        </style>
	</head>
	<body>
		<header>
			<img class = "logo" src="../images/eMall_logo2.gif" alt="logo" width="300px" height="150px" align="left">
			<ul class="menu">
				<li class="menu"><a href="myShopping_cart.php"><img src="../Icons\Shoppingcart_icon.png" alt="Profile icon" width="25px" height="25px"></a> <br></li>
				<li class="menu"><a href="../user.php"><img src="../Icons\Profile_icon.png" alt="Profile icon" width="25px" height="25px">Account </a> <br></li>
				<li class="menu"><a href="../watchlist.php"> Watchlist </a> <br></li>
				<li class="menu"><a href="#"> Ship to </a> <br></li>
				<li class="menu"><a href="../Shops Display Page.html"> Shops </a> <br></li>
				<li class="menu"><a href="../eMall_Project.html"><img src="../Icons\Home_icon.png" alt="Home icon" width="25px" height="25px">Home </a><br></li>
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
		
  
		<table class="table1" border="1" align="center" width="50%" > 
			<tr> 
				<td>
					<br>
					<center>
					<img src="../images/empty-cart.png" alt="empty-cart" width="100px" height="100px">
					</center>
					<h5 style="color:blue;text-align:center;font-size:75px;">No Items Available<br> In The Shopping Cart</h5> 
					<center>
					<a href="../eMall_Project.html"><button class="button">Home</button></a>
					</center>
	            </td>
	        </tr>
	    </table> 


		<hr class="new1">

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
					<center>
					<td><a href="eMall_Project.html"> Home </a></td>
					<td><a href="About us.html"> Company info </a></td>
					<td><a href="../Contact us.php"> Help </a></td>
					<td><a href="#"> Facebook </a></td>
					</center>
				</tr>
				<tr>
					<td><a href="Shops Display Page.html"> Shops </a></td>
					<td><a href="#"> News </a></td>
					<td><a href="../Contact us.php"> Contact us </a></td>
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