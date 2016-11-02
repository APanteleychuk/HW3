<?php

require_once 'vendor/autoload.php';

use Motorcycle\Sport;
use Motorcycle\Chopper;

$honda = new Sport();
$honda->setName('Honda CBR');
$honda->setModel('cbr600');
$honda->setNumberClass(1);
$honda->setPilot('Pedrossa');
$honda->setMaxSpeed(340);
$honda->printShortInfo();

$harley = new Chopper();
$harley->setName('Harley Davidson');
$harley->setModel('Fat boy 1500');
$harley->setPilot('Rossi');
$harley->setMaxSpeed(210);
$harley->printShortInfo();

$ducati = new Sport();
$ducati->setName('Ducati Monstre');
$ducati->setModel('999');
$ducati->setMaxSpeed(420);
$ducati->setPilot('Lorenso');
$ducati->setNumberClass(1);
$ducati->printShortInfo();

$array = [$honda, $harley, $ducati];
echo '<br>Output Motorcycle:<br>';
foreach ($array as $item) {
    $item->printInfo();
    echo '<br>';
}