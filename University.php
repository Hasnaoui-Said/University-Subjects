<?php
require_once "AbstractUniversity.php";
require_once "Subject.php";
require_once "Student.php";

/**
 * Class University
 */
class University extends AbstractUniversity
{
    // TODO Implement all the methods declared in parent

    public function controllSubjet($code, $name)
    {
        if (count($this->subjects) == 0) {
            return true;
        }
        foreach ($this->subjects as $sub) {
            if ($sub->getCode() == $code && $sub->getName() == $name) {
                return false;
            }
        }
        return true;
    }
    public function addSubject(string $code, string $name)
    {
        if ($this->controllSubjet($code, $name)) {
            $newSubject = new Subject($code, $name, array());
            $this->subjects[] = $newSubject;
            // $this->subjects = [...$this->subjects, $newSubject];
            return $newSubject;
        }
        return 'This Subject is already exist';
    }

    public function addStudentOnSubject(string $subjectCode, Student $student)
    {
        foreach ($this->subjects as $subject) {
            if ($subject->getCode() == $subjectCode) {
                return $subject->addStudent($student->getName(), $student->getStudent());
            }
        }
    }

    public function getStudentsForSubject(string $subjectCode)
    {
        foreach ($this->subjects as $subject) {
            if ($subject->getCode() == $subjectCode) {
                return $subject->getStudents();
            }
        }
        return [];
    }

    public function getNumberOfStudents()
    {
        $totale = 0;
        foreach ($this->subjects as $subject) {
            $stu = $this->getStudentsForSubject($subject->getCode());
            $totale += count($stu);
        }

        return $totale;
    }
    public function print()
    {
        foreach ($this->subjects as $subject) {
            echo
            $subject->getCode() . "  -  " . $subject->getName() . "<br>------- list student:------------<br>
            ";
            foreach ($subject->getStudents() as $student) {
                echo "
                    name : " . $student->getName() . " -  number : " . $student->getStudent() . " <br>
                ";
            }
        }
    }
    // public function findSubjectByCode(string $subjectCode)
    // {
    //     foreach ($this->subjects as $sub) {
    //         foreach ($sub as $key => $value) {
    //             if ($value->getCode() == $subjectCode)
    //                 return $key;
    //     }
    //     return null;
    // }
}
