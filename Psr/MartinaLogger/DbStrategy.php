<?php
/**
 * Created by PhpStorm.
 * User: martinasprong
 * Date: 16-06-15
 * Time: 13:18
 */

namespace Psr\MartinaLogger;

//use Psr\Database\dbConnect;
use Psr\Log\LoggerInterface;

class DbStrategy implements LoggerInterface{

    //Database connection
    private $host = "localhost";
    private $user = "root";
    private $db = "test";
    private $pass = "";
    private $conn;

    public function __construct(){
        $this->conn = new \PDO("mysql:host=".$this->host.";dbname=".$this->db,$this->user,$this->pass);
    }

    public function emergency($message, array $context = array())
    {
        try {

            $db = new \PDO(conn . ":dbname=" . db . ";host=" . host, user, pass);
            $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            $stmt = $db->prepare("INSERT INTO test(message, context) VALUES (:message, :context)");

            $stmt->bindParam(':Emergency message', $message, \PDO::PARAM_STR, 100);
            $stmt->bindParam(':context', $context, \PDO::PARAM_STR, 100);

            if($stmt->execute()) {
                echo '1 row has been inserted';
            }

            $db = null;
        } catch(\PDOException $e) {
            trigger_error('Error occured while trying to insert into the DB:' . $e->getMessage(), E_USER_ERROR);
        }

    }


    public function alert($message, array $context = array()){
        try {

            $db = new \PDO(conn . ":dbname=" . db . ";host=" . host, user, pass);
            $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            $stmt = $db->prepare("INSERT INTO test(message, context) VALUES (:message, :context)");

            $stmt->bindParam(':Alert message', $message, \PDO::PARAM_STR, 100);
            $stmt->bindParam(':context', $context, \PDO::PARAM_STR, 100);

            if($stmt->execute()) {
                echo '1 row has been inserted';
            }

            $db = null;
        } catch(\PDOException $e) {
            trigger_error('Error occured while trying to insert into the DB:' . $e->getMessage(), E_USER_ERROR);
        }
    }


    public function critical($message, array $context = array()){
        try {

            $db = new \PDO(conn . ":dbname=" . db . ";host=" . host, user, pass);
            $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            $stmt = $db->prepare("INSERT INTO test(message, context) VALUES (:message, :context)");

            $stmt->bindParam(':Critical message', $message, \PDO::PARAM_STR, 100);
            $stmt->bindParam(':context', $context, \PDO::PARAM_STR, 100);

            if($stmt->execute()) {
                echo '1 row has been inserted';
            }

            $db = null;
        } catch(\PDOException $e) {
            trigger_error('Error occured while trying to insert into the DB:' . $e->getMessage(), E_USER_ERROR);
        }
    }


    public function error($message, array $context = array()){
        try {

            $db = new \PDO(conn . ":dbname=" . db . ";host=" . host, user, pass);
            $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            $stmt = $db->prepare("INSERT INTO test(message, context) VALUES (:message, :context)");

            $stmt->bindParam(':Error message', $message, \PDO::PARAM_STR, 100);
            $stmt->bindParam(':context', $context, \PDO::PARAM_STR, 100);

            if($stmt->execute()) {
                echo '1 row has been inserted';
            }

            $db = null;
        } catch(\PDOException $e) {
            trigger_error('Error occured while trying to insert into the DB:' . $e->getMessage(), E_USER_ERROR);
        }
    }


    public function warning($message, array $context = array()){
        try {

            $db = new \PDO(conn . ":dbname=" . db . ";host=" . host, user, pass);
            $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            $stmt = $db->prepare("INSERT INTO test(message, context) VALUES (:message, :context)");

            $stmt->bindParam(':Warning message', $message, \PDO::PARAM_STR, 100);
            $stmt->bindParam(':context', $context, \PDO::PARAM_STR, 100);

            if($stmt->execute()) {
                echo '1 row has been inserted';
            }

            $db = null;
        } catch(\PDOException $e) {
            trigger_error('Error occured while trying to insert into the DB:' . $e->getMessage(), E_USER_ERROR);
        }
    }


    public function notice($message, array $context = array()){
        try {

            $db = new \PDO(conn . ":dbname=" . db . ";host=" . host, user, pass);
            $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            $stmt = $db->prepare("INSERT INTO test(message, context) VALUES (:message, :context)");

            $stmt->bindParam(':Notice message', $message, \PDO::PARAM_STR, 100);
            $stmt->bindParam(':context', $context, \PDO::PARAM_STR, 100);

            if($stmt->execute()) {
                echo '1 row has been inserted';
            }

            $db = null;
        } catch(\PDOException $e) {
            trigger_error('Error occured while trying to insert into the DB:' . $e->getMessage(), E_USER_ERROR);
        }
    }


    public function info($message, array $context = array()){
        try {

            $db = new \PDO(conn . ":dbname=" . db . ";host=" . host, user, pass);
            $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            $stmt = $db->prepare("INSERT INTO test(message, context) VALUES (:message, :context)");

            $stmt->bindParam(':Info message', $message, \PDO::PARAM_STR, 100);
            $stmt->bindParam(':context', $context, \PDO::PARAM_STR, 100);

            if($stmt->execute()) {
                echo '1 row has been inserted';
            }

            $db = null;
        } catch(\PDOException $e) {
            trigger_error('Error occured while trying to insert into the DB:' . $e->getMessage(), E_USER_ERROR);
        }
    }


    public function debug($message, array $context = array()){
        try {

            $db = new \PDO(conn . ":dbname=" . db . ";host=" . host, user, pass);
            $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            $stmt = $db->prepare("INSERT INTO test(message, context) VALUES (:message, :context)");

            $stmt->bindParam(':Debug message', $message, \PDO::PARAM_STR, 100);
            $stmt->bindParam(':context', $context, \PDO::PARAM_STR, 100);

            if($stmt->execute()) {
                echo '1 row has been inserted';
            }

            $db = null;
        } catch(\PDOException $e) {
            trigger_error('Error occured while trying to insert into the DB:' . $e->getMessage(), E_USER_ERROR);
        }
    }


    public function log($level, $message, array $context = array()){

    }
}