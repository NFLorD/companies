<?php

class Company
{
    private $projects = [];
    private $units = [];
    private $employees = [];
    private $associates = [];

    public function __construct(array $associatesNames)
    {
        foreach ($associatesNames as $associateName) $this->associate($associateName);
    }

    public function associate(string $associateName)
    {
        if (!$this->associates[$associateName]) $this->associates[$associateName] = new Associate($associateName);
        return $this->associates[$associateName];
    }

    public function associates()
    {
        return $this->associates;
    }

    public function unit(string $unitName)
    {
        if (!$this->units[$unitName]) $this->units[$unitName] = new $unitName();
        return $this->units[$unitName];
    }

    public function units()
    {
        return $this->units;
    }

    public function project(string $projectName)
    {
        if (!$this->projects[$projectName]) $this->projects[$projectName] = new Project();
        return $this->projects[$projectName];
    }

    public function projects()
    {
        return $this->projects;
    }

    public function employees()
    {
        return $this->employees;
    }

    public function numberOfEmployeesByJob()
    {
        $employees = $this->employees;
        $jobs = [];
        foreach ($employees as $employee) {
            $emp_class = get_class($employee);
            if (!$jobs[$emp_class]) {
                $jobs[$emp_class] = 1;
            } else {
                $jobs[$emp_class]++;
            }
        }

        return $jobs;
    }

    public function manpower()
    {
        return count($this->employees) + count($this->associates);
    }

    public function hiringProcess(array $applicants)
    {
        try {
            foreach ($applicants as $applicant)
                if ($this->unit('HumanResources')->hire($applicant))
                $this->employees[] = $applicant;
        } catch (Error $e) {
            echo $e;
        }
    }

    public function firingProcess(array $employees)
    {
        foreach ($this->employees as $index => $employee)
            if ($this->hr->fire($employee))
            unset($this->employees[$index]);
    }
}