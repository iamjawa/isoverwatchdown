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

        <div class="row statuses">
          <div class="col s4 status-box">
            <p class="eu-status-box">
              <?php

                            if ($eup) {
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

                            if ($aup) {
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

                            if ($kup) {
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

        <div class="row">
          <div class="col s12">
            <h4 class="plug">
              Made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://www.twitter.com/iamjawa" target="_blank" class="plug_link">iamjawa</a>
            </h4>
          </div>
        </div>
      </main>
    </body>

</html>
