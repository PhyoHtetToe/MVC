<?php
use app\libs\Controller;

class Home extends Controller{
    public function __construct()
    {
      
        echo "I am constructor of " . __CLASS__ . " class<hr>";
    }    public function index()
    {
        $this->view("home/index");
    } 
}