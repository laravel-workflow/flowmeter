<?php

namespace App\Workflows\Signal;

use Workflow\Activity;

final class OtherSignalActivity extends Activity
{
    public function execute()
    {
        return 'other_activity';
    }
}
