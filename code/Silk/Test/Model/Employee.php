<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 17-2-14
 * Time: 上午10:26
 */
namespace Silk\Test\Model;

use \Magento\Framework\Model\AbstractModel;

class Employee extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('Silk\Test\Model\ResourceModel\Employee', 'e_id');
    }
}