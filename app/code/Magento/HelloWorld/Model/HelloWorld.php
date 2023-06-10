<?php

namespace Magento\HelloWorld\Model;

use Magento\HelloWorldApi\Api\HelloWorldInterface;

class HelloWorld implements HelloWorldInterface
{

    public function __construct(private string $message)
    {}

    public function execute(): string
    {
        return $this->message;
    }
}
