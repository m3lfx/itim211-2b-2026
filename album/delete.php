<?php
require('../includes/config.php');
$album_id = (int) $_GET['id'];
$sql = "DELETE FROM albums WHERE album_id = {$album_id} LIMIT 1";
$result = mysqli_query($conn, $sql);
if ($result) {
    header("Location: index.php");
}
