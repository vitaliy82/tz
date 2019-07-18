<?php
namespace Console\App\Classes;

abstract class Person
{
    public function codeWriting(): bool
    {
        return false;
    }
    
    public function codeTesting(): bool
    {
        return false;
    }
    
    public function communicationWithManager(): bool
    {
        return false;
    }
    
    public function draw(): bool
    {
        return false;
    }
    
    public function setTasks(): bool
    {
        return false;
    }
}