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
          echo "This shows the PHP is working";
          $euserver = '185.60.112.157';
          $americanserver = '37.244.0.3';
          $koreaserver = '121.254.206.1';
          $taiwanserver = '203.75.93.129';

          $ch = curl_init();

          // set URL and other appropriate options
          curl_setopt($ch, CURLOPT_URL, "$euserver");
          curl_setopt($ch, CURLOPT_HEADER, 0);

          // grab URL and pass it to the browser
          curl_exec($ch);

          if ( $ch ) {
            echo "<h2>Probably Not</h2>";
          }

          else {
            echo "<h2>Probably</h2>";
          }

          // close cURL resource, and free up system resources
          curl_close($ch);
         ?>
      </main>
    </body>

</html>
