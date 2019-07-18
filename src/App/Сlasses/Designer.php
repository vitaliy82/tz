<?php
namespace Console\App\Classes;

use Console\App\Classes\Person;

class Designer extends Person
{
    public function communicationWithManager(): bool
    {
        return true;
    }
    
    public function draw(): bool
    {
        return true;
    }
}