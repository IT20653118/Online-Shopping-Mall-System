<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="styles.css">
		<title>Product Display</title>
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}


.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}
.card button:hover {
  opacity: 0.7;
}

body {
  background-color: lightblue;;
}

hr{
	border: 2px solid black;
}

</style>
</head>
<body>

 <header>
			<img class = "logo" src="eMall_logo2.gif" alt="logo" width="300px" height="150px" align="left">
			<ul class="menu">
				<li class="menu"><a href="https://courseweb.sliit.lk/course/view.php?id=4619"><img src="Icons\Shoppingcart_icon.png" alt="Profile icon" width="25px" height="25px"></a> <br></li>
				<li class="menu"><a href="https://courseweb.sliit.lk/course/view.php?id=4619"><img src="Icons\Profile_icon.png" alt="Profile icon" width="25px" height="25px">Account </a> <br></li>
				<li class="menu"><a href="https://courseweb.sliit.lk/course/view.php?id=4619"> Watchlist </a> <br></li>
				<li class="menu"><a href="https://courseweb.sliit.lk/course/view.php?id=4619"> Ship to </a> <br></li>
				<li class="menu"><a href="https://courseweb.sliit.lk/course/view.php?id=4619"> Shops </a> <br></li>
				<li class="menu"><a href="https://courseweb.sliit.lk/course/view.php?id=4619"><img src="Icons\Home_icon.png" alt="Home icon" width="25px" height="25px">Home </a><br></li>
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
		<hr>
<table  style="width: 100%">
                <tr>
					<th><h2 style="text-align:center">Product 1</h2></th>
					<th><h2 style="text-align:center">Product 2</h2></th>
					<th><h2 style="text-align:center">Product 3</h2></th>
					<th><h2 style="text-align:center">Product 4</h2></th>
					<th><h2 style="text-align:center">Product 5</h2></th>
					
				</tr>
	<tr>
 <td>

  <div class="card">
  <a href="Product.html"><img src="pic.jpg" alt="Shop7" width="100%"></a>
  <h1>Jeans</h1>
  <p class="price">$14.99</p>
  
  <p><button>Add to Cart</button></p>
  </div>
   </td>	
				
 
   
    <td>

  <div class="card">
  <img src="../w3images/jeans3.jpg" alt="T-Shirt" style="width:100%">
  <h1>T-Shirt</h1>
  <p class="price">$8.99</p>
  
  <p><button>Add to Cart</button></p>
  </div>
   </td>
   
    <td>

  <div class="card">
  <img src="../w3images/jeans3.jpg" alt="Frock" style="width:100%">
  <h1>Frock</h1>
  <p class="price">$10.99</p>
  
  <p><button>Add to Cart</button></p>
  </div>
   </td>
   
   
<td>

<div class="card">

  <img src="../w3images/jeans3.jpg" alt="Shirt" style="width:100%">
  <h1>Shirt</h1>
  <p class="price">$19.99</p>
  
  <p><button>Add to Cart</button></p>
</div>
</td>
<td>

<div class="card">

  <img src="../w3images/jeans3.jpg" alt="Hat" style="width:100%">
  <h1>Hat</h1>
  <p class="price">$5.99</p>
  
  <p><button>Add to Cart</button></p>
</div>
</td>
   </tr>
   
    <tr>
					<th><h2 style="text-align:center">Product 6</h2></th>
					<th><h2 style="text-align:center">Product 7</h2></th>
					<th><h2 style="text-align:center">Product 8</h2></th>
					<th><h2 style="text-align:center">Product 9</h2></th>
					<th><h2 style="text-align:center">Product 10</h2></th>
					
				</tr>
   
   <tr>
 <td>

  <div class="card">
  <img src="../w3images/jeans3.jpg" alt="Jeans" style="width:100%">
  <h1>Jeans</h1>
  <p class="price">$14.99</p>
  
  <p><button>Add to Cart</button></p>
  </div>
   </td>	
				
 
   
    <td>

  <div class="card">
  <img src="../w3images/jeans3.jpg" alt="T-Shirt" style="width:100%">
  <h1>T-Shirt</h1>
  <p class="price">$8.99</p>
  
  <p><button>Add to Cart</button></p>
  </div>
   </td>
   
    <td>

  <div class="card">
  <img src="../w3images/jeans3.jpg" alt="Frock" style="width:100%">
  <h1>Frock</h1>
  <p class="price">$10.99</p>
  
  <p><button>Add to Cart</button></p>
  </div>
   </td>
   
   
<td>

<div class="card">

  <img src="../w3images/jeans3.jpg" alt="Shirt" style="width:100%">
  <h1>Shirt</h1>
  <p class="price">$19.99</p>
  
  <p><button>Add to Cart</button></p>
</div>
</td>
<td>

<div class="card">

  <img src="../w3images/jeans3.jpg" alt="Hat" style="width:100%">
  <h1>Hat</h1>
  <p class="price">$5.99</p>
  
  <p><button>Add to Cart</button></p>
</div>
</td>
   </tr>
   
</table>
<hr>
  <footer>
			<table style="width: 100%">
				<tr>
					<th>Quick Access</th>
					<th>About Us</th>
					<th>Healp & Contact</th>
					<th>Stay Connected</th>
				</tr>
				<tr>
					<td><a href="https://courseweb.sliit.lk/course/view.php?id=4619"> Home </a></td>
					<td><a href="https://courseweb.sliit.lk/course/view.php?id=4619"> Company info </a></td>
					<td><a href="https://courseweb.sliit.lk/course/view.php?id=4619"> Help </a></td>
					<td><a href="https://courseweb.sliit.lk/course/view.php?id=4619"> Facebook </a></td>
				</tr>
				<tr>
					<td><a href="https://courseweb.sliit.lk/course/view.php?id=4619"> Shops </a></td>
					<td><a href="https://courseweb.sliit.lk/course/view.php?id=4619"> News </a></td>
					<td><a href="https://courseweb.sliit.lk/course/view.php?id=4619"> Contact us </a></td>
					<td><a href="https://courseweb.sliit.lk/course/view.php?id=4619"> twitter </a></td>
				</tr>
				<tr>
					<td><a href="https://courseweb.sliit.lk/course/view.php?id=4619"> Watchlist </a></td>
					<td><a href="https://courseweb.sliit.lk/course/view.php?id=4619"> Policies </a></td>
					<td></td>
					<td><a href="https://courseweb.sliit.lk/course/view.php?id=4619"> Instagram </a></td>
				</tr>
				<tr>
					<td><a href="https://courseweb.sliit.lk/course/view.php?id=4619"> Account </a></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</table>
				

			
		</footer>
	

</body>


</html>

