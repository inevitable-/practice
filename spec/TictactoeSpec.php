<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TictactoeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Tictactoe');
    }


    function it_has_players()
    {
      $this->get_Player1()->shouldBe("X"); 
      $this->get_Player2()->shouldBe("O");   
    }
}
