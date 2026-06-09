<?php
echo "Using For Loop:<br>";

for ($i = 5; $i <= 10; $i++) {
    echo $i . " ";
}

echo "<br><br>Using Foreach Loop:<br>";

$numbers = array(5, 6, 7, 8, 9, 10);

foreach ($numbers as $num) {
    echo $num . " ";
}
?>