<?php
/**
 * Created by PhpStorm.
 * User: martinasprong
 * Date: 15-06-15
 * Time: 19:53
 */

namespace Psr\Database;


class dbConnect {
    private $host = "localhost";
    private $user = "root";
    private $db = "test";
    private $pass = "";
    private $conn;

    public function __construct(){
        $this->conn = new \PDO("mysql:host=".$this->host.";dbname=".$this->db,$this->user,$this->pass);
    }


}