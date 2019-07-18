<?php
namespace Console\App\Classes;

use Console\App\Classes\Person;

class Developer extends Person
{
    public function codeWriting(): bool
    {
        return true;
    }
    
    public function codeTesting(): bool
    {
        return true;
    }
    
    public function communicationWithManager(): bool
    {
        return true;
    }
}