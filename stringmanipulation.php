<?php

  $title = 'String Manipulation';
  include './includes/header.php';

?>

  <h3><?php echo $title; ?></h3>
  <?php
    $name = 'coding freqs';
    $phrase1 = 'student who came late';
    $phrase2 = 'in class, stand with Rock';

    echo $phrase1 . " is Steph " . $phrase2;
    echo '<br>';
    echo 'ucfirst: ' . ucfirst($name) . '<br>';
    echo 'ucwords: ' . ucwords($name) . '<br>';
    echo 'strtoupper: ' . strtoupper($name) . '<br>';
    echo 'strtolower: ' . strtolower($name) . '<br>';
    echo 'str_repeat: ' . str_repeat($name.'<br>', 10) . '<br>';
    echo 'Repeat String - Nested Function: ' . strtoupper(str_repeat($name, 10)) . '<br>';
    echo '<hr/>';
    echo 'Get a Substring: ' . substr($name, 3, 5) . '<br>';

  ?>
  <br>
  <hr>
  <h3>Get Position of string</h3>
  <?php
    echo 'Find character R: ' . strchr($name, 'r') . '<br>';
    echo 'Find character R: ' . strchr($name, 'o') . '<br>';
    echo 'Find character R: ' . strchr($name, 'i') . '<br>';
    echo 'Find character R: ' . strchr($name, 'f') . '<br>';
  ?>

  <br>
  <hr>
  <h3>Get the length of a string</h3>
  <?php
    echo strlen($name);
  ?>
  
  <br><br>
  <hr>
  <h3>trim, ltrim, rtrim</h3>
  <?php
    echo 'Without Trim: ' . "A" . " B C D " . "E" . '<br>';
    echo 'Trim spaces on both sides: ' . "A" . trim(" B C D ") . "E" . '<br>';
    echo 'Trim spaces on both left: ' . "A" . ltrim(" B C D ") . "E" . '<br>';
    echo 'Trim spaces on both right: ' . "A" . rtrim(" B C D ") . "E" . '<br>';
  ?>

  <br>
  <hr>
  <h3>str_replace</h3>
  <?php
    echo 'Replace string with another: ' . str_replace("Stand", "sit", $combine) . '<br>';
  ?>
  
<?php require './includes/footer.php'; ?>