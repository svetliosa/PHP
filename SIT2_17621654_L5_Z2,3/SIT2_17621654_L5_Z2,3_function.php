<?php
function areaTriangle($a,$b,$c) {
    $p=($a+$b+$c)/2;
    $s=sqrt ($p*($p-$a)*($p-$b)*($p-$c));
    if($a==$b&&$b==$c&&$c==$a)
        echo "Триъгълника е равностранен<br>";
    elseif ($a==$b||$b==$c||$c==$a)
        echo "Триъгълника е равнобедрем<br>";
    elseif ($a!=$b&&$b!=$c&&$c!=$a)
        echo "Триъгълника е разностранен<br>";
    return $s;
}
?>
