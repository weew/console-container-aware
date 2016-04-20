<?php

namespace Weew\Console\ContainerAware;

use Weew\Console\Console as BaseConsole;
use Weew\Container\IContainer;

class Console extends BaseConsole {
    /**
     * @var IContainer
     */
    protected $container;

    /**
     * Console constructor.
     *
     * @param IContainer $container
     */
    public function __construct(IContainer $container) {
        parent::__construct();
        $this->setContainer($container);
    }

    /**
     * @return IContainer
     */
    public function getContainer() {
        return $this->container;
    }

    /**
     * @param IContainer $container
     */
    public function setContainer(IContainer $container) {
        $this->container = $container;
        $this->setCommandInvoker(new CommandInvoker($container));
    }
}
