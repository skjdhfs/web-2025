<?php
$date = $_POST['date'];
$day = $date[0] . $date[1];
$month = $date[3] . $date[4];
if ($month == '01') {
    if ($day <= 20) {
        $sign = 'Козерог';
    }
    else {
        $sign = 'Водолей';
    }
}
elseif ($month == '02') {
    if ($day <= 20) {
        $sign = 'Водолей';
    }
    else {
        $sign = 'Рыбы';
    }
}
elseif ($month == '03') {
    if ($day <= 20) {
        $sign = 'Рыбы';
    }
    else {
        $sign = 'Овен';
    }
}
elseif ($month == '04') {
    if ($day <= 19) {
        $sign = 'Овен';
    }
    else {
        $sign = 'Телец';
    }
}
elseif ($month == '05') {
    if ($day <= 20) {
        $sign = 'Телец';
    }
    else {
        $sign = 'Близнецы';
    }
}
elseif ($month == '06') {
    if ($day <= 21) {
        $sign = 'Близнецы';
    }
    else {
        $sign = 'Рак';
    }
}
elseif ($month == '07') {
    if ($day <= 22) {
        $sign = 'Рак';
    }
    else {
        $sign = 'Лев';
    }
}
elseif ($month == '08') {
    if ($day <= 22) {
        $sign = 'Лев';
    }
    else {
        $sign = 'Дева';
    }
}
elseif ($month == '09') {
    if ($day <= 22) {
        $sign = 'Дева';
    }
    else {
        $sign = 'Весы';
    }
}
elseif ($month == '10') {
    if ($day <= 23) {
        $sign = 'Весы';
    }
    else {
        $sign = 'Скорпион';
    }
}
elseif ($month == '11') {
    if ($day <= 21) {
        $sign = 'Скорпион';
    }
    else {
        $sign = 'Стрелец';
    }
}
elseif ($month == '12') {
    if ($day <= 21) {
        $sign = 'Стрелец';
    }
    else {
        $sign = 'Козерог';
    }
}
echo $sign;
?>