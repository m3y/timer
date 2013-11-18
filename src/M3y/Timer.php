<?php

namespace M3y;

class Timer
{
    private $startTime;

    public function __construct()
    {
        $this->startTime = microtime(true);
    }

    public function getDuration()
    {
        $now = microtime(true);
        return $now - $this->startTime;
    }
}
