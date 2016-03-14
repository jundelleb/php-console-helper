<?php

namespace Pch\ConvertCommands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

abstract class AbstractConvertCommand extends Command
{
    /**
     * Command namespace
     *
     * @var string
     */
    private $namespace = 'convert';

    /**
     * Command "method" alias
     *
     * Sample input: md5
     * Registers: convert:md5
     *
     * @var string
     */
    protected $method;

    /**
     * Command description
     *
     * @var string
     */
    protected $description;

    /**
     * Argument name
     *
     * @var string
     */
    protected $argName = 'string';

    /**
     * Command options
     *
     * @var array
     */
    protected $options = [];

	/**
     * Configure the command options.
     *
     * @return void
     */
    protected function configure()
    {
        $this
            ->setName("{$this->namespace}:{$this->method}")
            ->setDescription($this->description)
            ->addArgument($this->argName, InputArgument::REQUIRED, 'The input string.')
            ->configureOptions();
    }

    /**
     * Execute the command.
     *
     * @param  InputInterface  $input
     * @param  OutputInterface  $output
     * @return void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $string = $input->getArgument($this->argName);
        // Add string argument to array of parameters
        $params = [$this->method, $string]; // algo and input
        $result = call_user_func_array('hash', $params);
        
        $output->writeln($result);
    }

    /**
     * Option configurations
     *
     * @return void
     */
    protected function configureOptions()
    {
        foreach ($this->options as $option)
        {
            call_user_method_array('addOption', $this, $option);
        }

        return $this;
    }
}