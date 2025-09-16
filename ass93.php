<?php
$bk = $_POST["bk"];
$cnx = $_POST["cnx"];
$c = $_POST["c"];
$p = $_POST["p"];
$k = $_POST["k"];

echo "<h2>ABC - Annual Sales</h2><br>";

echo "Bangkok [$bk]: ";
for($i=0; $i<$bk; $i++){
    echo "* ";}
    echo "<br>";

echo "Chiang Mai [$cnx]: ";
for($i=0; $i<$cnx; $i++){
    echo "* ";}
    echo "<br>"; 
    
echo "Chonburi [$c]: ";
for($i=0; $i<$c; $i++){
    echo "* ";}
    echo "<br>";

echo "Puket [$p]: ";
for($i=0; $i<$p; $i++){
    echo "* ";}
    echo "<br>";

echo "Khonkan [$k]: ";
for($i=0; $i<$k; $i++){
    echo "* ";}
    echo "<br>";

$total = $bk + $cnx + $c + $p + $k;
$aver =  ($bk + $cnx + $c + $p + $k)/5;

echo "<br><br><strong>Total: $total<br><br>";
echo "Average: $aver</strong>";
?>