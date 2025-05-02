<?php
$ticketFirst = $_POST['ticket_first'];
$ticketLast = $_POST['ticket_last'];
for ($ticket = $ticketFirst; $ticket <= $ticketLast; $ticket++) {
    $number = strval($ticket);
    $v100000 = $number[0];
    $v10000 = $number[1];
    $v1000 = $number[2];
    $v100 = $number[3];
    $v10 = $number[4];
    $v1 = $number[5];
    $sumFirst = $v100000 + $v10000 + $v1000;
    $sumLast = $v100 + $v10 + $v1;
    if ($sumFirst == $sumLast) {
        echo $ticket;
        echo "<br>";
    }
}
?>