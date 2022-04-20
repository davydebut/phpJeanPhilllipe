<?php
// script générant trois liste à puces de cinq éléments chacune
for($i=1;$i<=3;$i++)
{
    echo "<ol>";
    for($j=1;$j<=5;$j++)
    {
        echo "<li>Element de liste n°$j</li>";
    }
    echo "</ol>";
}

$i = 1;

while($i<=3)
{
    echo "<ol>";
    $j = 1;
    while($j<=5)
    {
        echo "<li>Element de liste n° $j</li>";
        $j++;
    }
    echo "</ol>";
    $i++;
}

// $tab = array(1,2,3,4,5,6,7,8,9,10);

// foreach($tab as $key => $value)
// {
// echo "<ol>";
//     echo "<li>Element de la liste n°$value</li>";
// echo "</ol>";
// }
