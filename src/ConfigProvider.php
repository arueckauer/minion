<?php

declare(strict_types=1);

namespace Minion;

use Minion\Command\Kevin;
use Minion\Command\KevinFactory;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
                'factories' => [
                    Kevin::class => KevinFactory::class,
                ],
            ],
        ];
    }
}
