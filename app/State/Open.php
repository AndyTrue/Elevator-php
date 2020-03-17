<?php


namespace Elevator\State;


use Elevator\Interfaces\ElevatorOpenInterface;

class Open implements ElevatorOpenInterface
{

    public function open()
    {
        echo 'Elevator open';
    }
}