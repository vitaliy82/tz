<?php
namespace Console\App\Classes;

use Console\App\Classes\Person;

class Tester extends Person
{
    public function codeTesting(): bool
    {
        return true;
    }
    
    public function communicationWithManager(): bool
    {
        return true;
    }
    
    public function setTasks(): bool
    {
        return true;
    }
}