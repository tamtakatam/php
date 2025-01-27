<?php
// function test($number1, $number2, $number3)
// {
//   $value = $number1 + $number2 + $number3;
//   return $value;
// }

// $total = test(80, 90, 70);

// if($total >= 210) {
//     echo '合計点は'. $total .'なので合格です';
// }else{
//     echo '合計点は' . $total .'なので不合格です';
// }

function getSquareArea($base, $height)
{
  return $base * $height;
}
function getTriangleArea($base, $height)
{
  return $base * $height / 2;
}
function getTrapezoidArea($upperBase, $lowerBase, $height)
{
  return ($upperBase + $lowerBase) * $height / 2;
}

echo getSquareArea(5, 5) . "\n";
echo getTriangleArea(7, 8) . "\n";
echo getTrapezoidArea(4, 5, 4);