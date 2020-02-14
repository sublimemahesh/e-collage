<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Post
 *
 * @author User
 */
class Post {

    public $id;
    public $description;
    public $queue;

    public function __construct($id) {

        if ($id) {

            $query = "SELECT * FROM `post` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysql_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->description = $result['description'];
            $this->queue = $result['queue'];

            return $result;
        }
    }

    public function create() {

        $query = "INSERT INTO `post` (`description`) VALUES  ('"
                . $this->description . "')";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            $last_id = mysql_insert_id();

            return $this->__construct($last_id);
        } else {
            return FALSE;
        }
    }

    public function update() {

        $query = "UPDATE  `post` SET "
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

}
