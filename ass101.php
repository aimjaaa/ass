<?php
$ran = $_POST["random"];

for($i=1; $i<=$ran; $i++)
{ $num=rand(1,3);
echo "Random number #$i ==> $num <br>";

if ($rand == 1) {
            $count1=1;
        } elseif ($rand == 2) {
            $count2=2;
        } else {
            $count3=3;
        }
    }

    echo "<br>";
    echo "Count for 1 = $count1 time(s)<br>";
    echo "Count for 2 = $count2 time(s)<br>";
    echo "Count for 3 = $count3 time(s)<br>";

?>