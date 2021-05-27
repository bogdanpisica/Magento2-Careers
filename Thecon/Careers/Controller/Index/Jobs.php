<?php
namespace Thecon\Careers\Controller\Index;

class Jobs extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory)
    {
        $this->_pageFactory = $pageFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
        $this->resultPage = $this->_pageFactory->create();
        $this->resultPage->getConfig()->getTitle()->set((__('Job Info')));
        return $this->resultPage;
    }
}