<?php

declare(strict_types=1);

use Laminas\ConfigAggregator\ConfigAggregator;
use Laminas\ConfigAggregator\PhpFileProvider;

$aggregator = new ConfigAggregator([
    Minion\ConfigProvider::class,
    new PhpFileProvider(__DIR__ . '/minion.php'),
]);

return $aggregator->getMergedConfig();
