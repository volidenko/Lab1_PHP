<?
$color_arr = array("red", "orange", "yellow", "lime", "deepskyblue", "blue", "darkviolet");
// foreach ($color_arr as $item) {
//    echo '<div style="background-color:' . $item . '; width:150px; height:80px; float:left; margin:0px;"></div>';
// }

shuffle($color_arr); //Эта функция перемешивает элементы массива в случайном порядке. Используется псевдослучайный генератор случайных чисел
$arr = array_slice($color_arr, 0, 4); //возвращает последовательность элементов массива array, определённую параметрами offset и length.
foreach ($arr as $item) {
   echo '<div style="background-color:' . $item . '; width:200px; height:100px; float:left; margin:20px;"></div>';
}
?>

<?php
// $numbers = range(1, 20);
// shuffle($numbers);
// foreach ($numbers as $number) {
//     echo "$number ";
// }
?>