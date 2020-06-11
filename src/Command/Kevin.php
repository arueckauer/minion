<?php

declare(strict_types=1);

namespace Minion\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use function sprintf;

class Kevin extends Command
{
    private string $question;
    private string $answer;

    public function __construct(string $question, string $answer)
    {
        $this->question = $question;
        $this->answer   = $answer;

        parent::__construct('minion:kevin');
    }

    protected function configure(): void
    {
        $this->setDescription('Kevin answers confusingly to Scarlet Overkill');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln(sprintf('<question>%s</question>', $this->question));
        $output->writeln(sprintf('<info>%s</info>', $this->answer));

        return 0;
    }
}
