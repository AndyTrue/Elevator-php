<?php
require_once 'vendor/autoload.php';

use Elevator\Elevator;
use Elevator\State\Move;
use Elevator\State\Stop;


$elevator = new Elevator(new Stop());

$elevator->stop();

$elevator->setState(new Move);

$elevator->move();
//error
$elevator->open();