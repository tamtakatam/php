<?php
$i = 1;
while ($i <= 100) {
  if ($i % 3 == 0) {
    $i++;
    continue;
    // $iが5の時、$iに1を足す処理をし、スキップをする。
  }
  echo $i; . '<br>';
  $i++;
}

