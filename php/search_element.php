<?php
$numbers = array(4, 8, 15, 16, 23, 42);
$search  = 4;      

$found = false;

for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] == $search) {
        $found = true;
        $position = $i;        
        break;
    }
}

if ($found) {
    echo "$search found at  $position";
} else {
    echo "$search not found in the array";
}
?>