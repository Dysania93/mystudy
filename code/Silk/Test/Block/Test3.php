<?php
namespace Silk\Test\Block;

class Test3 extends \Magento\Framework\View\Element\Template
{
    protected $_testFactory;
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Silk\Test\Model\Test3Factory $testFactory
    )
    {
        $this->_testFactory = $testFactory;
        parent::__construct($context);
    }
    protected function _prepareLayout()
    {
        $test = $this->_testFactory->create();
//        $test->setData('e_name', '50');
//        $test->save();
        $this->setTestModel($test);
    }
}