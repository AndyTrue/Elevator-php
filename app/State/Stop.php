<?php


namespace Elevator\State;




use Elevator\Interfaces\ElevatorStopInterface;

class Stop implements ElevatorStopInterface
{

    public function stop()
    {
        echo 'Elevator stop';
    }


}