<?php
$t = time();
echo gmdate("H:i:s",$t);
$t2;
for ($i = 0; $i < 9999995; $i++) {
    $t2 = time();
}

echo "<br>" . $t2;

echo "<br>" . gmdate("H:i:s", ($t2 - $t));
?>
