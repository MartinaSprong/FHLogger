<?php
/**
 * Created by PhpStorm.
 * User: martinasprong
 * Date: 16-06-15
 * Time: 13:18
 */

namespace Psr\MartinaLogger;

use Psr\Log\LoggerInterface;

class FileStrategy implements LoggerInterface{

    private $handle;
    private $logFile;

    public function __construct($filename,$mode = 'a'){
        $this->logFile = $filename;
        // open log file for append
        $this->handle = fopen($filename, $mode)
        or die('Could not open the log file');
    }

    public function emergency($message, array $context = array())
    {
        $message = date("F j, Y, g:i a") .'EMERGENCY' . ': ' . $message . "\n";
        fwrite($this->handle,$message);
    }


    public function alert($message, array $context = array()){
        $message = date("F j, Y, g:i a") .'ALERT' . ': ' . $message . "\n";
        fwrite($this->handle,$message);
    }


    public function critical($message, array $context = array()){
        $message = date("F j, Y, g:i a") .'CRITICAL' . ': ' . $message . "\n";
        fwrite($this->handle,$message);
    }


    public function error($message, array $context = array()){
        $message = date("F j, Y, g:i a") .'ERROR' . ': ' . $message . "\n";
        fwrite($this->handle,$message);
    }


    public function warning($message, array $context = array()){
        $message = date("F j, Y, g:i a") .'WARNING' . ': ' . $message . "\n";
        fwrite($this->handle,$message);
    }


    public function notice($message, array $context = array()){
        $message = date("F j, Y, g:i a") .'NOTICE' . ': ' . $message . "\n";
        fwrite($this->handle,$message);
    }


    public function info($message, array $context = array()){
        $message = date("F j, Y, g:i a") .'INFO' . ': ' . $message . "\n";
        fwrite($this->handle,$message);
    }


    public function debug($message, array $context = array()){
        $message = date("F j, Y, g:i a") .'DEBUG' . ': ' . $message . "\n";
        fwrite($this->handle,$message);
    }


    public function log($level, $message, array $context = array()){
        $current_time = date("d-M-Y, h:i:s a");
        fwrite($this->handle, $current_time. " ".$this->level. " ".$message.PHP_EOL);
        echo 'Successfully logged to text file';
    }

}