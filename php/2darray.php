<?php

$numbers = array(
    array(1, 2, 3),
    array(1, 2),
    array(1)
);


$letters = array(
    array('A'),
    array('B', 'C'),
    array('D', 'E', 'F')
);


for ($i = 0; $i < count($numbers); $i++) {
    for ($j = 0; $j < count($numbers[$i]); $j++) {
        echo $numbers[$i][$j] . " ";
    }
    echo "<br>";
}

echo "<br>";


for ($i = 0; $i < count($letters); $i++) {
    for ($j = 0; $j < count($letters[$i]); $j++) {
        echo $letters[$i][$j] . " ";
    }
    echo "<br>";
}
?>