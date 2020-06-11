<?php

declare(strict_types=1);

namespace Minion\Command;

use Psr\Container\ContainerInterface;

class KevinFactory
{
    public function __invoke(ContainerInterface $container): Kevin
    {
        $options = $container->get('config')[Kevin::class];
        return new Kevin(
            $options['question'],
            $options['answer'],
        );
    }
}
