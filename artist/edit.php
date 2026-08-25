<?php
include('../includes/header.php');
require('../includes/config.php');
var_dump($_GET);
$artist_id = (int) $_GET['id'];
$sql = "SELECT * FROM artists WHERE artist_id = {$artist_id} LIMIT 1";
$result = mysqli_query($conn, $sql);
$artist = mysqli_fetch_assoc($result);
// var_dump($artist);
?>
<form action="update.php" method="POST">
    <div class="form-group">
        <label for="exampleInputEmail1">Artist Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Enter name" name="artist_name" value="<?php echo $artist['artist_name']; ?>">

    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Country</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="country" name="country"
            value="<?php echo $artist['country']; ?>">
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Upload Image</label>
        <input type="file" class="form-control" id="exampleInputPassword1" name="image">
    </div>

    <input type="hidden" name="artist_id" value="<?php echo $artist['artist_id']; ?>">

    <button type="submit" class="btn btn-primary">Submit</button>
</form>