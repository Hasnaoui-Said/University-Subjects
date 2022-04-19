<?php


/**
 * Class Student
 */
class Student
{
    public string $name;
    public string $studentNumber;


    public function __construct($name, $studentNumber)
    {
        $this->name = $name;
        $this->studentNumber = $studentNumber;
    }


    // TODO Generate getters and setters for both arguments
    public function getName()
    {
        return $this->name;
    }
    public function getStudent()
    {

        return $this->studentNumber;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setStudnetNmber($Number)
    {
        $this->studentNumber = $Number;
    }
    // TODO Generate constructor with both arguments.
}
