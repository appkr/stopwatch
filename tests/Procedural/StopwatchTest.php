<?php

namespace Appkr\Tests\Procedural;

use Appkr\Procedural\StopWatch;
use PHPUnit\Framework\TestCase;

class StopwatchTest extends TestCase
{
    public function test_should_return_elapsed_seconds()
    {
        $stopWatch = new StopWatch;
        $stopWatch->setStartTime(microtime(true));
        $this->doSomething();
        $this->assertGreaterThanOrEqual(1, $stopWatch->getElapsedTime());
    }

    public function test_should_return_elapsed_milli_seconds()
    {
        $stopWatch = new StopWatch;
        $stopWatch->setStartMilliTime(microtime(true));
        $this->doSomething();
        $this->assertGreaterThanOrEqual(1000, $stopWatch->getElapsedMilliTime());
    }

    public function doSomething()
    {
        sleep(1);
    }
}