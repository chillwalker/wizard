<?php
/**
 * Created by JetBrains PhpStorm.
 * User: chillwalker
 * Date: 04.07.13
 * Time: 23:17
 * To change this template use File | Settings | File Templates.
 */
?>

<div data-role="page" id="new-game">

    <div data-role="header" data-position="fixed">
        <h1>Neues Spiel</h1>
    </div>

    <div class="ui-grid-solo" data-role="content">
        <div class="ui-block-a">
            <form>
                <label for="slider-1">Anzahl an Spielern</label>
                <input type="range" name="new-game-players" id="slider-1" min="2" max="6" value="3">
            </form>
        </div>
    </div>

    <div data-role="footer" data-position="fixed">
        <h4><a href="#main">Zurück zum Hauptmenü</a></h4>
    </div>
</div>