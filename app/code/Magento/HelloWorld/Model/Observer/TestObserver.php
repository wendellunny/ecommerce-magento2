<?php

namespace Magento\HelloWorld\Model\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Psr\Log\LoggerInterface;

class TestObserver implements ObserverInterface
{

    public function __construct(private LoggerInterface $logger)
    {
    }

    public function execute(Observer $observer)
    {
        $this->logger->debug('Observou');
    }
}
