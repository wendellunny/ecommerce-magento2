<?php

namespace Magento\HelloWorld\Setup\Patch\Data;

use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;

class HelloWorldPatch implements DataPatchInterface
{
    private const TABLE_NAME = 'admin_user';

    public function __construct(private ModuleDataSetupInterface $moduleDataSetup)
    {
    }

    public static function getDependencies()
    {
        return [];
    }

    public function getAliases()
    {
        return [];
    }

    public function apply()
    {
        $this->moduleDataSetup->getConnection()->startSetup();
        $this->moduleDataSetup->getConnection()->insert(
            self::TABLE_NAME,
            [
                'firstname' => 'Hello',
                'lastname' => 'World',
                'email' => 'helloworld@test.com',
                'username' => 'helloWorld',
                'password' => '$2a$12$ild7l.461zaJmpGV52ncQOHPzwaCTnBHyS4zuLn718RX8KL1raqeG',
                'created' => '2023-06-23 00:00:00',
                'modified' => '2023-06-23 00:00:01',
                'logdate' => '2023-06-23 00:00:01',
                'lognum' => 5,
                'reload_acl_flag' => 0,
                'is_active' => 1,
                'interface_locale' => 'en_US'
            ],
        );

        $this->moduleDataSetup->getConnection()->endSetup();
    }
}
