<?php
$row = 100;
$col = 100;
echo "<table>";
echo "<td> </td>";
for($j=1; $j<=$col; $j++){
    echo "<td>$j</td>";
}

for($i=1; $i<=$row; $i++){
    echo "<tr>\n";
    echo "<td>$i</td>";
    for($j=1; $j<=$col; $j++){
        $m = $i * $j;
        echo "<td>$m</td>\n";
    }
    echo "</tr>";
}
echo "</table>";
?>