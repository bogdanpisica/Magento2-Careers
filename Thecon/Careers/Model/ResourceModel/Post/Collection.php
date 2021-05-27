<?php
namespace Thecon\Careers\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    protected $_idFieldName = 'entity_id';

    protected function _construct()
    {
        $this->_init(
            'Thecon\Careers\Model\Post',
            'Thecon\Careers\Model\ResourceModel\Post'
        );
    }
}
