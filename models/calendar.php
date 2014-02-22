<?php

class Calendar extends CI_Model {

    private $tableName = 'calendars';

    function __contruct() {
        parent::__construct();

    }

    /**
    * Calendar::getByID
    *
    * Returns a single calendar matching the required ID.
    * Returns zero calendars if none have the required ID
    */
    public function getByID($calendarID) {
        return $this->db->where('id', $calendarID)->get($this->tableName)->result();
    }
    
    /**
    * Calendar::getByUserID
    *
    * Returns zero or more calendars from the database 
    * when they have a matching user ID. Zero are returned
    * if no calendars have the required user ID.
    */
    public function getByUserID($userID) {
        return $this->db->where('user_id', $userID)->get($this->tableName)->result();
    }

    /**
    * Calendar::create
    *
    * Adds a new calendar to the database.
    */
    public function create($title, $description = null, $userID) {
        
        // Integrity check the parameters
        if(empty($title) || empty($userID)) {
            return false;
        }
    }

    /**
    * Calendar::delete
    *
    * Removes a calendar from the database when it has the 
    * matching ID.
    */
    public function delete($calendarID, $userID) {
    
    }

    /**
    * Calendar::update
    *
    * Modifies the information for an existing calendar based
    * on the given ID.
    */
    public function update($calendarID, $title = null, $description = null, $userID) {
    
        // Integrity check the parameters
        if(($title == null && $description == null) || empty($calendarID) || empty($userID)) {
            return false;
        }
    }
}
