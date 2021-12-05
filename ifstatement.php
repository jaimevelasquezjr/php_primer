<?php

  $title = 'If Statement';
  include './includes/header.php';

  echo "<h2> $title </h2>";
  $grade = 80;

  if($grade >= 50) {
    echo 'You have passed';
  } else {
    echo 'You have failed';
  }

?>
  
<?php require './includes/footer.php'; ?>