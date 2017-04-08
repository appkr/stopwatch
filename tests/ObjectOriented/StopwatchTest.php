<?php

namespace Appkr\Tests\ObjectOriented;

use Appkr\ObjectOriented\StopWatch;
use PHPUnit\Framework\TestCase;

class StopwatchTest extends TestCase
{
    public function test_should_return_elapsed_seconds()
    {
        $stopWatch = new StopWatch;
        $stopWatch->start();
        $this->doSomething();
        $this->assertGreaterThanOrEqual(1, $stopWatch->stop()->asSecond());
    }

    public function test_should_return_elapsed_milli_seconds()
    {
        $stopWatch = new StopWatch;
        $stopWatch->start();
        $this->doSomething();
        $this->assertGreaterThanOrEqual(1000, $stopWatch->stop()->asMilliSecond());
    }

    public function doSomething()
    {
        sleep(1);
    }
}