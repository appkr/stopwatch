<?php

namespace Appkr\ObjectOriented;

class Time
{
    private $second;

    public function __construct(float $start, float $stop)
    {
        $this->second = $stop - $start;
    }

    public function asSecond()
    {
        return (int) $this->second;
    }
}