<?php

function ping($host)
{
        exec(sprintf('ping -c 1 -W 2 %s', escapeshellarg($host)), $res, $rval);
        return $rval === 0;
}

$eu = 'overwatchtracker.com';
$eup = ping($eu);

$american = 'overwatchtracker.com';
$aup = ping($american);

$korean = 'overwatchtracker.com';
$kup = ping($korean);

?>
