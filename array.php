<?php

  $title = 'Array';
  include './includes/header.php';
  
?>

  <h3><?php echo $title; ?></h3>
  <?php
    $num = 3;
    $numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    echo count($numbers);

    echo '<hr/>';

    

    
    $friends = array('Andrei', 'Brad', 'Jonas', 'Stephen', 'Klay');

  ?>
  <aside class="friends">
    <h3>Friends list (<?php echo count($friends); ?>)</h3>
    <ul>
      <?php
        for($i = 0; $i < count($friends); $i++) {
          echo "<li> $friends[$i] </li>";
        }
      ?>
    </ul>
  </aside>
  
<?php require './includes/footer.php'; ?>