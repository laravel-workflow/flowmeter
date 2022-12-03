<?php

namespace Tests\Benchmark;

use App\Workflows\Simple\SimpleWorkflow;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * @BeforeClassMethods({"setUpBeforeClass"})
 * @AfterClassMethods({"tearDownAfterClass"})
 * @BeforeMethods({"createApplication"})
 */
class SimpleBench extends TestCase
{
    /**
     * @Revs(3)
     * @Iterations(3)
     * @ParamProviders({"provideCounts"})
     */
    public function benchWorkflow($params)
    {
        $this->workflow(SimpleWorkflow::class, $params['count']);
    }

    public function provideCounts()
    {
        yield '1' => [ 'count' => 1 ];
        yield '10' => [ 'count' => 10 ];
        yield '100' => [ 'count' => 100 ];
        yield '250' => [ 'count' => 250 ];
        yield '500' => [ 'count' => 500 ];
        yield '1000' => [ 'count' => 1000 ];
    }
}
