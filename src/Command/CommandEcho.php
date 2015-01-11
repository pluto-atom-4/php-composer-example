<?php
/**
 * Created by PhpStorm.
 * User: manbo
 * Date: 1/5/15
 * Time: 3:22 PM
 */

namespace Example\Command;

require 'vendor/autoload.php';

use AdamBrett\ShellWrapper\Command\Builder as CommandBuilder;

class CommandEcho
{
    private $command; /*  = new Command(); */
    private $param = "";

    function __construct()
    {
        $command = new CommandBuilder('echo');
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
        $this->param = $param;
        return $this;
    }

    public function compose()
    {
        $this->command->addParam($this->param);
        return $this;
    }

    public function get()
    {
        return $this->command;
    }

}