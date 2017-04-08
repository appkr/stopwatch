<?php

namespace Appkr\ObjectOriented;

class StopWatch
{
    private $startTime;

    public function start()
    {
        $this->startTime = microtime(true);
    }

    public function stop()
    {
        return new Time($this->startTime, microtime(true));
    }
}