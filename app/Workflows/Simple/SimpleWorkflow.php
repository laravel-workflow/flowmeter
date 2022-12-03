<?php

namespace App\Workflows\Simple;

use Workflow\ActivityStub;
use Workflow\Workflow;

final class SimpleWorkflow extends Workflow
{
    public function execute()
    {
        $result = yield ActivityStub::make(SimpleActivity::class);

        return 'workflow_' . $result;
   }
}
