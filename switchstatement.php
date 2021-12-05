<?php

  $title = 'Switch Statement';
  include './includes/header.php';

?>

  <h3><?php echo $title; ?></h3>
  <?php
    $grade = 'C';
    switch($grade) {
      case 'A':
        echo '<h3 class="green">You are a SUPERSTAR</h3>';
        break;
      case 'B':
        echo '<h3 class="blue">You did well!</h3>';
        break;
      default:
        echo '<h3 class="red">You have failed. keep learning!</h3>';
        break;
    }
  ?>
  
<?php require './includes/footer.php'; ?>