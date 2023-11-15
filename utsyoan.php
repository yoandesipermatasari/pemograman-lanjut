<?php 
// Membuat variable untuk menyimpan angka maksimal 
$max = 5; 

echo "<table border='1'>";
echo"<tr><th>Ganjil</th><th>Genap</th><tr>";

for($i = 1; $i <= $max; $i++) {
    "<tr>"; 
    if ($i % 2 == 1) {
        echo "<td>$i</td>";
        echo "<td></td>"; 

    }else{
        echo "<td></td>";
        echo "<td>$i</td>";

    } 
    echo "</tr>";
} 
echo "</table>"; 
?>
