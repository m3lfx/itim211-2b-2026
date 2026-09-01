<?php
// CREATE TABLE listeners(
// listener_id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
// fname VARCHAR(255),
// lname VARCHAR(100),
// address VARCHAR(255),
// birthday DATE,
// image TEXT,
// user_id INTEGER NOT NULL UNIQUE,
// FOREIGN KEY (user_id)
// REFERENCES users (user_id)
// )

// CREATE TABLE album_listener(
// listener_id INTEGER  NOT NULL,
// album_id INTEGER NOT NULL,
// review TEXT,
// FOREIGN KEY (listener_id)
// REFERENCES listeners (listener_id),
// FOREIGN KEY (album_id)
// REFERENCES albums (album_id),
// PRIMARY KEY (album_id, listener_id)
// )
include("../includes/header.php");
require("../includes/config.php");
session_start();
$user_id = (int)$_SESSION['user_id'];

?>
<div class="container-fluid container-lg">
    <form action="store.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="fname" class="form-label">first Name</label>
            <input type="text" class="form-control" id="fname" name="fname">
        </div>
        <div class="mb-3">
            <label for="lname" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lname" name="lname">
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">address</label>
            <input type="text" class="form-control" id="address" name="address">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <input type="hidden" id="userId" name="user_id" value="<?php echo $user_id; ?>">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>