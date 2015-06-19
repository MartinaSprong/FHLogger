<?php

namespace Psr\MartinaLogger;

use Psr\Log\LoggerInterface;

class MartinaLogger {
    private $_log;

    /**
     * @param LoggerInterface $log
     */
    public function __construct(LoggerInterface $log )
    {
        $this->_log = $log;

    }

    /**
     * Call Log() in the set strategy.
     */

    public function performEmergency($message, $context){
        $this->_log->emergency($message, $context);
    }

    public function performAlert($message, $context){
        $this->_log->alert($message, $context);
    }

    public function performCritical($message, $context){
        $this->_log->critical($message, $context);
    }

    public function performError($message, $context){
        $this->_log->error($message, $context);
    }

    public function performWarning($message, $context){
        $this->_log->warning($message, $context);
    }

    public function performNotice($message, $context){
        $this->_log->notice($message, $context);
    }

    public function performInfo($message, $context){
        $this->_log->info($message, $context);
    }

    public function performDebug($message, $context){
        $this->_log->debug($message, $context);
    }

    public function performLog($level, $message, $context)
    {
    $this->_log->log($level, $message, $context);
    }
}