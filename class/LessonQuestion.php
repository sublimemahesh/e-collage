<?php

/**
 * Description of LessonQuestion
 *
 * @author W j K n``
 */
class LessonQuestion
{

    //put your code here
    public $id;
    public $class;
    public $date;
    public $question;
    public $created_at;
    public $sort;

    public function __construct($id)
    {
        if ($id) {

            $query = "SELECT * FROM `lesson_question` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysql_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->class = $result['class'];
            $this->date = $result['date'];
            $this->question = $result['question'];
            $this->created_at = $result['created_at'];
            $this->sort = $result['sort'];

            return $this;
        }
    }

    public function create()
    {
        date_default_timezone_set('Asia/Colombo');
        $createdAt = date('Y-m-d H:i:s');

        $query = "INSERT INTO `lesson_question` (`class`,`date`,`question`, `created_at`, `sort`) VALUES  ('"
            . $this->class . "', '"
            . $this->date . "', '"
            . $this->question . "', '"
            . $createdAt . "','"
            . $this->sort . "')";

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

        $query = "SELECT * FROM `lesson_question` ORDER BY `class` ASC";
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
        $query = "UPDATE  `lesson_question` SET "
            . "`class`= '" . $this->class . "', "
            . "`date`= '" . $this->date . "', "
            . "`question`= '" . $this->question . "' "
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
        $this->deleteOptions();
        $query = 'DELETE FROM `lesson_question` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }
    public function deleteOptions()
    {

        $query = "DELETE FROM `lesson_question_option` WHERE `question` = '" . $this->id . "'";

        $db = new Database();

        return $db->readQuery($query);
    }

    public function getQuestionsByClassId($id, $date)
    {

        $query = "SELECT * FROM `lesson_question` WHERE `class` = '" . $id . "' AND `date` = '" . $date . "' ";

        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }
}
