<?php
include('../includes/header.php');
require('../includes/config.php');
$sql = "SELECT al.album_id, al.album_name, al.genre, al.date_released, ar.artist_name FROM albums al INNER JOIN artists ar ON ar.artist_id = al.artist_id";
$albums = mysqli_query($conn, $sql);
?>
<a href="create.php" class="btn btn-primary btn-lg " role="button" aria-disabled="true">Add album</a></p>
<table class="table table-striped table-bordered">
    <thead>
        <th>Album id</th>

        <th>album name</th>
        <th>artist name</th>
        <th>album genre</th>
        <th>date released</th>
    </thead>

    <?php
    while ($row = mysqli_fetch_assoc($albums)) {
        echo "<tr>";
        echo "<td>{$row['album_id']}</td>";
        echo "<td>{$row['album_name']}</td>";
        echo "<td>{$row['artist_name']}</td>";
        echo "<td>{$row['genre']}</td>";
        echo "<td>{$row['date_released']}</td>";

        echo "<td><a href='edit.php?id={$row['album_id']}'><i class='fa-regular fa-pen-to-square' style='color: blue'></i></a><a href='delete.php?id={$row['album_id']}'><i class='fa-solid fa-trash' style='color: red'></i></a></td>";
        echo "</tr>";
    }
    ?>
</table>
<?php
include('../includes/footer.php');
