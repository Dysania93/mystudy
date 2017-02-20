<?php
namespace Silk\Test\Model;
class Test3 extends \Magento\Framework\Model\AbstractModel implements TestInterface, \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'silk_test';

    protected function _construct()
    {
        $this->_init('Silk\Test\Model\ResourceModel\Test2');
    }

    //实现接口下的方法
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}