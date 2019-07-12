<?php

class BusinessUnit
{
    protected $workers = [];

    public function assignWorker(Worker $worker)
    {
        $this->workers[] = $worker;
    }

    public function manpower()
    {
        return count($this->workers);
    }
}