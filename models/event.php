<?php

class Event extends CI_Model {

    private $tableName = 'events';

    function __contruct() {
        parent::__construct();

    }

    public function getByID($eventID) {
        return $this->db->where('id', $eventID)->get($this->tableName)->result();
    }

    public function getByCalendarID($calendarID) {
        return $this->db->where('calendar_id', $calendarID)->get($this->tableName)->result();
    }
}
