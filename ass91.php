<?php
$row = $_POST["row"];
$layer = $_POST["layer"];

for($l=1; $l<=$layer; $l++)
{
for($r=1; $r<=$row; $r++)
{
    for($j=1; $j<=$r; $r++)
    {
    echo "* ";
}
}
}
?>

//for ($l = 1; $l <= $layers; $l++) {
        //for ($i = 1; $i <= $rows; $i++) {
            //for ($j = 1; $j <= $i; $j++) {
              //  echo "* ";
            //}
            //echo "<br>";
        //}
    //}
//}