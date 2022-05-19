<?php

declare(strict_types=1);

namespace CarolPelu\BlocklyAutomation\Tests\Http\Controllers;

use Illuminate\Http\Response;
use CarolPelu\BlocklyAutomation\Tests\TestCase;

class BlocklyAutomationControllerTest extends TestCase
{
    /** @test */
    function blockly_automation_route_is_accessible()
    {
        $response = $this->call('GET', $this->baseRoute);

        $response->assertStatus(Response::HTTP_OK);
    }
}
