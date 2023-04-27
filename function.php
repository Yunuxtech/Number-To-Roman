<?php
function intToRoman($num) {
    $map = array(
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1
    );
    $result = '';
    foreach ($map as $roman => $int) {
        while ($num >= $int) {
            $result .= $roman;
            $num -= $int;
        }
    }
    return $result;
}

// Usage example:
// echo intToRoman(1234);


?>