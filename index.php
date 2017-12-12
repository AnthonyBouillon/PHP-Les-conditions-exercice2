<?php
$IsEasy = true;

if ($IsEasy){
  echo 'C\'est facile !';
}else {
  echo 'C\'est difficile';
}

$IsEasy = false;

switch ($IsEasy){
  case true:
    echo 'C\'est facile !';
  break;

  case false:
    echo 'C\'est difficile !';
  break;
}

 ?>
