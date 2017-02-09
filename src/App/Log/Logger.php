<?php
namespace App\Log;

/**
 * Class Log.
 */
class Logger
{
    /**
     * @var array
     */
    protected $logs;

    /**
     * Log constructor.
     */
    public function __construct()
    {
        $this->logs = [];
    }

    /**
     * @param string $message
     */
    public function log($message)
    {
        $this->logs[] = $message;
    }

    /**
     * @return array
     */
    public function getLogs()
    {
        return $this->logs;
    }
}