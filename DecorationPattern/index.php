<?php
namespace DecorationPattern;
include_once "../AutoLoad.php";

$plain = new Plains();
echo $plain->getWealthFactor() . PHP_EOL;

$diamondPlains = new DiamondDecorator($plain);
echo 'diamond plains: ' . $diamondPlains->getWealthFactor() . PHP_EOL;

$pollutionPlains = new PollutionDecorator($plain);
echo 'pollution plains:' . $pollutionPlains->getWealthFactor() . PHP_EOL;

$pollutedDiamondPlains = new PollutionDecorator($diamondPlains);
echo 'polluted diamond plains: ' . $pollutedDiamondPlains->getWealthFactor() . PHP_EOL;