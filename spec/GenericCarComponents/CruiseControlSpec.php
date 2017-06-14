<?php

namespace spec\GenericCarComponents;

use GenericCarComponents\CruiseControl;
use GenericCarComponents\ActivationNotAllowedException;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CruiseControlSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(CruiseControl::class);
    }

    function it_should_be_turned_off_when_when_started()
    {
        // or even shorter via ObjectState Matcher
        $this->shouldNotBeTurnedOn();
    }

    function it_can_be_turned_on()
    {
        $this->turnOn();
        $this->shouldBeTurnedOn();
    }

    function it_can_be_turned_off()
    {
        $this->turnOn();
        $this->turnOff();
        $this->shouldNotBeTurnedOn();
    }

    function it_is_turned_off_by_default() {
        $this->shouldNotBeTurnedOn();
    }

    function it_is_not_activated_by_default() {
        $this->shouldNotBeActivated();
    }

    function it_can_be_activated_when_it_is_turned_on()
    {
        $this->turnOn();
        $this->activate();
        $this->shouldBeActivated();
    }

    function it_can_not_be_activated_when_it_is_turned_off()
    {
        $this->turnOff();
        $this->shouldThrow(ActivationNotAllowedException::class)->duringActivate();
    }

    function it_can_be_deactivated()
    {
        $this->turnOn();
        $this->deactivate();
        $this->shouldNotBeActivated();
        $this->shouldBeTurnedOn();

    }

    function it_should_be_automatically_be_deactivated_when_being_turned_off()
    {
        $this->turnOn();
        $this->activate();
        $this->turnOff();
        $this->shouldNotBeActivated();
    }
}
