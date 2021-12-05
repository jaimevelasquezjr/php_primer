<?php

  $title = 'Date & Time Manipulation';
  include './includes/header.php';

?>

  <h3><?php echo $title; ?></h3>
  <?php

    $datenow = getdate();
    $year = $datenow['year'];
    $month = $datenow['mon'];
    $day = $datenow['mday'];

    echo 'Day: ' . $day . '<br>';
    echo 'Month: ' . $month . '<br>';
    echo 'Year: ' . $year . '<br><br>';

    echo "Today's Date: " . $year . "/" . $month . "/" . $day;

  ?>

  <h1>Time</h1>
  <?php
  
    echo date('l \t\h\e jS');
    
    require './includes/footer.php';
  ?>
  