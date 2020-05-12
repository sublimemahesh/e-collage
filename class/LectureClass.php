<?php

/**
 * Description of Product
 *
 * @author sublime holdings
 * @web www.sublime.lk
 */
class LectureClass {

    public $id;
    public $lecture;
    public $class_type;
    public $subject_id;
    public $start_date;
    public $start_time;
    public $duration;
    public $class_fee;
    public $queue;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT * FROM `lecture_class` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysql_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->lecture = $result['lecture'];
            $this->class_type = $result['class_type'];
            $this->subject_id = $result['subject_id'];
            $this->start_date = $result['start_date'];
            $this->start_time = $result['start_time'];
            $this->duration = $result['duration'];
            $this->class_fee = $result['class_fee'];
            $this->queue = $result['queue'];

            return $this;
        }
    }

    public function create() {

        $query = "INSERT INTO `lecture_class` (`lecture`,`class_type`,`subject_id`,`start_date`,`start_time`,`duration`,`class_fee`,`queue`) VALUES  ('"
                . $this->lecture . "', '"
                . $this->class_type . "', '"
                . $this->subject_id . "', '"
                . $this->start_date . "', '"
                . $this->start_time . "', '"
                . $this->duration . "', '"
                . $this->class_fee . "', '"
                . $this->queue . "')";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            $last_id = mysql_insert_id();

            return $this->__construct($last_id);
        } else {
            return FALSE;
        }
    }

    public function all() {

        $query = "SELECT * FROM `lecture_class` ORDER BY `class_type` ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $query = "UPDATE  `lecture_class` SET "
                . "`class_type` ='" . $this->class_type . "', "
                . "`subject_id` ='" . $this->subject_id . "', "
                . "`start_date` ='" . $this->start_date . "', "
                . "`start_time` ='" . $this->start_time . "', "
                . "`duration` ='" . $this->duration . "', "
                . "`class_fee` ='" . $this->class_fee . "' "
                . "WHERE `id` = '" . $this->id . "'";
        
       

        $db = new Database();
        $result = $db->readQuery($query);

        if ($result) {
            return $this->__construct($this->id);
        } else {
            return FALSE;
        }
    }

    public function delete() {

        $query = 'DELETE FROM `lecture_class` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

    public function getLectureClassesByLecture($lecture) {

        $query = "SELECT * FROM `lecture_class` WHERE `lecture` = '" . $lecture . "'  ";

        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

}
