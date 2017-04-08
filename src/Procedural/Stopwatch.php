<?php

namespace Appkr\Procedural;

class StopWatch
{
    private $startTime;
    private $startMilliTime;

    public function setStartTime(float $startTime)
    {
        $this->startTime = $startTime;
    }

    public function setStartMilliTime(float $startMilliTime)
    {
        $this->startMilliTime = $startMilliTime;
    }

    public function getElapsedTime()
    {
        return microtime(true) - $this->startTime;
    }

    public function getElapsedMilliTime()
    {
        return (microtime(true) - $this->startMilliTime) * 1000;
    }
}