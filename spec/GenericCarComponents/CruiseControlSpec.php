<?php

namespace spec\GenericCarComponents;

use GenericCarComponents\CruiseControl;
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
        $this->shouldNotBeTurnedOn();
        $this->turnOn();
        $this->shouldBeTurnedOn();
    }

    function it_can_be_turned_off()
    {
        $this->turnOn();
        $this->shouldBeTurnedOn();

        $this->turnOff();
        $this->shouldNotBeTurnedOn();
    }

}
