<?php
/**
 * Created by JetBrains PhpStorm.
 * User: chillwalker
 * Date: 04.07.13
 * Time: 21:45
 * To change this template use File | Settings | File Templates.
 */
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Wizzard App 0.1</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />

    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.css" />
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css"/>
    <?php
    //TODO: URL-Leiste ausblenden
    /*
     *  <script type="text/javascript">
     *      if(navigator.userAgent.match(/Android/i)){
     *          window.scrollTo(0,1);
     *      }
     *   </script>
     *
     */
    ?>
</head>
<body>
<!-- Start of "Hauptmenü" page -->
<div data-role="page" id="main">

    <div data-role="header" data-position="fixed">
        <h1>Wizzard App v0.1</h1>
    </div>

    <div data-role="content">
        <div class="ui-grid-a">
            <div class="ui-block-a"><a href="#new-game" data-role="button">Neues Spiel</a></div>
            <div class="ui-block-b"><a href="#old-game" data-role="button">Spiel laden</a></div>

            <div class="ui-block-a"><a href="#statistics" data-role="button">Statistiken</a></div>
            <div class="ui-block-b"><a href="#options" data-role="button">Optionen</a></div>
        </div>
    </div>

    <div data-role="footer" data-position="fixed">
        <h4><a href="#end" data-rel="dialog" data-transition="pop">Wizzard Beenden</a></h4>
    </div>
</div>

<?php include 'content/new-game.php'?>

<?php include 'content/load-game.php'?>

<?php include 'content/statistics.php'?>

<?php include 'content/options.php'?>

<?php include 'content/messages.php'?>

<script src="js/jquery-1.9.1.js"></script>
<script src="js/ui/jquery-ui.js"></script>
<script src="js/wizard.js"></script>

<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>
<script src="js/wizard.js"></script>
</body>
</html>
