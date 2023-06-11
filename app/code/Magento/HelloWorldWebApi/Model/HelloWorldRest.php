<?php

namespace Magento\HelloWorldWebApi\Model;

use Magento\HelloWorldApi\Api\HelloWorldInterface;
use Magento\HelloWorldApi\Api\HelloWorldRestInterface;

class HelloWorldRest implements HelloWorldRestInterface
{
    public function __construct(private HelloWorldInterface $helloWorld)
    {}

    /**
     * @return array
     */
    public function getMessage(): array
    {
        return [
            'message' => $this->helloWorld->execute()
        ];
    }
}
