<?php
// include database connection file
include_once("config.php");

// Get id from URL to delete that user
$id = $_GET['id'];

// Delete item row from table based on given id
$result = mysqli_query($conn, "DELETE FROM samsung WHERE id=$id");

// After delete redirect to Home, so that latest item list will be displayed.
header("Location:home.php");
?>