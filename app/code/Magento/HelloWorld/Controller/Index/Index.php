<?php

namespace Magento\HelloWorld\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;

class Index implements HttpGetActionInterface
{

    public function execute()
    {
        dd('teste');
    }
}
