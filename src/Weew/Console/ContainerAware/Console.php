<?php

namespace Weew\Console\ContainerAware;

use Weew\Console\Console as BaseConsole;
use Weew\Container\IContainer;

class Console extends BaseConsole {
    /**
     * Console constructor.
     *
     * @param IContainer $container
     */
    public function __construct(IContainer $container) {
        parent::__construct(new CommandInvoker($container));
    }
}
