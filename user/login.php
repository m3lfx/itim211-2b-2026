<?php
session_start();
var_dump($_SESSION);
// var_dump(session_id());
// $_SESSION['user_id'] = 1;
// $_SESSION['email'] = "user1@gmail.com";
// var_dump($_SESSION);
include("../includes/header.php");
include("../includes/config.php");
if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $sql = "SELECT user_id, email,password FROM users WHERE email='$email' LIMIT 1";
    // echo $sql;
    $result = mysqli_query($conn, $sql);


    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        var_dump($row);
        if (password_verify(trim($_POST['password']), $row['password'])) {
            $_SESSION['email'] = $row['email'];
            $_SESSION['user_id'] = $row['user_id'];
            header("Location: ../artist/index.php");
        } else {
            $_SESSION['message'] = 'wrong username or password';
        }
    }
}

if (isset($_SESSION['message'])) {
    var_dump($_SESSION);
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <strong>{$_SESSION['message']}</strong>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
    // unset($_SESSION['message']);
}
?>
<div class="row col-md-8 mx-auto ">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <!-- Email input -->
        <div class="form-outline mb-4">
            <input type="email" id="form2Example1" class="form-control" name="email" />
            <label class="form-label" for="form2Example1">Email address</label>
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
            <input type="password" id="form2Example2" class="form-control" name="password" />
            <label class="form-label" for="form2Example2">Password</label>
        </div>



        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4" name="submit">Sign in</button>

        <!-- Register buttons -->
        <div class="text-center">
            <p>Not a member? <a href="register.php">Register</a></p>
            <p>or sign up with:</p>
        </div>
    </form>
</div>

<?php
include('../includes/footer.php');
