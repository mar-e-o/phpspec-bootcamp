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
}
