<?php
function calculate_triangle_area($base, $height) {
    // Calculate the area of the triangle
    $area = ($base * $height) / 2;
    return $area;
}

// Example usage
$base = 10;
$height = 5;
$area = calculate_triangle_area($base, $height);
echo "The area of the triangle with base $base and height $height is $area";
?>

<?php
function findSingleNumber($arr) {
    // Initialize the result variable to 0
    $result = 0;
    
    // Iterate through each element in the array
    foreach ($arr as $num) {
        // XOR each element with the result variable
        $result ^= $num;
    }
    
    // Return the result which is the single number
    return $result;
}

// Example usage
$array = array(5, 3, 4, 3, 4);
$singleNumber = findSingleNumber($array);
echo "The single number in the array is: " . $singleNumber;
?>
