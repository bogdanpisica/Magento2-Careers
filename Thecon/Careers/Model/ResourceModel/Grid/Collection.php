<?php
namespace Thecon\Careers\Model\ResourceModel\Grid;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    protected $_idFieldName = 'entity_id';

    protected function _construct()
    {
        $this->_init(
            'Thecon\Careers\Model\Grid',
            'Thecon\Careers\Model\ResourceModel\Grid'
        );
    }
}
