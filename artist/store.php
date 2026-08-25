<?php
include('../includes/config.php');
// print_r($_GET);
// print_r($_POST);
$artist_name = trim($_POST['artist_name']);
$country = trim($_POST['country']);
// echo "<h1>$artist_name</h1>";
// var_dump($_FILES);
if (isset($_FILES['image'])) {
    if ($_FILES['image']['type'] == "image/jpeg" || $_FILES['image']['type'] == "image/jpg" || $_FILES['image']['type'] == "image/png") {
        $source = $_FILES['image']['tmp_name'];
        $target = "../upload/" . $_FILES['image']['name'];
        move_uploaded_file($source, $target) or die("Couldn't copy");
    } else {
        print "wrong file type";
    }
} else {
    print "no file uploaded";
}
$sql = "INSERT INTO artists(artist_name, country, img_path) VALUES('{$artist_name}', '{$country}', '{$target}')";
echo $sql;
$result = mysqli_query($conn, $sql);
if ($result) {
    header("Location: index.php");
}