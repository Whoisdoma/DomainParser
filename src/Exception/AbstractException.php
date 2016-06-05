<?php

namespace Whoisdoma\DomainParser\Exception;

abstract class AbstractException extends \Exception
{

    /**
     * Creates an exception object
     *
     * @param  string $message
     * @param  integer $code
     * @param  Exception $previous
     * @return void
     */
    public function __construct($message = '', $code = 0, Exception $previous = null)
    {
        parent::__construct($message, (int) $code, $previous);
    }

    /**
     * Creates an exception object
     *
     * @param  string $type
     * @param  string $message
     * @param  integer $code
     * @param  Exception $previous
     * @return mixed
     */
    public static function factory($type = '', $message = '', $code = 0, Exception $previous = null)
    {
        if (file_exists(__DIR__ . ucfirst($type) . 'Exception.php')) {
            include_once __DIR__ . ucfirst($type) . 'Exception.php';
            $classname = 'Whoisdoma\DomainParser\Exception\\' . ucfirst($type) . 'Exception';
            return new $classname($message, $code, $previous);
        } else {
            include_once __DIR__ . '/Exception.php';
            $classname = 'Whoisdoma\DomainParser\Exception\Exception';
            return new $classname($message, $code, $previous);
        }
    }
}