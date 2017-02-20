<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 17-2-15
 * Time: 上午9:52
 */
//无论是EAV模型和Flat模型如果在开发中想使用它的Collection属性都需要此文件
//为了后面ObjectManager进行调用必须建立此文件
//两种模型的Collection.php是一样的都是初始化Model与ResourceModel的关系。
namespace Silk\Test\Model\ResourceModel\Test3;

//资源模型收集 - 获取模型集合
//该集合模型被认为是一种资源模型使我们能够过滤和提取的集合表中的数据
//!!!简单的单表查询!!!CRUD集合类必须从函数中扩展\Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
class Test3 extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        //调用_init()方法来初始化模型，资源模型
        $this->_init('Silk\Test\Model\Test3', 'Silk\Test\Model\ResourceModel\Test3');
    }
}