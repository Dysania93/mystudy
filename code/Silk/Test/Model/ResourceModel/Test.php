<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 17-2-15
 * Time: 上午9:51
 */
namespace Silk\Test\Model\ResourceModel;

//这是单表查询,和EAV模式查询继承的类也不一样
//创建资源模型
//每个CRUD资源模型必须扩展\Magento\Framework\Model\ResourceModel\Db\AbstractDb包含从数据库获取信息的函数的抽象类
class Test extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * AdminNotification Resource initialization
     *
     * @return void
     */
    //像模型类一样，此资源模型类将具有必需的方法_construct()。此方法将调用_init()函数来定义表的名称和主键
    protected function _construct()
    {
        $this->_init('silk_test', 'e_id');
    }
}