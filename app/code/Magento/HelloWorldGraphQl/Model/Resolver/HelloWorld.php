<?php

namespace Magento\HelloWorldGraphQl\Model\Resolver;

use Magento\Framework\Event\Manager as EventManager;
use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;
use Magento\HelloWorldApi\Api\HelloWorldInterface;

class HelloWorld implements ResolverInterface
{

    public function __construct(private HelloWorldInterface $helloWorld, private EventManager $eventManager)
    {}

    public function resolve(Field $field, $context, ResolveInfo $info, array $value = null, array $args = null)
    {
        $this->eventManager->dispatch('observer_teste');
        return [
            'message' => $this->helloWorld->execute()
        ];
    }
}
