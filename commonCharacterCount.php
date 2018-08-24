<?php
function commonCharacterCount($s1, $s2) {
    $numbers = 0;
    $s2Temp = $s2;
    for($i=0;$i<strlen($s1);$i++)
    {
        echo $s2Temp."\n";
        $pos = strpos($s2Temp, $s1[$i]);
        if($pos !== false)
        {
            $s2Temp[$pos] = "-";
            $numbers += 1;
        }
    }
    return $numbers;
}
?>