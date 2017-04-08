<?php

namespace Appkr\Procedural;

class StopWatch
{
    private $startTime;

    public function setStartTime(float $startTime)
    {
        $this->startTime = $startTime;
    }

    public function getElapsedTime()
    {
        return microtime(true) - $this->startTime;
    }
}