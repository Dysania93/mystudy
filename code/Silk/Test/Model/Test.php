<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 17-2-15
 * Time: 上午9:50
 */
namespace Silk\Test\Model;

//创建模型
//模型文件包含整个数据库逻辑，它不执行sql查询
//这个模型类将扩展AbstractModel类Magento\Framework\Model\AbstractModel
class Test extends \Magento\Framework\Model\AbstractModel
{
    Public  function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\Model\ResourceModel\AbstractResource $resource = null,
        \Magento\Framework\Data\Collection\AbstractDb $resourceCollection =  null,
        Array $data = [] ) {
        parent::__construct($context,$registry,  $resource, $resourceCollection,$data);
    }

    //每个CRUD模型都必须使用_construct（）方法来调用_init（）方法。这个_init（）方法将定义实际从数据库获取信息的资源模型。
    Public  function  _construct() {
        $this->_init('Silk\Test\Model\ResourceModel\Test');
    }
}