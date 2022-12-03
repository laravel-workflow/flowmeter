<?php

namespace App\Workflows\Simple;

use Workflow\Activity;

final class SimpleActivity extends Activity
{
    public function execute()
    {
        return 'activity';
    }
}
