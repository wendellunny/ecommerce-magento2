<?php

namespace Magento\HelloWorld\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;


class HelloWorldCommand extends Command
{
    private const MESSAGE = 'message';

    protected function configure()
    {
        $this->setName('wendel:hello:world');
        $this->addOption(
            self::MESSAGE,
            null,
            InputOption::VALUE_OPTIONAL,
            'Mensagem'
        );
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $message =$input->getOption(self::MESSAGE) ?: 'HelloWorld';
        $output->writeln("<info>{$message}</info>");

        return 1;
    }

}
