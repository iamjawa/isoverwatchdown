<?php

function ping($host)
{
        exec(sprintf('ping -c 1 -W 2 %s', escapeshellarg($host)));
}

sleep(5);
$eu = '185.60.112.157';
sleep(3);
$american = '37.244.0.3';
sleep(3);
$korean = '121.254.206.1';

$eup = ping($eu);
$aup = ping($american);
$kup = ping($korean);

?>
