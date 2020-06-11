<?php

declare(strict_types=1);

namespace Minion;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
                'factories' => [],
            ],
        ];
    }
}
