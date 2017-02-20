<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 17-2-8
 * Time: 上午9:15
 */
namespace Silk\Test\Model\ResourceModel;

use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;
class Job extends AbstractDb
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        // Table Name and Primary Key column
        $this->_init('silk_job', 'entity_id');
    }

}