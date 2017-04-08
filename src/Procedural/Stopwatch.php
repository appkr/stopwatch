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
        return (int) (microtime(true) - $this->startTime);
    }

    public function getElapsedMilliTime()
    {
        return (int) ((microtime(true) - $this->startMilliTime) * 1000);
    }
}