<?php

namespace App\Workflows\Signal;

use Workflow\Activity;

final class SignalActivity extends Activity
{
    public function execute()
    {
        return 'activity';
    }
}
