<?php 


$file_content = file_get_contents("https://www.texnojob.az/index.php");

preg_match_all("/(<img )(.+?)( \/)?(>)/",$file_content,$images);
foreach ($images[2] as $val)
{
    if (preg_match("/(src=)('|\")(.+?)('|\")/",$val,$matches) == 1)
        echo $matches[3] . "<br />";
}






?>