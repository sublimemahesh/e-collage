<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of student
 *
 * @author User
 */
class Student {

    public $id;
    public $full_name;
    public $student_id;
    public $email;
    public $nic_number;
    public $gender;
    public $age;
    public $phone_number;
    public $address;
    public $education_level;
    public $password;
    public $authToken;
    public $lastLogin;
    public $status;
    public $level;
    public $image_name;
    public $nic_front;
    public $nic_back;
    public $resetcode;
    public $queue;

    public function __construct($id) {

        if ($id) {

            $query = "SELECT * FROM `student` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysql_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->full_name = $result['full_name'];
            $this->student_id = $result['student_id'];
            $this->email = $result['email'];
            $this->nic_number = $result['nic_number'];
            $this->gender = $result['gender'];
            $this->age = $result['age'];
            $this->phone_number = $result['phone_number'];
            $this->address = $result['address'];
            $this->education_level = $result['education_level'];
            $this->password = $result['password'];
            $this->authToken = $result['authToken'];
            $this->lastLogin = $result['lastLogin'];
            $this->status = $result['status'];
            $this->level = $result['level'];
            $this->image_name = $result['image_name'];
            $this->nic_front = $result['nic_front'];
            $this->nic_back = $result['nic_back'];
            $this->resetcode = $result['resetcode'];
            $this->queue = $result['queue'];

            return $result;
        }
    }

