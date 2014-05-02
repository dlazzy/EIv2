<?php
error_reporting(~0);
ini_set('display_errors', 1);
?>
<?php

    $URL = 'http://88.219.157.105:8080/';

    $lumi = file_get_contents($URL, FILE_USE_INCLUDE_PATH);

if ($lumi === false)
{
echo 'erreur';
}
else
{
echo substr($lumi, strpos($lumi, "Luminosite")+13);
}
?>
