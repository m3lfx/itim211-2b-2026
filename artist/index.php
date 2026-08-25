<?php
include('../includes/header.php');
require('../includes/config.php');
$sql = "SELECT * FROM artists";
$artists = mysqli_query($conn, $sql);
?>
<a href="create.php" class="btn btn-primary btn-lg " role="button" aria-disabled="true">Add artist</a></p>
<table class="table table-striped table-bordered">
    <thead>
        <th>Artist id</th>
        <th>Artist image</th>
        <!-- <th>Artist name</th> -->
        <th>Artist country</th>
    </thead>

    <?php
    while ($row = mysqli_fetch_assoc($artists)) {
        echo "<tr>";
        echo "<td><img src={$row['img_path']} width='150' height='150' /> </td>";
        echo "<td>{$row['artist_id']}</td>";
        echo "<td>{$row['artist_name']}</td>";
        echo "<td>{$row['country']}</td>";

        echo "<td><a href='edit.php?id={$row['artist_id']}'><i class='fa-regular fa-pen-to-square' style='color: blue'></i></a><a href='delete.php?id={$row['artist_id']}'><i class='fa-solid fa-trash' style='color: red'></i></a></td>";
        echo "</tr>";
    }
    ?>
</table>
<?php
include('../includes/footer.php');
