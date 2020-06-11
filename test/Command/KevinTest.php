<?php

declare(strict_types=1);

namespace MinionTest\Command;

use Minion\Command\Kevin;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Tester\CommandTester;

class KevinTest extends TestCase
{
    /**
     * @covers \Minion\Command\Kevin
     */
    public function testExecute(): void
    {
        $command       = new Kevin(
            'Do you know who this is?',
            'Uh... la cucaracha?',
        );
        $commandTester = new CommandTester($command);
        $commandTester->execute([]);

        $output = $commandTester->getDisplay();
        $this->assertStringContainsString("Do you know who this is?\r\nUh... la cucaracha?\r\n", $output);
    }
}
