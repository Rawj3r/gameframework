<?php

include 'game.class.php';
include 'character.abstract.php';
include 'player.class.php';
include 'bot.class.php';
include 'session.class.php';

// init session
$ss = new Session();
$game = new Game();

//model and give defaults to a character
$game->create('player', 'Roger');
$game->player['Roger']->setHP(200);
$game->player['Roger']->setDMG(12);
$game->player['Roger']->show();


$ss->register('Roger', $game->player['Roger']);

//model and give defaults to a character
$game->create('bot', 'CyberWolverine');
$game->bot['CyberWolverine']->setHP(600);
$game->bot['CyberWolverine']->setDMG(132);
$game->bot['CyberWolverine']->show();

$game->player['Roger']->battle($game->bot['CyberWolverine']);

$ss->show();



