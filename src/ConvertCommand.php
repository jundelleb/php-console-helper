<?php

namespace Pch;

use Symfony\Component\Console\Command\Command;
use RuntimeException;

class ConvertCommand
{
    /**
     * Array of commands
     *
     * @var array
     */
    private $commands = [
        '\Pch\ConvertCommands\Md5ConvertCommand',
        '\Pch\ConvertCommands\Sha1ConvertCommand',
        '\Pch\ConvertCommands\Sha256ConvertCommand',
        '\Pch\ConvertCommands\Base64ConvertCommand',
    ];

    /**
     * Initialized commands
     *
     * @var array
     */
    private $initCommands = [];

    /**
     * Command Constructor
     */
	public function __construct()
    {
        $this->addMany($this->commands);
    }

    /**
     * Returns all defined commands
     *
     * @return array
     */
    private function commands()
    {
        return $this->initCommands;
    }

    /**
     * Static function to retrieve all commands
     *
     * @return array
     */
    public static function getAll()
    {
        return (new static)->commands();
    }

    /**
     * Add command
     *
     * @param \Symfony\Component\Console\Command\Command $command
     * @return $this
     */
    private function add(Command $command)
    {
        $this->initCommands[] = $command;

        return $this;
    }

    /**
     * Add method that accepts array of commands
     *
     * @param array
     * @return $this
     */
    private function addMany($commands = array())
    {
        foreach ($commands as $command) {

            if( ! class_exists($command)) {
                throw new RuntimeException("Class '{$command}' not found.");
            }

            $this->add(new $command);
        }

        return $this;
    }
}