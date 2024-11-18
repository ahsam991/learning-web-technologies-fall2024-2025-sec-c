<?php
$numbers = [10, 20, 30, 40, 50, 60];

$search = 30; 

$found = false;

for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] == $search) {
        echo "Element $search found at index $i.<br>";
        $found = true;
        break; // Exit the loop once the element is found
}
}

if (!$found) {
    echo "Element $search not found in the array.<br>";
}
?>