<?php
for($i=1;$i<=10;$i++)
{
    echo "Ceci est la ligne numéro : $i <br />";
}

$i = 1;

while($i<=10)
{
    echo "Ceci est la ligne numéro : $i <br />";
    $i++;
}

$tab = array(1,2,3,4,5,6,7,8,9,10);

foreach($tab as $key => $value)
{
    if($value == 5)
    {
        continue;
    }
    echo "Ceci est la ligne numéro : $value <br />";
}
