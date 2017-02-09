<?php

namespace App\Console\Command;

use OsLab\Console\Command\AbstractContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class LogCommand.
 */
class LogCommand extends AbstractContainerAwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('app:log')
            ->setDescription('View logs')
            ->setHelp("This command allows you to view logs")
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $logger = $this->getContainer()->get('app.logger');

        $logger->log('Hello');

        foreach ($logger->getLogs() as $log) {
            $output->writeln($log);
        }
    }
}