<?php

namespace Weew\Console\ContainerAware;

use Weew\Console\ICommandInvoker;
use Weew\Console\IConsole;
use Weew\Console\IInput;
use Weew\Console\IOutput;
use Weew\ConsoleArguments\ICommand;
use Weew\Container\IContainer;

class CommandInvoker implements ICommandInvoker {
    /**
     * @var IContainer
     */
    private $container;

    /**
     * CommandInvoker constructor.
     *
     * @param IContainer $container
     */
    public function __construct(IContainer $container) {
        $this->container = $container;
    }

    /**
     * @param string $handler
     *
     * @return object
     */
    public function create($handler) {
        return $this->container->instantiate($handler);
    }

    /**
     * @param object $handler
     * @param ICommand $command
     */
    public function setup($handler, ICommand $command) {
        $this->container->callMethod($handler, 'setup', [
            'command' => $command,
            'cmd' => $command
        ]);
    }

    /**
     * @param object $handler
     * @param IInput $input
     * @param IOutput $output
     * @param IConsole $console
     */
    public function run($handler, IInput $input, IOutput $output, IConsole $console) {
        $this->container->callMethod($handler, 'run', [
            'input' => $input,
            'in' => $input,
            'output' => $output,
            'out' => $output,
            'console' => $console,
        ]);
    }
}
