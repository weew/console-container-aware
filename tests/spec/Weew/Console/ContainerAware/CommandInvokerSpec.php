<?php

namespace tests\spec\Weew\Console\ContainerAware;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use stdClass;
use tests\spec\Weew\Console\ContainerAware\Mocks\FakeCommand;
use Weew\Console\Console;
use Weew\Console\ContainerAware\CommandInvoker;
use Weew\Console\Input;
use Weew\Console\Output;
use Weew\ConsoleArguments\Command;
use Weew\Container\Container;

/**
 * @mixin CommandInvoker
 */
class CommandInvokerSpec extends ObjectBehavior {
    function let() {
        $this->beConstructedWith(new Container());
    }

    function it_is_initializable() {
        $this->shouldHaveType(CommandInvoker::class);
    }

    function it_creates() {
        $this->create(FakeCommand::class)->shouldHaveType(FakeCommand::class);
    }

    function it_setups() {
        $command = new FakeCommand(new stdClass());
        $consoleCommand = new Command();

        $this->setup($command, $consoleCommand);
    }

    function it_runs() {
        $command = new FakeCommand(new stdClass());
        $input = new Input();
        $output = new Output();
        $console = new Console();

        $this->run($command, $input, $output, $console);
    }
}
