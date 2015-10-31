<?php

class DB {
    private $db;
    public function __construct(){
        $this->db = mysql_connect('localhost', 'admin', 'admin');
        mysql_select_db('websocket');
    }

    public function query($sql){
        return mysql_query($sql);
    }

    public function fetch_array($result){
        return mysql_fetch_array($result);
    }
}