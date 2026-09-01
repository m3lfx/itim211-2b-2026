<?php
include('../includes/header.php');
include('../includes/config.php');
$query = "SELECT * FROM albums ORDER BY album_name DESC";
$result = mysqli_query($conn, $query);
?>


<div class="container">
    <form method="POST" action="store.php">
        <div class="form-group">
            <label for="name">Song Title</label>
            <input type="text" class="form-control" id="name" placeholder="Enter song title" name="title">
            <label for="description">Description</label>

            <input type="text" class="form-control" id="description" placeholder="Enter description" name="description">

            <label for="albums">Albums</label>

            <select name="album_id" id="albums" class="form-control">

                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value={$row['album_id']}>{$row['album_name']}</option>";
                }
                ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?php
include('../includes/footer.php');
