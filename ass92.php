<?php
$base = $_POST["base"];
$round = $_POST["round"];
$i = 1;
$j=0;

while ($i <= $round) 
{
     echo "Multiplication $base x 12 <br>";
        for($j = 1; $j <= 12; $j++){
    $result = $base * $j;
    echo "$base x $j = $result <br>";
    
}
echo "<br>";
$base++;
$i++;
}

?>  