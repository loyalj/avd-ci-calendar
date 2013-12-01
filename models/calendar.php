<?php

class Calendar extends CI_Model {

    private $tableName = 'calendars';

    function __contruct() {
        parent::__construct();

    }

    public function getByUserID($userID) {
        return $this->db->where('user_id', $userID)->get($this->tableName)->result();
    }
}
