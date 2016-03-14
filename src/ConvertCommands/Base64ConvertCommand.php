<?php

namespace Pch\ConvertCommands;

use Pch\ConvertCommands\AbstractConvertCommand;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Base64ConvertCommand extends AbstractConvertCommand
{
	/**
     * Command "method" alias
     *
     * @var string
     */
    protected $method = 'base64';

    /**
     * Command description
     *
     * @var string
     */
    protected $description = 'Convert string input to base64 encoded/decoded.';

    /**
     * Command options
     *
     * @var array
     */
    protected $options = [
        ['decode', 'd', InputOption::VALUE_NONE, 'Use base64_decode.']
    ];

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
        $decode = $input->getOption('decode');

        if($decode) {
            $result = base64_decode($string);
        } else {
            $result = base64_encode($string);
        }
        
        $output->writeln($result);
    }
}