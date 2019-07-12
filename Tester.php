<?php

class Tester implements Worker
{
    public function work()
    {
        return '<h2>Je teste !</h2>';
    }
}