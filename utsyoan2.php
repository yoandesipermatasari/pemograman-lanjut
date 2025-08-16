<?php 

// Menentukan nilai maksismum
$max = 8;

echo "<table border='1'>";
echo "<tr><th>Ganjil</th><th>Genap</th></tr>"; 

for($i =1; $i <= $max; $i++) {

    if($i % 2 == 1) {
        echo "<tr><td>$i</td>"; 
    
    } 
    else {
        echo "<td>$i</td></tr>";
    }
} 

echo "</table";
?>