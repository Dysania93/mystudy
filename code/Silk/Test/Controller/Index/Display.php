<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 17-2-13
 * Time: 下午4:16
 */
namespace Silk\Test\Controller\Index;

//基类Magento / Framework / App / Action / Action是前端控制器的标准基类
class Display extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory  //在Magento 2中，如果你想要一个控制器来渲染一个HTML页面，你需要让控制器的execute方法返回一个“page”对象。
    )
    {
        $this->_pageFactory = $pageFactory;
        //这是因为它也在父对象的（Magento / Framework / App / Action / Action）构造函数中，
             //我们需要调用parent :: __ construct来确保父构造函数中的任何工作仍然发生
        return parent::__construct($context);
    }

    //每个控制器有一个，并且只有一个入口点。这是execute方法
    public function execute()
    {
        //在Magento 2中，如果你想要一个控制器来渲染一个HTML页面，你需要让控制器的execute方法返回一个“page”对象。
        //使用PageFactory对象创建一个页面对象，然后返回该页面对象。
        return $this->_pageFactory->create();
    }
}