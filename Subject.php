<?php


/**
 * Class Subject
 */
class Subject
{
    public $code;
    public $name;
    /**
     * @var Student[]
     */
    public $students = [];

    public function __construct(string $code, string $name, array $students = [])
    {
        $this->code = $code;
        $this->name = $name;
        $this->students = $students;
    }

    public function getCode()
    {
        return $this->code;
    }
    public function getName()
    {
        return $this->name;
    }

    public function setCode($code)
    {
        $this->code = $code;
    }
    public function setName($name)
    {
        $this->name = $name;
    }


    // TODO Generate getters and setters
    // TODO Generate constructor for all attributes. $students argument of the constructor can be empty

    /**
     * Method accepts student name and number, creates instance of the Student class, adds inside $students array
     * and returns created instance
     *
     * @param string $name
     * @param string $studentNumber
     * @return \Student
     */


    public function controll($studentNumber)
    {
        if (count($this->students) == 0) {
            return true;
        }
        foreach ($this->students as $stu) {
            if ($stu->getStudent() == $studentNumber) {
                return false;
            }
        }
        return true;
    }

    public function getStudents()
    {
        return $this->students;
    }

    public function addStudent(string $name, string $studentNumber)
    {
        if ($this->controll($studentNumber)) {
            $newstudent = new Student($name, $studentNumber);
            $this->students[] = $newstudent;
            return $newstudent;
        } else {
            echo 'student deja existe';
        }
    }
}
