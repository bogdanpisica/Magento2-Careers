<?php
namespace Thecon\Careers\Block;
class Jobs extends \Magento\Framework\View\Element\Template
{
    protected $_postFactory;
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Thecon\Careers\Model\PostFactory $postFactory
    )
    {
        $this->_postFactory = $postFactory;
        parent::__construct($context);
    }

    public function getCollection(){
        $post = $this->getRequest()->getParams('id');

        $job = $this->_postFactory->create()->getCollection()->addFieldToFilter('entity_id',['eq' => $post])->getData();

        if(!empty($job)){
            return $job[0];
        } else {
            return false;
        }
    }
}