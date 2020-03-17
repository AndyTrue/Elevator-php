<?php


namespace Elevator\State;


use Elevator\Interfaces\ElevatorMoveInterface;

class Move implements ElevatorMoveInterface
{

    public function move()
    {
        echo 'Elevator move';
    }
}