<?php

namespace Pch;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Faker\Factory as Faker;
use InvalidArgumentException;

class FakerCommand extends Command
{
	/**
	 * Contains the faker instance
	 *
	 * @var \Faker\Factory
	 */
	private $faker;

	/**
	 * Command Constructor
	 */
	public function __construct()
	{
		$this->faker = Faker::create();

		parent::__construct();
	}

	/**
     * Configure the command options.
     *
     * @return void
     */
    protected function configure()
    {
    	 $this
            ->setName('faker')
            ->setDescription('Generates fake data for you.')
            ->addArgument('formatter', InputArgument::REQUIRED)
            ->addOption('params', 'p', InputOption::VALUE_OPTIONAL, 'Defines the formatter parameters.');
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
        $formatter = $input->getArgument('formatter');
        $params = [];

        // If 'params' option is not empty, parse it into array
        if( ! empty($strParam = $input->getOption('params'))) {
            $params = explode(',', $strParam);
        }

        try {
            $data = call_user_method_array($formatter, $this->faker, $params);
        	$output->writeln($data);
        } catch(InvalidArgumentException $e) {
            $output->writeln("<error>{$e->getMessage()}</error>");
            $output->writeln("Visit https://github.com/fzaninotto/Faker for complete lists of valid formatters.");
        }
    }
}