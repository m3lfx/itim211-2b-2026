<?php
include('../includes/config.php');

$album_name = mysqli_real_escape_string($conn, trim($_POST['album_name']));
$genre = mysqli_real_escape_string($conn, trim($_POST['genre']));
$date_released = trim($_POST['date_released']);
$artist_id = (int)$_POST['artist_id'];
$sql = "INSERT INTO albums(album_name, genre, date_released, artist_id) VALUES ('{$album_name}', '{$genre}', '{$date_released}', {$artist_id})";
echo $sql;
$result = mysqli_query($conn, $sql);
if ($result) {
    header("Location: index.php");
}