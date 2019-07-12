<?php

class Project
{
    protected $employees;

    public function assign(Worker $employee)
    {
        $this->employees[] = $employee;
    }

    public function process()
    {
        foreach ($this->employees as $employee) {
            echo $employee->work();
        }
    }
}