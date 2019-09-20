<?php
namespace App\Services;

use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;

class Greeting
{
    /**
     * @var LoggerInterface
     */
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function log($log)
    {
        $this->logger->info( 'Greeting to: ' . $log);
    }
}
