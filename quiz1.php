<?php

$myTable = array();
for ($i = 1; $i < 8; $i++) {
  for ($j = 1; $j < 8; $j++) {
    if ($i === 1) {
      array_push($myTable,$j);
    } else {
      array_push($myTable,$j*$i);
    }
  }
}

$len = count($myTable);

$row = 1;

for ($k = 0; $k < $len; $k++) {

    echo $myTable[$k];

    if ($row>6){
        echo '<br>';
        $row = 0;
    }

    $row++;

}

?>
