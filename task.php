<?php
echo "<h2>Multiplication Table from 1 to 10</h2>";

for ($i = 1; $i <= 10; $i++) {
    echo "<h3>Table of $i</h3>";
    for ($j = 1; $j <= 10; $j++) {
        echo "$i x $j = " . ($i * $j) . "<br>";
    }
    echo "<br>";
}
 
?>
