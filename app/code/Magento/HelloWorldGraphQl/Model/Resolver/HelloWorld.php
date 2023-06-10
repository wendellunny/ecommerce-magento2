<?php

namespace Magento\HelloWorldGraphQl\Model\Resolver;

use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;
use Magento\HelloWorldApi\Api\HelloWorldInterface;

class HelloWorld implements ResolverInterface
{

    public function __construct(private HelloWorldInterface $helloWorld)
    {}

    public function resolve(Field $field, $context, ResolveInfo $info, array $value = null, array $args = null)
    {
        return [
            'message' => $this->helloWorld->execute()
        ];
    }
}
