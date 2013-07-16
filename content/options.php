<?php
/**
 * Created by JetBrains PhpStorm.
 * User: chillwalker
 * Date: 04.07.13
 * Time: 23:20
 * To change this template use File | Settings | File Templates.
 */
?>

<div data-role="page" id="options">

    <div data-role="header" data-position="fixed">
        <h1>Optionen</h1>
    </div>

    <div data-role="content">
        Hier gibts Optionen und Shit...

        <label for="do-shit">Do shit:</label>
        <select name="do-shit" id="do-shit" data-role="slider">
            <option value="off">No</option>
            <option value="on">Yes</option>
        </select>

        <label for="do-other-shit">Do other shit:</label>
        <select name="do-other-shit" id="do-other-shit" data-role="slider">
            <option value="off">No</option>
            <option value="on">Yes</option>
        </select>

    </div>

    <div data-role="footer" data-position="fixed">
        <h4><a href="#main">Zurück zum Hauptmenü</a></h4>
    </div>
</div>