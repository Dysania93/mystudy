<?php
namespace Silk\Test\Controller\Test; //这里使用了php的命名空间
use Magento\Framework\App\Action\Action;
class Test2 extends Action {

    /** @var  \Magento\Framework\View\Result\Page */
    protected $resultPageFactory;
    /*** @param \Magento\Framework\App\Action\Context $context*/
    //暂时认为是,利用构造方法初始化数据
    public function __construct(\Magento\Framework\App\Action\Context $context,
                                \Magento\Framework\View\Result\PageFactory $resultPageFactory
    )     {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    /**
     * @return \Magento\Framework\View\Result\PageFactory
     */
    //需要执行的代码放在此方法
    public function execute()
    {
        echo "<pre/>";
        $test = $this->_objectManager->get('Magento\Customer\Model\AttributeFactory');
        $data = $test->create()->load(1)->getData();
        var_dump($data);
//        echo "a";
    }
}
