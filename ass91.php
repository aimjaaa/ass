<?php
$row = $_POST["row"];
$layer = $_POST["layer"];

for($l=1; $l<=$layer; $l++)
{
for($r=1; $r<=$row; $r++)
{
    for($j=1; $j<=$r; $j++)
    {
    echo "* ";
}
echo "<br>";
}
}
?>
