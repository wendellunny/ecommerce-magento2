<?php

namespace Magento\HelloWorld\Model\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class TestObserver implements ObserverInterface
{

    public function execute(Observer $observer)
    {
        dd('OBSERVOU');
    }
}
