<?php
namespace Silk\Test\Controller\Index; //这里使用了php的命名空间
use Magento\Framework\App\Action\Action;  //基类Magento / Framework / App / Action / Action是前端控制器的标准基类
class Index extends Action {
    /** @var  \Magento\Framework\View\Result\Page */
    protected $resultPageFactory;
    /*** @param \Magento\Framework\App\Action\Context $context*/
    public function __construct(\Magento\Framework\App\Action\Context $context,
                                \Magento\Framework\View\Result\PageFactory $resultPageFactory)     {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }



    /**
     * @return \Magento\Framework\View\Result\PageFactory
     */
    //每个控制器有一个，并且只有一个入口点。这是execute方法
    public function execute()
    {
//        echo "this is Silk_Test_Controller_Index_Index";
//        echo BP;
//        die();

    }
}
