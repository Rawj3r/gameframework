<?php

include 'game.class.php';
include 'character.abstract.php';
include 'player.class.php';
include 'bot.class.php';

$game = new Game();
$game->createPlayer('Roger');
$game->createBot('Cyber Wolverine');
$game->setPlayerHP(500);
$game->setPlayerDMG(200);
$game->showPlayer();