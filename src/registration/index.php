<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <link rel="stylesheet" href="../styles/styles.css">
  <!--<link rel="stylesheet" type="text/css" href="registration/style.css">-->
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
            background-color:  #008CBA;
          }
          .button:hover{
            background-color: #737373;
          }
          .table1{
            background-color: #cceeff;
            border-color: blue;
          }
          .input-group {
            margin: 10px 0px 10px 0px;
          }
          .input-group label {
            display: block;
            text-align: left;
            margin: 3px;
          }
          .input-group input {
            height: 30px;
            width: 93%;
            padding: 5px 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid gray;
          }
          .header {
            width: 90%;
            margin: 50px auto 0px;
            color: white;
            background:  #008CBA;
            text-align: center;
            border: 1px solid #B0C4DE;
            border-bottom: none;
            border-radius: 10px 10px 0px 0px;
            padding: 20px;
          }  
          .btn {
             padding: 10px;
             font-size: 15px;
             color: white;
             background:  #008CBA;
             border: none;
             border-radius: 5px;
          }
        </style>
</head>
<body>
      <header>
      <img class = "logo" src="../images/eMall_logo2.gif" alt="logo" width="300px" height="150px" align="left">
      <ul class="menu">
        <li class="menu"><a href="../Shoping cart.php"><img src="../Icons\Shoppingcart_icon.png" alt="Profile icon" width="25px" height="25px"></a> <br></li>
        <li class="menu"><a href="../user.php"><img src="../Icons\Profile_icon.png" alt="Profile icon" width="25px" height="25px">Account </a> <br></li>
        <li class="menu"><a href="../Watchlist.php"> Watchlist </a> <br></li>
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

<table class="table1" border="1" align="center" width="30%" > 
      <tr> 
        <td>
          <center>
<div class="header">
  <h1 style="color: blue">User Profile</h1>
</div>
<hr class="new1">
<div class="content">
    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
      <p><h2>Hi Welcome to eMall</h2>
        <img src="../Icons\Profile_icon.png" alt="Profile icon" width="100px" height="100px">
        <br>
        <strong><?php echo $_SESSION['username']; ?></strong></p>

      <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
      <p> <a href="../eMall_Project.html"style="color: red;">Go to Home Page</a></p>
    <?php endif ?>
</div>
           </center>
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
          <td><a href="../eMall_Project.html"> Home </a></td>
          <td><a href="../About us.html"> Company info </a></td>
          <td><a href="../Contact us.php"> Help </a></td>
          <td><a href="#"> Facebook </a></td>
        </tr>
        <tr>
          <td><a href="../Shops Display Page.html"> Shops </a></td>
          <td><a href="#"> News </a></td>
          <td><a href="../Contact us.php"> Contact us </a></td>
          <td><a href="#"> twitter </a></td>
        </tr>
        <tr>
          <td><a href="../Watchlist.php"> Watchlist </a></td>
          <td><a href="#"> Policies </a></td>
          <td></td>
          <td><a href="#"> Instagram </a></td>
        </tr>
        <tr>
          <td><a href="../user.php"> Account </a></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </table>
        

      
    </footer>   
</body>
</html>