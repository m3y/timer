<?php

namespace M3y\Tests;

class TimerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function 経過時間を取得できること()
    {
        $timer = new \M3y\Timer();
        usleep(500000);
        $this->assertGreaterThan(0.5, $timer->getDuration());
        usleep(800000);
        $this->assertGreaterThan(1.3, $timer->getDuration());
    }
}
