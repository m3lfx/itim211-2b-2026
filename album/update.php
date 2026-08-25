<?php
include('../includes/config.php');
// var_dump($_POST);
$album = mysqli_real_escape_string($conn, trim($_POST['album_name']));
$genre = trim($_POST['genre']);
$date_released = $_POST['date_released'];
$artist_id = $_POST['artist_id'];
$album_id = trim($_POST['album_id']);


$sql = "UPDATE albums SET album_name = '{$album}', genre = '{$genre}', date_released = '{$date_released}', artist_id = {$artist_id} WHERE album_id = $album_id ";
echo $sql;
$result = mysqli_query($conn, $sql);
if ($result) {
    header("Location: index.php");
}
