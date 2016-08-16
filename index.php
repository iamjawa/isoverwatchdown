<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="17, Freelance Web Developer, UK.">
        <meta name="keywords" content="Genuinity, Genuine">
        <meta name="authxor" content="iamjawa">
        <meta name="theme-color" content="#435662">
        <title>Is Overwatch Down?</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="/css/main.css" type="text/css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/materialize/0.97.7/css/materialize.min.css">
        <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
    </head>

    <body>
      <main>
        <h1 class="main-header">Is Overwatch <span class="down-title">Down</span>?</h1>

        <?php
        
          function ping($host) {
            exec(sprintf('ping -c 1 -W 5 %s', escapeshellarg($host)), $res, $rval);
            return $rval === 0;
          }

          echo "This shows the PHP is working";
          $euserver = 'eu.battle.net';
          $americanserver = '37.244.0.3';
          $koreaserver = '121.254.206.1';
          $taiwanserver = '203.75.93.129';

          $euping = ping($euserver);
          $amping = ping($americanserver);
          $koping = ping($koreaserver);
          $taping = ping($taiwanserver);

          if ( $euping ) {
            echo "<h2>Probably Not</h2>";
          }

          else {
            echo "<h2>Probably</h2>";
          }
         ?>
      </main>
    </body>

</html>
