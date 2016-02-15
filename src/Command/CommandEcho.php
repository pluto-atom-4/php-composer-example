<?php
/**
 * Created by PhpStorm.
 * User: manbo
 * Date: 1/5/15
 * Time: 3:22 PM
 */

namespace Example\Command;

require 'vendor/autoload.php';

use AdamBrett\ShellWrapper\Command;
use AdamBrett\ShellWrapper\Command\AbstractCommand;
use AdamBrett\ShellWrapper\Command\Argument;
use AdamBrett\ShellWrapper\Command\Flag;
use AdamBrett\ShellWrapper\Command\Param;
use AdamBrett\ShellWrapper\Command\SubCommand;

class CommandEcho
{
    private $command; /*  = new Command(); */

    function __construct()
    {
        $this->command = new Command('echo');
    }

    /**
     * @return Command
     */
    public function getCommand()
    {
        return $this->command;
    }

    /**
     * @param string $param
     */
    public function setParam($param)
    {
        $this->command->addParam(new Param($param));
        return $this;
    }

}