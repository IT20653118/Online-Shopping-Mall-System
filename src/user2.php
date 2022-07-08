<html>
<body>
<form enctype="multipart/form-data" method="post" action="image_insert0.php" >
<input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
<p id="phup">Click browse button to choose photo:<br /><input type="file" name="image" /></p>
<br />
<textarea id="photoup" type="text" name="message" maxlenght="200" rows="10" col="85"></textarea>
<br />
<br />
<input type="submit" name="formsubmit" value="upload here" size="35" />
</form>
</body>
</html>
- //Upload into phpmyadmin database code ;

<html>
<body>
<?php
mysqli_select_db($con, "theboatcare") or die("Could not find DB");
if (isset($_POST['formsubmit']))
{
$image = $_FILES['image'] ;
print_r($image);
$name = $_FILES['image']['name'] ;
$image = addslashes(file_get_contents($_FILES['image']['tmp_name'])) ;
$query = "INSERT INTO images (name, image) VALUES ('', '{$name}', '{$image}')";
$result = mysqli_query($con, $query) or die('something wrong' . mysql_error());
$id = (int) mysqli_insert_id($result);
header('Location: image_view.php?id=' . $id);
exit;
}
?>
</body>
</html>

//upload--------------------------------------------------------------------------------------------------------------------------------------------------

<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>