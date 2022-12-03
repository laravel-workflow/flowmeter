<?php

namespace App\Workflows\Signal;

use Illuminate\Support\Facades\Log;
use Workflow\ActivityStub;
use Workflow\SignalMethod;
use Workflow\Workflow;
use Workflow\WorkflowStub;

final class SignalWorkflow extends Workflow
{
    private int $count = 0;

    #[SignalMethod]
    public function increment()
    {
        $this->count += 1;
    }

    public function execute($numberOfSignalsToAwait = 0)
    {
        $result = yield ActivityStub::make(SignalActivity::class);

        yield WorkflowStub::await(fn () => $this->count >= $numberOfSignalsToAwait);

        $otherResult = yield ActivityStub::make(OtherSignalActivity::class);

        return 'workflow_' . $result . '_' . $otherResult;
    }
}
