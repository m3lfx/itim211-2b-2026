<?php
include("../includes/config.php");

$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
$address = $_POST['address'];

$user_id = $_POST['user_id'];
$filename = $_FILES["image"]["name"];

$tempname = $_FILES["image"]["tmp_name"];
$folder = "../image/" . $filename;
$sql = "INSERT INTO listeners(fname, lname, address, image, user_id) VALUES('$first_name', '$last_name', '$address','$filename','$user_id')";
$result = mysqli_query($conn, $sql);
var_dump($sql);
// Now let's move the uploaded image into the folder: image
if (move_uploaded_file($tempname, $folder)) {
    echo "<h3>  Image uploaded successfully!</h3>";
} else {
    echo "<h3>  Failed to upload image!</h3>";
}
if ($result) {
    header("Location: ../user/profile.php");
}
