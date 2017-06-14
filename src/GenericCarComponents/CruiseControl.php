<?php

namespace GenericCarComponents;

class CruiseControl
{
    /** @var bool  */
    private $isTurnedOn = false;

    /**
     * @return bool
     */
    public function isTurnedOn()
    {
        return $this->isTurnedOn;
    }

    public function turnOn()
    {
        $this->isTurnedOn = true;
    }

    public function turnOff()
    {
        $this->isTurnedOn = false;
    }
}
