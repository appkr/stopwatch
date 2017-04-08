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
        var_dump($stopWatch->getElapsedTime());
    }

    public function doSomething()
    {
        sleep(1);
    }
}