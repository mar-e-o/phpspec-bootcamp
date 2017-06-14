<?php

namespace GenericCarComponents;

class CruiseControl
{
    /** @var bool  */
    private $isTurnedOn = false;

    /** @var bool  */
    private $isActivated = false;

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
        $this->deactivate();
        $this->isTurnedOn = false;
    }

    public function activate()
    {
        if (!$this->isTurnedOn()) {
            throw new ActivationNotAllowedException();
        }
        $this->isActivated = true;
    }

    /**
     * @return bool
     */
    public function isActivated()
    {
        return $this->isActivated;
    }

    public function deactivate()
    {
        $this->isActivated = false;
    }
}
