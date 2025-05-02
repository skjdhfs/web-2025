<?php
$number = $_POST['number'];
function factorial(int $n) : int {
    if ($n == 1) {
        return 1;
    }
    elseif ($n > 0) {
        return $n * factorial($n - 1);
    }
    else {
        return 0;
    }
}
$result = factorial($number);
echo $result;
?>