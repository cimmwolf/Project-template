<?php
require_once __DIR__ . '/../../config.php';

use DenisBeliaev\AdaptiveImg;

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="/dist/css/style.css" rel="stylesheet">

    <title>Site Template</title>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
        (function () {
            if ('registerElement' in document
                && 'import' in document.createElement('link')
                && 'content' in document.createElement('template')) {
                // platform is good!
            } else {
                // polyfill the platform!
                document.write('<script src="/bower_components/webcomponentsjs/webcomponents-lite.min.js"><\/script>');
            }
        })();
    </script>
    <script src="/bower_components/picturefill/dist/picturefill.min.js" async></script>
    <script src="/bower_components/flexibility/dist/flexibility.js" async></script>
</head>
<body>

</body>
</html>