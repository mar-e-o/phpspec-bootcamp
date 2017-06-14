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

    function it_should_know_if_it_is_turned_on()
    {
        // Via Identity Matcher
        $this->isTurnedOn()->shouldBe(true);

        // or even shorter via ObjectState Matcher
        $this->shouldBeTurnedOn();

    }
}
