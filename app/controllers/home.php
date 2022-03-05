<?php
class Home extends Core {
    function __construct() {
        // echo 'controller working';
    }
    function index() {
        $userModel = $this->model('UsersModel');
        $this->view('pages/index');
    }
}