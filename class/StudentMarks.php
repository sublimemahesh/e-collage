<?php

/**
 * Description of StudentMarks
 *
 * @author W j K n``
 */
class StudentMarks
{

    public $id;
    public $student;
    public $class;
    public $date;
    public $marks;
    public $grade;
    public $created_at;

    public function __construct($id)
    {
        if ($id) {

            $query = "SELECT * FROM `student_marks` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysql_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->student = $result['student'];
            $this->class = $result['class'];
            $this->date = $result['date'];
            $this->marks = $result['marks'];
            $this->grade = $result['grade'];
            $this->created_at = $result['created_at'];

            return $this;
        }
    }

    public function create()
    {
        date_default_timezone_set('Asia/Colombo');
        $createdAt = date('Y-m-d H:i:s');
        $query = "INSERT INTO `student_marks` (`student`,`class`, `date`, `marks`, `grade`, `created_at`) VALUES  ('"
            . $this->student . "', '"
            . $this->class . "', '"
            . $this->date . "','"
            . $this->marks . "','"
            . $this->grade . "','"
            . $createdAt . "')";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            $last_id = mysql_insert_id();

            return $this->__construct($last_id);
        } else {
            return FALSE;
        }
    }

    public function all()
    {

        $query = "SELECT * FROM `student_marks` ORDER BY `student` ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update()
    {
        $query = "UPDATE  `student_marks` SET "
            . "`student`= '" . $this->student . "', "
            . "`class`= '" . $this->class . "', "
            . "`date`= '" . $this->date . "', "
            . "`marks`= '" . $this->marks . "', "
            . "`grade`= '" . $this->grade . "' "
            . "WHERE `id` = '" . $this->id . "'";

        $db = new Database();
        $result = $db->readQuery($query);

        if ($result) {
            return $this->__construct($this->id);
        } else {
            return FALSE;
        }
    }

    public function delete()
    {
        $query = 'DELETE FROM `student_marks` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

    public function getStudentMarksByClassId($id, $class, $date)
    {

        $query = "SELECT * FROM `student_marks` WHERE `student` = '" . $id . "' AND `class` = '" . $class . "' AND `date` = '" . $date . "' ";
       
        $db = new Database();
        $result = mysql_fetch_array($db->readQuery($query));
        return $result;
    }
}
