<?php

declare(strict_types=1);

namespace MinionTest;

use Minion\ConfigProvider;
use PHPUnit\Framework\TestCase;

class ConfigProviderTest extends TestCase
{
    /**
     * @covers \Minion\ConfigProvider
     */
    public function test__invoke(): void
    {
        $configProvider = new ConfigProvider();
        $config         = $configProvider();

        $this->assertIsArray($config);
        $this->assertArrayHasKey('dependencies', $config);
        $this->assertIsArray($config['dependencies']);
        $this->assertArrayHasKey('factories', $config['dependencies']);
        $this->assertIsArray($config['dependencies']['factories']);
    }
}
