<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 17-2-8
 * Time: 上午9:23
 */
namespace Silk\Test\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

/**
 * @codeCoverageIgnore
 */
class InstallSchema implements InstallSchemaInterface
{
    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;

        $installer->startSetup();
        //下面代码是建表内容,之外代码为固定格式代码
            $table = $installer->getConnection()->newTable($installer->getTable('silk_test'))->addColumn(
                'e_id',   //字段名
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,   //字段类型,此处为int
                null,     //字段长度,可选,不填写null
                array('identity' => true, 'nullable' => false, 'primary' => true),   //此处定义为主键,不能为空,自增列等设置
                'Employee ID'   //说明
            )->addColumn(
                'e_name',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                array('nullable' => false),
                'Employee Name'
            )->addColumn(
                'e_address',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                '2M',
                array('nullable' => false),
                'Employee Address'
            )->addColumn(
                'is_active',
                \Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT,
                null,
                array(),
                'Active Status'
            )->addColumn(
                'created_at',
                \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
                null,
                array(),
                'Creation Time'
            )->addColumn(
                'update_time',
                \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
                null,
                array(),
                'Modification Time'
            )->setComment(                        //设置表说明
                'Employee Table'
            );
            $installer->getConnection()->createTable($table);        //创建表
        //END
        $installer->endSetup();

    }
}