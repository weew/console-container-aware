<?php

namespace tests\spec\Weew\Console\ContainerAware\Mocks;

use stdClass;
use Weew\Console\IConsole;
use Weew\Console\IInput;
use Weew\Console\IOutput;
use Weew\ConsoleArguments\ICommand;

class FakeCommand {
    public function __construct(stdClass $object) {}
    public function setup(ICommand $command, ICommand $cmd) {}
    public function run(IInput $input, IInput $in, IOutput $output, IOutput $out, IConsole $console) {}
}
