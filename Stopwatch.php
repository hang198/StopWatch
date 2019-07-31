<?php

class StopWatch
{
    private $startTime;
    private $endTime;

    public function __construct()
    {
        $this->startTime ;
    }

    public function getStartTime()
    {
        $this->startTime = microtime(true);
        return $this->startTime;
    }

    public function getEndTime()
    {
        $this->startTime = microtime(true);
        return $this->endTime;
    }

    public function getElapsedTime()
    {
        return $this->endTime - $this->startTime;
    }
}

$stopwatch = new StopWatch();
$stopwatch->getStartTime();
for ($i = 0; $i < 10000; $i++) {
    for ($j = 0; $j < 100000; $j++) {
        $total += $i + $j;
    }
};
echo $total . "<br>";
$stopwatch->getEndTime();
echo $stopwatch->getElapsedTime();
?>
