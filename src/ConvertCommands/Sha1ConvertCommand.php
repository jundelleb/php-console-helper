<?php

namespace Pch\ConvertCommands;

use Pch\ConvertCommands\AbstractConvertCommand;

class Sha1ConvertCommand extends AbstractConvertCommand
{
	/**
     * Command "method" alias
     *
     * @var string
     */
    protected $method = 'sha1';

    /**
     * Command description
     *
     * @var string
     */
    protected $description = 'Convert string input to sha1.';
}