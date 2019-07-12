<?php

class Associate implements Worker
{
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function work()
    {
        return "Kek";
    }
}