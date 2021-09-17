<?php

class Student
{
    public $name;
    public function Display ($name)
    {
        $this->name=$name;
        echo "My name is $name";
    }
}

$S1=new Student();
$S1->Display("Lester");