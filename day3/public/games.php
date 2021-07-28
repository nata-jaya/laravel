<?php
require __DIR__ . '/../vendor/autoload.php';

use App\BasketBall;

$games = new BasketBall('Chicago Bulls','Miami Heat');

echo "Home :<br />";
$games->home() ;
echo "<br />";
$games->homeScore();
echo "<br />";
$games->homeThreePoints();
$games->homeScore();
echo "<br />";

echo "Away : <br />";
$games->away();
echo "<br />";
$games->awayScore();
echo "<br />";
$games->awayTwoPoints();
$games->awayScore();
echo "<br />";
$games->awayOnePoint();
$games->awayScore();
echo "<br />";
$games->homeOnePoint();
$games->homeScore();
