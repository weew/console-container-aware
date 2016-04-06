<?php

namespace tests\spec\Weew\Console\ContainerAware;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Weew\Console\ContainerAware\CommandInvoker;
use Weew\Console\ContainerAware\Console;
use Weew\Container\Container;

/**
 * @mixin Console
 */
class ConsoleSpec extends ObjectBehavior {
    function let() {
        $this->beConstructedWith(new Container());
    }

    function it_is_initializable() {
        $this->shouldHaveType(Console::class);
    }

    function it_uses_container_aware_command_invoker() {
        $this->getCommandInvoker()->shouldHaveType(CommandInvoker::class);
    }
}
