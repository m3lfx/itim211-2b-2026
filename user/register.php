<?php
session_start();
// CREATE TABLE users(
// user_id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
// email VARCHAR(100),
// password TEXT,
// status enum('active','inactive'),
// created_at DATE
// )
var_dump($_SESSION);
include("../includes/header.php");
include("../includes/config.php");
// var_dump($_POST);
if (isset($_POST['submit'])) {
    $email = mysqli_escape_string($conn, trim($_POST['email']));
    $password = mysqli_escape_string($conn, $_POST['password']);
    $password = password_hash($password, PASSWORD_BCRYPT);
    var_dump($password);
    $sql = "INSERT INTO users (email, password, status, created_at) VALUES('{$email}', '{$password}', 'active', now())";
    // var_dump($sql);
    $result = mysqli_query($conn, $sql);
    if ($result > 0) {
        header("Location: login.php");
    } else
        echo mysqli_error($conn);
}

?>
<div class="container-fluid container-lg">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="mb-3">
            <label for="email" class="form-label">email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Register</button>
    </form>
</div>