<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 17-2-13
 * Time: 下午4:32
 */
namespace Silk\Test\Block;
//调用模型在Block中获取数据
class Test extends \Magento\Framework\View\Element\Template
{
    protected $_testFactory;
    //自动构造函数依赖注入来注入工厂对象
    public function _construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Silk\Test\Model\TestFactory $testFactory
    ){
        $this->_testFactory = $testFactory;
        parent::_construct($context);
    }

    public function _prepareLayout()
    {
//        //为了实例化模型对象，我们将使用自动构造函数依赖注入来注入工厂对象，然后使用工厂对象来实例化模型对象
//        $test = $this->_testFactory->create();\
//        //getCollection方法来获取模型的集合
//        $collection = $test->getCollection();
//        foreach($collection as $item){
//            var_dump($item->getData());
//        }
//        exit;
    }
}