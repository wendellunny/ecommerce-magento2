<?php

namespace Magento\HelloWorldApi\Api;

interface HelloWorldRestInterface
{
    /**
     * @return array
     */
    public function getMessage(): array;
}
