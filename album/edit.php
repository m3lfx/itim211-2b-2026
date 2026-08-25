<?php
include('../includes/header.php');
require('../includes/config.php');
$album_id = (int) $_GET['id'];
// $album_sql = "SELECT * FROM albums WHERE album_id = {$album_id} LIMIT 1";
// // $artist_sql = "SELECT * FROM artists";
// $artist_sql = "SELECT ar.artist_id, ar.artist_name FROM albums al INNER JOIN artists ar ON ar.artist_id = al.artist_id WHERE al.album_id = {$album_id}";

// $artist_all_sql = "SELECT ar.artist_id, ar.artist_name FROM albums al INNER JOIN artists ar ON ar.artist_id = al.artist_id WHERE al.album_id <> {$album_id}";

// $album_result = mysqli_query($conn, $album_sql);
// $artists_result = mysqli_query($conn, $artist_sql);
// $artists_all_result = mysqli_query($conn, $artist_all_sql);

// $album = mysqli_fetch_assoc($album_result);
// $artist = mysqli_fetch_assoc($artists_result);

$album_query = "SELECT al.album_id, al.album_name, al.genre, al.date_released, ar.artist_id, ar.artist_name FROM albums al INNER JOIN artists ar ON ar.artist_id = al.artist_id WHERE album_id = {$album_id} LIMIT 1";
// echo $album_query;
$album_result = mysqli_query($conn, $album_query);
$album = mysqli_fetch_assoc($album_result);

//drop down select
$artist_query = "SELECT artist_id, artist_name  FROM artists WHERE artist_id <> {$album['artist_id']} ORDER BY artist_name DESC";
$artist_result = mysqli_query($conn, $artist_query);
?>

<div class="container">
    <form method="POST" action="store.php">
        <div class="form-group">
            <label for="name">Album Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter album name" name="album_name"
                value="<?php echo $album['album_name']; ?>">

            <label for="genre">Genre</label>

            <input type="text" class="form-control" id="genre" placeholder="Enter album genre" name="genre"
                value="<?php echo $album['genre']; ?>">

            <label for="date_released">date released</label>

            <input type="date" class="form-control" id="date_released" placeholder="Enter album date"
                name="date_released" value="<?php echo $album['date_released']; ?>">

            <label for="artists">artists</label>

            <select name="artist_id" id="artists" class="form-control">

                <?php
                echo "<option value={$album['artist_id']} selected>{$album['artist_name']} </option>";
                while ($row = mysqli_fetch_assoc($artist_result)) {
                    echo "<option value={$row['artist_id']}>{$row['artist_name']}</option>";
                }
                ?>
            </select>
        </div>
        <input type="hidden" name="album_id" value="<?php echo $album['album_id']; ?>">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?php
include('../includes/footer.php');
