<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 17-2-14
 * Time: 上午9:38
 */
namespace Silk\Test\Model\ResourceModel;

//这是EAV模式查询,继承\Magento\Eav\Model\Entity\AbstractEntity(和单表查询继承的类不一样)
class Employee extends	\Magento\Eav\Model\Entity\AbstractEntity
{
    protected function _construct()
    {
        $this->_read = 'silk_test_read';
        $this->_write = 'silk_test_write';
    }

    public function getEntityType()
    {
        if (empty($this->_type)) {
            $this->setType(\Silk\Test\Model\Employee::ENTITY);
        }
        return parent::getEntityType();
    }
}