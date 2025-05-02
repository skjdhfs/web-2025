<?php
$year = $_POST['year'];
if ($year % 100 == 0) {
    if ($year % 400 == 0) {
        $isLeapYear = 'Yes';
    }
    else {
        $isLeapYear = 'No';
    }
}
elseif ($year % 4 == 0) {
    $isLeapYear = 'Yes';
}
else {
    $isLeapYear = 'No';
}
echo $isLeapYear;
?>