<?php
namespace Thecon\Careers\Block;
class Lists extends \Magento\Framework\View\Element\Template
{
	protected $_postFactory;
	protected $urlInterface;
	public function __construct(
		\Magento\Framework\View\Element\Template\Context $context,
		\Thecon\Careers\Model\PostFactory $postFactory,
		\Magento\Framework\UrlInterface $urlInterface
	)
	{
		$this->_postFactory = $postFactory;
		$this->_urlInterface = $urlInterface;
		parent::__construct($context);
	}

	public function getPostCollection(){

	    $search = $this->getRequest()->getPost();

	    if((isset($search['departments']) && $search['departments'] != '') || (isset($search['city']) && $search['city'] != '') || (isset($search['type']) && $search['type'] != '')) {
            $post = $this->_postFactory->create();


            $collection = $post->getCollection();
            if($search['departments'] != ''){
                $collection->addFieldToFilter('job_domain',['eq' => $search['departments']]);
            }

            if($search['city'] != ''){
                $collection->addFieldToFilter('job_city',['eq' => $search['city']]);
            }

            if($search['type'] != ''){
                $collection->addFieldToFilter('job_type',['eq' => $search['type']]);
            }
            return $collection->load();
        }
	    else {
            $post = $this->_postFactory->create();
            return $post->getCollection();
        }
	}

    public function getDomain(){
        $post = $this->_postFactory->create()->getCollection();
        $domains = [];
        foreach ($post as $domain) {
           if(!in_array($domain->getJobDomain(),$domains)) {
               $domains[] = $domain->getJobDomain();
           }
        }
        return $domains;
    }

    public function getCity(){
        $post = $this->_postFactory->create()->getCollection();
        $cityy = [];
        foreach ($post as $city) {
            if(!in_array($city->getJobCity(),$cityy)) {
                $cityy[] = $city->getJobCity();
            }
        }
        return $cityy;
    }

    public function getType(){
        $post = $this->_postFactory->create()->getCollection();
        $typee = [];
        foreach ($post as $type) {
            if(!in_array($type->getJobType(),$typee)) {
                $typee[] = $type->getJobType();
            }
        }
        return $typee;
    }

	public function getPostUrl($id_post){
		return $this->_urlInterface->getUrl('careers/index/jobs/id/'.$id_post);
	}

    public function getFormUrl(){
        return $this->_urlInterface->getUrl('careers/index/lists');
    }
}