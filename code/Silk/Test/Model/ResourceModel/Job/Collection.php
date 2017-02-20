<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 17-2-8
 * Time: 上午9:16
 */
namespace Silk\Test\Model\ResourceModel\Job;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{

    protected $_idFieldName = \Silk\Test\Model\Job::JOB_ID;

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Silk\Test\Model\Job', 'Silk\Test\Model\ResourceModel\Job');
    }
}