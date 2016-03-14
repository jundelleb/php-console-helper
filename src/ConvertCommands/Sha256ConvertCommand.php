<?php

namespace Pch\ConvertCommands;

use Pch\ConvertCommands\AbstractConvertCommand;

class Sha256ConvertCommand extends AbstractConvertCommand
{
	/**
     * Command "method" alias
     *
     * @var string
     */
    protected $method = 'sha256';

    /**
     * Command description
     *
     * @var string
     */
    protected $description = 'Convert string input to sha256.';
}