<?php
//set time zone ke zona asia/jakarta
date_default_timezone_set('Asia/Jakarta');
//Memulai Sesion 
session_start();

class Database
{
    public $host = "localhost";
    public $username = "root";
    public $pass = "";
    public $db = "shop";
    public $connect;

    function __construct()
    {
        $this->connect = mysqli_connect($this->host, $this->username, $this->pass, $this->db);
    }
}
?>