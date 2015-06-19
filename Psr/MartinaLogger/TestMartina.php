<?php

require('LoggerInterface.php');
require('MartinaLogger.php');
require('FileStrategy.php');
require('DbStrategy.php');

//$logger = new \Psr\MartinaLogger\MartinaLogger(new \Psr\MartinaLogger\FileStrategy());


$logger->info('Logging to FileStrategy may be useful for testing');
$logger->error('This is an error');
$logger->log('Let\'s try swapping to a DatabaseLogger');


function testLoggers(){
    $loggers = array(
        new \Psr\MartinaLogger\FileStrategy('./log.txt'),
        new \Psr\MartinaLogger\DbStrategy()
    );

    foreach ($loggers as $logger) {
        $logger->log('Log message');
    }
}
testLoggers();