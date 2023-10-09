<?php
use app\libs\db;



class UserModel {
    private $db;
    public function __construct()
    {
        $this->db = new db();
    }

    public function getAlluser()
    {
        $this->db->query("SELECT * FROM users");
        return $this->db->multiSet();
    }
}
