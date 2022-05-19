<?php

declare(strict_types=1);

namespace CarolPelu\BlocklyAutomation\Tests;

use Orchestra\Testbench\TestCase as TestbenchTestCase;
use CarolPelu\BlocklyAutomation\ServiceProviders\BlocklyAutomationServiceProvider;

class TestCase extends TestbenchTestCase
{
    protected $baseRoute;

    public function setUp(): void
    {
        parent::setUp();

        $this->baseRoute = '/BlocklyAutomation';
    }

    protected function getPackageProviders($app)
    {
        return [
            BlocklyAutomationServiceProvider::class,
        ];
    }
}
