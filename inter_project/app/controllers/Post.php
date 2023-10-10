<?php


use app\libs\Controller;

class Post extends Controller
{
    public function __construct()
    {
        echo "I am constructor of " . __CLASS__ . " class<hr>";
    }
    public function index()
    {
        echo "I am constructor of " . __CLASS__ . " class<hr>";
    }
    public function show($data = [])
    {
    }
}
