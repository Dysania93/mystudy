<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 17-2-14
 * Time: 上午10:09
 */
//无论是EAV模型和Flat模型如果在开发中想使用它的Collection属性都需要此文件
//为了后面ObjectManager进行调用必须建立此文件
//两种模型的Collection.php是一样的都是初始化Model与ResourceModel的关系。
namespace Silk\Test\Model\ResourceModel\Employee;

//!!!EAV模式查询!!!CRUD集合类必须从函数中扩展\Magento\Eav\Model\Entity\Collection\AbstractCollection
class	Collection	extends \Magento\Eav\Model\Entity\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Silk\Test\Model\Employee',
            'Silk\Test\Model\ResourceModel\Employee');
    }
}