<?php
    include_once 'header.php';
?>

<?php
    
    if(isset($_SESSION["useruid"])){
      echo "<p>Hello there, " . $_SESSION["useruid"] . "</p>";
      
    }
    else {
      echo "<p>Sign up or Login from the buttons above!</p>";
    }

?>

<?php
    include_once 'footer.php';
?>