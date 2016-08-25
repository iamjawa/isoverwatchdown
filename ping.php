<?php

function ping($host)
{
        exec(sprintf('ping -c 1 -W 2 %s', escapeshellarg($host)), $res, $rval);
        return $rval === 0;
}

$eu = 'overwatchtracker.com'; // Waiting on IP's
$eup = ping($eu);

$american = 'overwatchtracker.com'; // Waiting on IP's
$aup = ping($american);

$korean = 'overwatchtracker.com'; // Waiting on IP's
$kup = ping($korean);

?>
