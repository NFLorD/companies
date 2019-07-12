<?php

require_once 'autoloader.php';

$applicants = [new Programmer, new Programmer, new Tester, new Juggler];

$ungulates_inc = new Company(['John', 'Peter']);

$ungulates_inc->hiringProcess($applicants);

// $ungulates_inc->firingProcess($applicants);


$ungulates_inc->unit('HumanResources');

$ungulates_inc->project('TestProj');

var_dump($ungulates_inc->associates());

$ungulates_inc->unit('HumanResources')->assignWorker($ungulates_inc->associate('John'));
var_dump($ungulates_inc->unit('HumanResources')->manpower());


$ungulates_inc->hiringProcess($applicants);
var_dump($ungulates_inc->employees());
var_dump($ungulates_inc->manpower());