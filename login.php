<?php
    include_once 'header.php';
?>

    <section class="signup-form">
        <h2>Log In</h2>
        <form action="includes/login.inc.php" method="POST">

        <input type="text" name="uid" placeholder="Username/Email" class="form-control m-3">
        <input type="password" name="pwd" placeholder="Password" class="form-control m-3">
        <button type="submit" name="submit" class="btn btn-primary m-3">Log In</button>

        </form>

        <?php
            if(isset($_GET["error"])){
                if($_GET["error"] == "emptyinput") {
                    echo "<p>Fill in all fields!</p>";
                }
                else if ($_GET["error"] == "wronglogin") {
                    echo "<p>Incorrect login information!</p>";
                }
            }
        ?>

    </section>

<?php
    include_once 'footer.php';
?>