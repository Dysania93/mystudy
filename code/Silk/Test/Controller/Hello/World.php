<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 17-2-8
 * Time: 上午8:45
 */
namespace Silk\Test\Controller\Hello;
use Magento\Framework\App\Action\Action;

class World extends Action {
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
    public function execute()
    {
//      echo "this is Silk_Test_Controller_Hello_World";
//      die();
        $this->_view->loadLayout();
        $this->_view->getLayout()->initMessages();
        $this->_view->renderLayout();
    }
}