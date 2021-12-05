<?php

  $title = 'For Loop';
  include './includes/header.php';
  
?>

  <h3><?php echo $title; ?></h3>
  <?php
    for($count=0; $count < 10; $count++) {
      echo "<p> $count </p>";
    }

    echo '<hr/>';
    
    for($count=0; $count <= 10; $count++) {
      echo "<p> $count </p>";
    }
  ?>
  
<?php require './includes/footer.php'; ?>