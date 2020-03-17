<?php


namespace Elevator;


use Elevator\Interfaces\ElevatorInterface;

class Elevator
{
    private $state;

    public function __construct(ElevatorInterface $elevator)
    {
        $this->state = $elevator;
    }

    public function setState(ElevatorInterface $elevator)
    {
        $this->state = $elevator;
    }

    public function open()
    {
        $this->state->open();
    }

    public function close()
    {
        $this->state->close();
    }

    public function move()
    {
        $this->state->move();
    }

    public function stop()
    {
        $this->state->stop();
    }
}