<?php

  require 'src/Average.php';

  $obj = new Average();
  $mean = $obj->mean(array("10","23","56","67","45","45"));
  $avg = $obj->median(array("10","23","56","67","45","45"));

  echo $mean."<br />";
  echo $avg."<br />";

?>
