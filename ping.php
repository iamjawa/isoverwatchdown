<?php

function ping($host)
{
        exec(sprintf('ping -c 1 -W 2 %s', escapeshellarg($host)), $res, $rval);
        return $rval === 0;
}

$eu = '185.60.112.157';
$eup = ping($eu);

$american = '37.244.0.3';
$aup = ping($american);

$korean = '121.254.206.1';
$kup = ping($korean);

?>
