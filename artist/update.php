<?php
include('../includes/config.php');
// print_r($_GET);
// var_dump($_POST);
$artist_name = trim($_POST['artist_name']);
$country = trim($_POST['country']);
$artist_id = (int) $_POST['artist_id'];

$sql = "UPDATE artists SET artist_name = '{$artist_name}', country = '{$country}' WHERE artist_id = {$artist_id}";
// echo $sql;
$result = mysqli_query($conn, $sql);
if ($result) {
    header("Location: index.php");
}
