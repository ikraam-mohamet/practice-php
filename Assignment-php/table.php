<?php
echo"multiplication table</br>";
echo "<table border='1' cellpadding='5'>";

for ($row = 1; $row <= 12; $row++) {
    echo "<tr>";

    for ($col = 1; $col <= 12; $col++) {
        echo "<td>" . ($row * $col) . "</td>";
    }

    echo "</tr>";
}

echo "</table>";

?>