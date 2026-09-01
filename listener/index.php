<?php
session_start();
include("../includes/header.php");
require("../includes/config.php");

$sql = "SELECT l.listener_id FROM users u INNER JOIN listeners l ON (u.user_id = l.user_id) WHERE u.user_id = {$_SESSION['user_id']} LIMIT 1";
$query = mysqli_query($conn, $sql);
$listener = mysqli_fetch_assoc($query);
$listener_id = $listener['listener_id'];
$_SESSION['listener_id'] = $listener_id;

$sql1 = "SELECT * FROM albums";
$albums = mysqli_query($conn, $sql1);

$sql2 = "SELECT * FROM albums a INNER JOIN album_listener al ON (a.album_id = al.album_id) INNER JOIN artists ar ON (ar.artist_id = a.artist_id) WHERE al.listener_id  = $listener_id";
$myAlbums = mysqli_query($conn, $sql2);
// $album_sql = "SELECT * FROM albums";
// $albums = mysqli_query($conn, $album_sql);
?>
<div class="container-fluid container-lg">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Album Name</th>
                <th>Artist Name</th>
            </tr>
        </thead>
        <tbody>
            <?php

            if (mysqli_num_rows($myAlbums) > 0) {
                while ($row = mysqli_fetch_assoc($myAlbums)) {
                    // var_dump($row);
                    $album_ids[] = $row['album_id'];
                    print "<tr>";
                    echo "<td> <a href='review.php?album_id={$row['album_id']}' >{$row['album_name']}</a></td>";
                    echo "<td>" . $row['artist_name'] . "</td>";
                    echo "</tr>";
                }
            } else {
                $album_ids = [];
                echo "<p>You have no albums</p>";
            }
            print_r($album_ids);

            ?>
        </tbody>
    </table>

</div>
<!-- <div class="container-fluid container-lg">
    <form action="create_albums.php" method="POST">
        <?php
        // if (mysqli_num_rows($albums) > 0) {

        //     while ($row = mysqli_fetch_assoc($albums)) {

        //         echo "<div class='form-check'>
        //             <input class='form-check-input' type='checkbox' value='{$row['album_id']}' id='flexCheckDefault' name='albums[]'>
        //             <label class='form-check-label' for='flexCheckDefault'>
        //                 {$row['album_name']}
        //             </label>
        //             </div>";
        //     }
        // }

        // 
        ?>
        <button type="submit" class="btn btn-primary">update list</button>
    </form>
</div> -->

<div class="container-fluid container-lg">
    <form action="create_albums.php" method="POST">
        <?php
        if (mysqli_num_rows($albums) > 0) {

            while ($row = mysqli_fetch_assoc($albums)) {
                if (in_array($row['album_id'], $album_ids)) {
                    echo "<div class='form-check'>
                    <input class='form-check-input' type='checkbox' value='{$row['album_id']}' id='flexCheckDefault' name='albums[]' checked>
                    <label class='form-check-label' for='flexCheckDefault'>
                        {$row['album_name']}
                    </label>
                    </div>";
                } else {
                    echo "<div class='form-check'>
                    <input class='form-check-input' type='checkbox' value='{$row['album_id']}' id='flexCheckDefault' name='albums[]'>
                    <label class='form-check-label' for='flexCheckDefault'>
                        {$row['album_name']}
                    </label>
                    </div>";
                }
            }
        }

        ?>
        <button type="submit" class="btn btn-primary">update list</button>
    </form>
</div>
<?php
include("../includes/footer.php");
