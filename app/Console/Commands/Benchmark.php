<?php

namespace App\Console\Commands;

use App\Workflows\TestWorkflow;
use Illuminate\Console\Command;
use Workflow\WorkflowStub;

class Benchmark extends Command
{
    protected $signature = 'flowmeter:benchmark';

    protected $description = 'Runs a workflow benchmark';

    public function handle()
    {
        $start = microtime(true);

        $this->waitForWorkflows($this->createWorkflows(100));
        $end = microtime(true);

        $elapsed = $end - $start;

        echo PHP_EOL . $elapsed . PHP_EOL;
    }

    private function createWorkflow()
    {
        $workflow = WorkflowStub::make(TestWorkflow::class);
        $workflow->start();
        return $workflow;
    }

    private function createWorkflows($numberOfWorkflows = 1)
    {
        $workflows = collect();
        for ($i = 0; $i < 1; ++$i) {
            $workflows->push($this->createWorkflow());
        }
        return $workflows;
    }

    private function waitForWorkflows($workflows)
    {
        while (! $workflows->isEmpty()) {
            $workflows = $workflows->filter(fn ($workflow) => $workflow->running());
        }
    }
}
