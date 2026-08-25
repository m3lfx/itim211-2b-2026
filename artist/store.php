<?php
include('../includes/config.php');
// print_r($_GET);
// print_r($_POST);
$artist_name = trim($_POST['artist_name']);
$country = trim($_POST['country']);
// echo "<h1>$artist_name</h1>";
$sql = "INSERT INTO artists(artist_name, country) VALUES('{$artist_name}', '{$country}')";
echo $sql;
$result = mysqli_query($conn, $sql);
if ($result) {
    header("Location: index.php");
}
