<?php
$n = 0;
if($n > 1)
{
    echo '<table>';
    for($i = 1; $i <= 10; $i++)
    {
        echo '<tr><td>' . $n . '</td>';
        echo '<td>' . $i . '</td>';
        echo '<td>' . $i * $n . '</td></tr>';
    }
    echo '</table>';
}
?>