    public function create() {

        $query = "INSERT INTO `student` (`full_name`, `student_id`, `email`,`nic_number`,`gender`,`age`,`phone_number`,`address`,`education_level`,`password`) VALUES  ('"
                . $this->full_name . "','"
                . $this->student_id . "', '"
                . $this->email . "', '"
                . $this->nic_number . "', '"
                . $this->gender . "', '"
                . $this->age . "', '"
                . $this->phone_number . "', '"
                . $this->address . "', '"
                . $this->education_level . "', '"
                . $this->password . "')";

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

        $query = "SELECT * FROM `student`  ORDER BY queue ASC";
      
        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function getActiveStudent() {

        $query = "SELECT * FROM `student` WHERE `status` = 1 ORDER BY queue ASC";
        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function getInActiveStudent() {

        $query = "SELECT * FROM `student` WHERE `status` = 0 ORDER BY queue ASC";
        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function getAllMembersWithoutThis($student) {

        $query = "SELECT * FROM `student` WHERE `id` <> '" . $member . "' AND `status` = 1 AND `is_suspend` = 0";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function login($student_id, $password) {

        $enPass = md5($password);

        $query = "SELECT `id`,`full_name`,`student_id`,`email`, `nic_number`,`age` FROM `student` WHERE `student_id`= '" . $student_id . "' AND `password`= '" . $enPass . "'";

        $db = new Database();

        $result = mysql_fetch_array($db->readQuery($query));

        if (!$result) {

            return FALSE;
        } else {

            $this->id = $result['id'];
            $this->setAuthToken($result['id']);
            $this->setLastLogin($this->id);
            $student = $this->__construct($this->id);
            $this->setUserSession($student);

            return $student;
        }
    }

    public function checkOldPass($id, $password) {

        $enPass = md5($password);

        $query = "SELECT `id` FROM `student` WHERE `id`= '" . $id . "' AND `password`= '" . $enPass . "'";

        $db = new Database();

        $result = mysql_fetch_array($db->readQuery($query));

        if (!$result) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function changePassword($id, $password) {

        $enPass = md5($password);

        $query = "UPDATE  `student` SET "
                . "`password` ='" . $enPass . "' "
                . "WHERE `id` = '" . $id . "'";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function ChangeProPic($student, $file) {

        $query = "UPDATE  `student` SET "
                . "`image_name` ='" . $file . "' "
                . "WHERE `id` = '" . $student . "'";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function updateNicImagesBack($student, $nic_back) {

        $query = "UPDATE  `student` SET "
                . "`nic_back` ='" . $nic_back . "' "
                . "WHERE `id` = '" . $student . "'";


        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function updateNicImagesFront($student, $nic_front) {

        $query = "UPDATE  `student` SET "
                . "`nic_front` ='" . $nic_front . "' "
                . "WHERE `id` = '" . $student . "'";


        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function authenticate() {

        if (!isset($_SESSION)) {

            session_start();
        }

        $id = NULL;
        $authToken = NULL;

        if (isset($_SESSION["id"])) {

            $id = $_SESSION["id"];
        }

        if (isset($_SESSION["authToken"])) {

            $authToken = $_SESSION["authToken"];
        }

        $query = "SELECT `id` FROM `student` WHERE `id`= '" . $id . "' AND `authToken`= '" . $authToken . "'";

        $db = new Database();

        $result = mysql_fetch_array($db->readQuery($query));

        if (!$result) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function logOut() {

        if (!isset($_SESSION)) {

            session_start();
        }

        unset($_SESSION["id"]);
        unset($_SESSION["full_name"]);
        unset($_SESSION["email"]);
        unset($_SESSION["student_id"]);
        unset($_SESSION["nic_number"]);
        unset($_SESSION["authToken"]);
        unset($_SESSION["level"]);
        unset($_SESSION["image_name"]);

        return TRUE;
    }

    public function checkLogin($id) {

        $query = "SELECT * FROM `student` WHERE `id` ='" . $id . "'  AND `status` = 0 ";

        $db = new Database();
        $result = mysql_fetch_array($db->readQuery($query));
        return $result['id'];
    }

    private function setUserSession($student) {

        if (!isset($_SESSION)) {

            session_start();
        }
        $_SESSION["id"] = $student['id'];
        $_SESSION["student_id"] = $student['student_id'];
        $_SESSION["email"] = $student['email'];
        $_SESSION["nic_number"] = $student['nic_number'];
        $_SESSION["full_name"] = $student['full_name'];
        $_SESSION["authToken"] = $student['authToken'];
        $_SESSION["lastLogin"] = $student['lastLogin'];
        $_SESSION['login_time'] = time();
        $_SESSION['image_name'] = $student['image_name'];
    }

    private function setAuthToken($id) {

        $authToken = md5(uniqid(rand(), true));

        $query = "UPDATE `student` SET `authToken` ='" . $authToken . "' WHERE `id`='" . $id . "'";

        $db = new Database();

        if ($db->readQuery($query)) {

            return $authToken;
        } else {
            return FALSE;
        }
    }

    private function setLastLogin($id) {

        date_default_timezone_set('Asia/Colombo');

        $now = date('Y-m-d H:i:s');

        $query = "UPDATE `student` SET `lastLogin` ='" . $now . "' WHERE `id`='" . $id . "'";

        $db = new Database();

        if ($db->readQuery($query)) {

            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function checkEmail($email) {

        $query = "SELECT `email`,`student_id` FROM `student` WHERE `email`= '" . $email . "'";

        $db = new Database();

        $result = mysql_fetch_array($db->readQuery($query));

        if (!$result) {

            return FALSE;
        } else {

            return $result;
        }
    }

    public function getLastStudentId() {
        $query = " SELECT `id` FROM `student` ORDER BY `id` DESC LIMIT 1";
        $db = new Database();
        $result = mysql_fetch_assoc($db->readQuery($query));

        return $result['id'];
    }

    public function GenarateCode($email) {

        $rand = rand(10000, 99999);

        $query = "UPDATE  `student` SET "
                . "`resetcode` ='" . $rand . "' "
                . "WHERE `email` = '" . $email . "'";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function SelectForgetUser($email) {

        if ($email) {

            $query = "SELECT `email`,`full_name`,`student_id`,`resetcode` FROM `student` WHERE `email`= '" . $email . "'";

            $db = new Database();

            $result = mysql_fetch_array($db->readQuery($query));

            $this->full_name = $result['full_name'];
            $this->student_id = $result['student_id'];
            $this->email = $result['email'];
            $this->restCode = $result['resetcode'];
            return $result;
        }
    }

    public function SelectResetCode($code) {

        $query = "SELECT `id` FROM `student` WHERE `resetcode`= '" . $code . "'";

        $db = new Database();

        $result = mysql_fetch_array($db->readQuery($query));

        if (!$result) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function updatePassword($password, $code) {

        $enPass = md5($password);

        $query = "UPDATE  `student` SET "
                . "`password` ='" . $enPass . "' "
                . "WHERE `resetcode` = '" . $code . "'";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {

            return TRUE;
        } else {

            return FALSE;
        }
    }

    public function update() {

        $query = "UPDATE  `student` SET "
                . "`full_name` ='" . $this->full_name . "', "
                . "`nic_number` ='" . $this->nic_number . "', "
                . "`gender` ='" . $this->gender . "', "
                . "`age` ='" . $this->age . "', "
                . "`phone_number` ='" . $this->phone_number . "', "
                . "`address` ='" . $this->address . "', "
                . "`education_level` ='" . $this->education_level . "', "
                . "`email` ='" . $this->email . "' "
                . "WHERE `id` = '" . $this->id . "'";


        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {

            return $this->__construct($this->id);
        } else {

            return FALSE;
        }
    }

    public function updateActiveStudent() {

        $query = "UPDATE  `student` SET "
                . "`full_name` ='" . $this->full_name . "', "
                . "`nic_number` ='" . $this->nic_number . "', "
                . "`gender` ='" . $this->gender . "', "
                . "`age` ='" . $this->age . "', "
                . "`phone_number` ='" . $this->phone_number . "', "
                . "`address` ='" . $this->address . "', "
                . "`education_level` ='" . $this->education_level . "', "
                . "`email` ='" . $this->email . "', "
                . "`status` ='" . $this->status . "' "
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



        $this->deletePost();


        if ($this->image_name) {
            unlink(Helper::getSitePath() . "upload/student/profile/" . $this->image_name);
            
        } elseif ($this->nic_front || $this->image_name) {
            unlink(Helper::getSitePath() . "upload/student/nic_card/front/" . $this->nic_front);
            unlink(Helper::getSitePath() . "upload/student/nic_card/front/thumb/" . $this->nic_front);
            unlink(Helper::getSitePath() . "upload/student/nic_card/back/thumb/" . $this->nic_back);
            unlink(Helper::getSitePath() . "upload/student/nic_card/back/" . $this->nic_back);
        }


        $query = 'DELETE FROM `student` WHERE id="' . $this->id . '"';


        $db = new Database();



        return $db->readQuery($query);
    }

    public function deletePost() {



        $POST = new Post(NULL);
        $POST_IMAGES = new PostImage(NULL);

        foreach ($POST->getPostsByStudent($this->id) as $post) {

            foreach ($POST_IMAGES->getPhotosByPostId($post['id']) as $post_images) {
                unlink(Helper::getSitePath() . "upload/post/" . $post_images['image_name']);

                unlink(Helper::getSitePath() . "upload/post/thumb/" . $post_images['image_name']);
                unlink(Helper::getSitePath() . "upload/post/thumb2/" . $post_images['image_name']);



                $POST_IMAGES->id = $post_images["id"];

                $POST_IMAGES->delete();
            }
            $POST->id = $post["id"];

            $POST->delete();
        }
    }

}
