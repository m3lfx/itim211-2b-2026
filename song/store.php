<?php

include('../includes/config.php');

$title = mysqli_real_escape_string($conn, $_POST['title']);
$description = mysqli_real_escape_string($conn, $_POST['description']);

$album_id = (int)$_POST['album_id'];

$query = "INSERT INTO songs(title, description, album_id) VALUES('{$title}', '{$description}', $album_id)";
$result = mysqli_query($conn, $query);
if ($result) {
    header("Location: index.php");
} else
    echo mysqli_error($conn);
