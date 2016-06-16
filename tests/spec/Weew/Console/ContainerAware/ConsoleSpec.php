<?php

namespace tests\spec\Weew\Console\ContainerAware;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Weew\Console\ContainerAware\CommandInvoker;
use Weew\Console\ContainerAware\Console;
use Weew\Console\IInput;
use Weew\Console\Input;
use Weew\Console\IOutput;
use Weew\Console\Output;
use Weew\Container\Container;
use Weew\Container\IContainer;

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

    function it_takes_and_returns_container() {
        $container = new Container();
        $this->getContainer()->shouldHaveType(IContainer::class);
        $this->setContainer($container);
        $this->getContainer()->shouldBe($container);
    }

    function it_shares_input_and_output_instances() {
        $this->getContainer()->has(IInput::class)->shouldBe(true);
        $this->getContainer()->has(Input::class)->shouldBe(true);
        $this->getContainer()->has(IOutput::class)->shouldBe(true);
        $this->getContainer()->has(Output::class)->shouldBe(true);
    }

    function it_replaces_command_invoker_when_container_is_changed() {
        $invoker = $this->getCommandInvoker();
        $this->setContainer(new Container());
        $this->getCommandInvoker()->shouldHaveType(CommandInvoker::class);
        $this->getCommandInvoker()->shouldNotBe($invoker);
    }
}
