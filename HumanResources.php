<?php

class HumanResources extends BusinessUnit
{
    public function hire(Worker $applicant)
    {
        var_dump($this->manpower());
        if (!$this->manpower()) throw new Error('There is no one in human resources to execute this order !');
        // if ($applicant instanceof HasDegrees && in_array($applicant::BEST_DEGREE, $requirements)) {
        //     $this->hire($applicant);
        //     return true;
        // }

        // return false;
        return true;
    }

    public function fire(Worker $employee)
    {
        if ($employee instanceof Programmer) return false;
        return true;
    }
}