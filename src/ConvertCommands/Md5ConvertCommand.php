<?php

namespace Pch\ConvertCommands;

use Pch\ConvertCommands\AbstractConvertCommand;

class Md5ConvertCommand extends AbstractConvertCommand
{
	/**
	 * Command "method" alias
	 *
	 * @var string
	 */
	protected $method = 'md5';

	/**
	 * Command description
	 *
	 * @var string
	 */
	protected $description = 'Convert string input to md5.';
}