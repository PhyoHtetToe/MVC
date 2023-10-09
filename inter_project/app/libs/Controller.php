<?php

namespace app\libs;

class Controller
{
    public function view($view, $data = []){

        if (file_exists("../app/views/". $view.".php")){
            require_once "../app/views/" . $view . ".php";
        }
    }
    public function model($models){
        if(file_exists("../app/models/". $models .".php")){
            require_once "../app/models/" . $models . ".php";
            return new $models;
        }else{
            echo "F";
        }
    } 
}
