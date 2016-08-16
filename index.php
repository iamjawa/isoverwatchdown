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
        <link rel="stylesheet" href="/css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/materialize/0.97.7/css/materialize.min.css">
        <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
    </head>

    <body>
      <main>
        <h1 class="main-header">Is Overwatch <span class="down-title">Down</span>?</h1>

        <?php

        function ping($host)
        {
                exec(sprintf('ping -c 1 -W 5 %s', escapeshellarg($host)), $res, $rval);
                return $rval === 0;
        }

        $host = 'www.google.com';
        $up = ping($host);

        function ping($american)
        {
                exec(sprintf('ping -c 1 -W 5 %s', escapeshellarg($american)), $res, $rval);
                return $rval === 0;
        }

        $american = 'www.google.com';
        $aup = ping($american);

        if ($up && $aup) {
          echo "<h2 class='not-down'>Probably Not Down.</h2>";
        }

        else {
          echo "<h2 class='down'>Looks Like It From Here.</h2>";
        }

        ?>

        <div class="row">
          <div class="col s4 status-box">
            <p class="eu-status-box">
              <?php

                            $host = 'www.isoverwatchdown.com';
                            $up = ping($host);

                            if ($up) {
                              echo "<i class='fa fa-check status-up' aria-hidden='true'></i><br>";
                              echo "<h3 class='status-box'>EU Server is Responding.</h3>";
                            }

                            else {
                              echo "<i class='fa fa-times status-down' aria-hidden='true'></i><br>";
                              echo "<h3 class='status-box'>EU Server is not Responding.</h3>";
                            }
                ?>
            </p>
          </div>

          <div class="col s4 status-box">
            <p class="am-status-box">
              <?php

                            $host = 'www.google.com';
                            $up = ping($host);

                            if ($up) {
                              echo "<i class='fa fa-check status-up' aria-hidden='true'></i><br>";
                              echo "<h3 class='status-box'>American Server is Responding.</h3>";
                            }

                            else {
                              echo "<i class='fa fa-times status-down' aria-hidden='true'></i><br>";
                              echo "<h3 class='status-box'>American Server is not Responding.</h3>";
                            }
                ?>
            </p>
          </div>

          <div class="col s4 status-box">
            <p class="ko-status-box">
              <?php

                            $host = 'www.google.com';
                            $up = ping($host);

                            if ($up) {
                              echo "<i class='fa fa-check status-up' aria-hidden='true'></i><br>";
                              echo "<h3 class='status-box'>Korean Server is Responding.</h3>";
                            }

                            else {
                              echo "<i class='fa fa-times status-down' aria-hidden='true'></i><br>";
                              echo "<h3 class='status-box'>Korean Server is not Responding.</h3>";
                            }
                ?>
            </p>
          </div>
        </div>


      </main>
    </body>

</html>
