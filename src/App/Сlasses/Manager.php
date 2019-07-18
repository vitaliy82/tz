<?php
namespace Console\App\Classes;
                 
use Console\App\Classes\Person;

class Manager extends Person
{
    public function setTasks(): bool
    {
        return true;
    }
}
