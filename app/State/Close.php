<?php


namespace Elevator\State;


use Elevator\Interfaces\ElevatorCloseInterface;

class Close implements ElevatorCloseInterface
{

    public function close()
    {
        echo 'Elevator close';
    }
}