<?php
// function ce($ori, $dis)
// {

//     $disAmount = ($ori * $dis) / 100;
//     $fin = $ori - $disAmount;
//     return $fin;
// }
// fscanf(STDIN, "%d %d", $ori, $dis);
// $fin = ce($ori, $dis);
// printf("%.2f\n", $fin);

fscanf(STDIN,"%d %d", $ori, $dis);
$disAmount = ($ori * $dis)/100;
$fin = $ori - $disAmount;

printf("Price: %.2f\n", $fin);

