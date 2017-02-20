<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 17-2-13
 * Time: 下午4:16
 */
namespace Silk\Test\Controller\Test;

class Test3 extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory)
    {
        $this->_pageFactory = $pageFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
        return $this->_pageFactory->create();
//        echo "a";
    }
}