<?php
// CREATE TABLE albums (
// album_id INT AUTO_INCREMENT PRIMARY KEY,
// album_name VARCHAR(255) NOT NULL,
// genre VARCHAR(20),
// date_released DATE,
// artist_id INT,
// FOREIGN KEY (artist_id)
// REFERENCES artists(artist_id)
// ON DELETE CASCADE
// );
include('../includes/header.php');
require('../includes/config.php');
$sql = "SELECT * FROM artists";
$artists = mysqli_query($conn, $sql);
?>

<div class="container">
    <form method="POST" action="store.php">
        <div class="form-group">
            <label for="name">Album Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter album name" name="album_name">

            <label for="genre">Genre</label>

            <input type="text" class="form-control" id="genre" placeholder="Enter album genre" name="genre">

            <label for="date_released">date released</label>

            <input type="date" class="form-control" id="date_released" placeholder="Enter album date"
                name="date_released">

            <label for="artists">artists</label>

            <select name="artist_id" id="artists" class="form-control">

                <?php
                while ($row = mysqli_fetch_assoc($artists)) {
                    echo "<option value={$row['artist_id']}>{$row['artist_name']}</option>";
                }
                ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?php
include('../includes/footer.php');
