<?php
class UsersModel {
    protected $db;
    function __construct() {
        $this->db = new Database();
    }
}