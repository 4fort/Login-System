<?php
    include_once 'header.php';
?>

    <section class="signup-form">
        <h2>Sign Up</h2>
        <form action="includes/signup.inc.php" method="POST">

        <input type="text" name="name" placeholder="Full Name" class="form-control m-3">
        <input type="text" name="email" placeholder="Email" class="form-control m-3">
        <input type="text" name="uid" placeholder="Username" class="form-control m-3">
        <input type="password" name="pwd" placeholder="Password" class="form-control m-3">
        <input type="password" name="pwdConf" placeholder="Confirm Password" class="form-control m-3">
        <button type="submit" name="submit" class="btn btn-primary m-3">Sign up</button>

        </form>

        <?php
        if(isset($_GET["error"])){
            if($_GET["error"] == "emptyinput") {
                echo "<p>Fill in all fields!</p>";
            }
            else if ($_GET["error"] == "invaliduid") {
                echo "<p>Choose a proper Username!</p>";
            }
            else if ($_GET["error"] == "invalidemail") {
                echo "<p>Choose a proper email!!</p>";
            }
            else if ($_GET["error"] == "passwordsdontmatch") {
                echo "<p>Passwords dont match!</p>";
            }
            else if ($_GET["error"] == "stmtfailed") {
                echo "<p>Something went wront, try again!</p>";
            }
            else if ($_GET["error"] == "usernametaken") {
                echo "<p>Username is already taken!</p>";
            }
            else if ($_GET["error"] == "none") {
                echo "<p>You have signed up!</p>";
            }
        }
        ?>

    </section>

<?php
    include_once 'footer.php';
?>