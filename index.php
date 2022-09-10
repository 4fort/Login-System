<?php
    include_once 'header.php';
?>

<?php
    
    if(isset($_SESSION["useruid"])){
      echo "<p>Hello there, <b>" . $_SESSION["useruid"] . "</b></p>";
      
    }
    else {
      echo "<p>Sign up or Login from the buttons above!</p>";
    }

?>

<?php
    include_once 'footer.php';
?>