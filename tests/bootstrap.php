<?php
/**
 * Created by PhpStorm.
 * User: manbo
 * Date: 1/5/15
 * Time: 5:36 PM
 */
require_once realpath(__DIR__ . '/../vendor') . '/autoload.php';

Logger::configure(array(
        'rootLogger' => array(
            'appenders' => array('default')
        ),
        'appenders' => array(
            'default' => array(
                'class' => 'LoggerAppenderConsole',
                'layout' => array(
                    'class' => 'LoggerLayoutSimple'
                )
            )
        )
    )
);
