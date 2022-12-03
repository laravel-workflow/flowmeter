<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Symfony\Component\Process\Process;
use Workflow\WorkflowStub;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    private static \Symfony\Component\Process\Process $process;

    public static function log($message)
    {
        file_put_contents('/var/www/html/storage/logs/phpbench.log', file_get_contents('/var/www/html/storage/logs/phpbench.log') . $message . PHP_EOL);
    }

    public static function setUpBeforeClass(): void
    {
        try {
            $process = Process::fromShellCommandline('php artisan horizon');
            $process->start();
            foreach ($process as $data) {
                if (strstr($data, 'started') !== false) break;
            }
        } catch (\Throwable $th) {
            self::log($th->getMessage());
        }
    }

    public static function tearDownAfterClass(): void
    {
        try {
           $process = Process::fromShellCommandline('php artisan horizon:terminate');
           $process->run();
        } catch (\Throwable $th) {
            self::log($th->getMessage());
        }
    }

    private function createWorkflow($class, $numberOfSignals = 0)
    {
        $workflow = WorkflowStub::make($class);
        if ($numberOfSignals) {
            $workflow->start($numberOfSignals);
        } else {
            $workflow->start();
        }
        return $workflow;
    }

    private function createWorkflows($class, $numberOfWorkflows = 1, $numberOfSignals = 0)
    {
        $workflows = collect();
        for ($i = 0; $i < $numberOfWorkflows; ++$i) {
            $workflows->push($this->createWorkflow($class, $numberOfSignals));
        }
        return $workflows;
    }

    private function waitForWorkflows($workflows, $numberOfSignals = 0)
    {
        if ($numberOfSignals) {
            $workflows->each(function ($workflow) use ($numberOfSignals) {
                for ($i = 0; $i < $numberOfSignals; $i++) {
                    $workflow->increment();
                }
            });    
        }
        while (! $workflows->isEmpty()) {
            $workflows = $workflows->filter(fn ($workflow) => $workflow->running());
        }
    }

    protected function workflow($class, $numberOfWorkflows = 1, $numberOfSignals = 0)
    {
        $workflows = $this->createWorkflows($class, $numberOfWorkflows, $numberOfSignals);
        $this->waitForWorkflows($workflows, $numberOfSignals);
    }
}
