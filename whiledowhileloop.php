<?php

  $title = 'While Do While Loop';
  include './includes/header.php';

?>

  <h3>Whille Loop</h3>
  <?php
    // $count = 0;
    // while($count < 10) {
    //   echo "Count: $count <br>";
    //   $count++;
    // }
  ?>

  <h3>Do While Loop</h3>
  <?php
    $count = 0;
    do {
      echo "Count: $count <br>";
      $count++;
    } while ( $count < 10 );
  
  
  require './includes/footer.php'; ?>