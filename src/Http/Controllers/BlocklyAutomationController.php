<?php

declare(strict_types=1);

namespace CarolPelu\BlocklyAutomation\Http\Controllers;

use CarolPelu\BlocklyAutomation\Http\Controllers\Controller;

class BlocklyAutomationController extends Controller
{
    public function __invokable()
    {
        return view('blockly-automation::index');
    }
}