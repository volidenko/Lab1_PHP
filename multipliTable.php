<?
$cols=rand(1, 10);
$rows=rand(1, 10);
echo"Таблица умножения:</br>";
$tb='<table border="1">';
    for($tr=1; $tr<=$rows; $tr++){
        $tb.='<tr>';
        for ($td=1; $td<=$cols; $td++){
            if ($tr===1 || $td===1)
            {
                $tb.='<th style="text-align:center;font-size:bold;background-color:darkgray;padding:10px;">'.$tr*$td.'</th>';
            }
            else
            {
                $tb.='<td style="background-color:lightgray;">'.$tr*$td.'</td>';
            }    
        }
        $tb.='</tr>';
    }
$tb.='</table>';
echo $tb;