<?php
namespace Silk\Test\Controller\Test; //这里使用了php的命名空间
use Magento\Framework\App\Action\Action;
class Test extends Action {

    protected $testFactory;

    /** @var  \Magento\Framework\View\Result\Page */
    protected $resultPageFactory;
    /*** @param \Magento\Framework\App\Action\Context $context*/
    //暂时认为是,利用构造方法初始化数据
    public function __construct(\Magento\Framework\App\Action\Context $context,
                                \Magento\Framework\View\Result\PageFactory $resultPageFactory,
    //工厂类名称是Model类的名称，并追加“Factory”字。我们将有TestFactory类,不能创建此类。Magento将为您创建它。
        //每当Magento的对象管理器遇到以“Factory”这个单词结尾的类名时，如果该类不存在，它将在var / generation文件夹中自动生成Factory类
    //var/generation/<vendor_name>/<module_name>/Model/ClassFactory.php
                                \Silk\Test\Model\TestFactory $testFactory
    )     {
        $this->testFactory = $testFactory;
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
//        return $this->resultPageFactory->create();

        //获取要操作的model的实例化对象(testFactory是Model目录下的Test自动生产的::要upgrade的),create()暂时是固定写法
        $data = $this->testFactory->create();
        //load(主键)要获取或(操作)的某一条数据
        $data2 = $data->load(5);
        //object[字段]获取这字段的数据
        var_dump($data2['e_name']);
        //获取id数据
        var_dump($data2->getId());
        //object->getData()获取这条数据的所有字段数据
        var_dump($data2->getData());
        echo "<hr/>";
        var_dump($data2->getItemText());

        echo "<hr/>";
        //object->setData(需要update的字段, 修改后数值) 设置修改的字段数据
        //当setData()数据库中不存在的某条数据,会新建一条数据,id主键递进(当操作已删除的某条数据时,会在id递进那条数据操作,不会重新新建删除的那条数据的id)
        $data2->setData('e_name', '50');
        //执行setdata设置的数据
        $data2->save();

        echo "<hr/>";
        $data3 = $data->load(3);
        //删除某一条数据
//        $data3->delete();
    }
}
