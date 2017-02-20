<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 17-2-13
 * Time: 下午4:32
 */
namespace Silk\Test\Block;
//创建块block,Magento块类负责呈现作为整个HTML页面的一部分的HTML字符串
//块文件应该包含所有需要的视图逻辑，它不应该包含任何种类的html或css
//Magento 2中的每个块必须继承Magento\Framework\View\Element\Template,是Magento的基本模板类
class Display extends \Magento\Framework\View\Element\Template
{
    public function __construct(\Magento\Framework\View\Element\Template\Context $context)
    {
        parent::__construct($context);
    }

    public function sayHello()
    {
        return __('Hello World1');
    }
}


/*
    作为视图开发人员，您的任务是获取或计算模板所需的任何数据。
    你可以通过上面的魔术集和get方法，或者通过直接在块对象上定义方法，你可以从phtml模板调用。
 */