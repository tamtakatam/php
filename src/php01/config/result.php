<?php
$name = htmlspecialchars($_POST['name'],  ENT_QUOTES);
$radio = htmlspecialchars($_POST['radio'], ENT_QUOTES);
$unit = htmlspecialchars($_POST['unit'], ENT_QUOTES);
print "私の名前は" . $name . "です<br>" . "ご希望商品は" . $radio . "です<br>" . "注文数量は" . $unit;
