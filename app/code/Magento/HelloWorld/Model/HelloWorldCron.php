<?php

namespace Magento\HelloWorld\Model;

use Psr\Log\LoggerInterface;

class HelloWorldCron
{

    public function __construct(private LoggerInterface $logger)
    {}
    /**
     * @return void
     */
    public function execute(): void
    {
        $this->logger->debug('Olá Mundo');
    }
}
