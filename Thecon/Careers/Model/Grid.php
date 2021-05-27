<?php
namespace Thecon\Careers\Model;

use Thecon\Careers\Api\Data\GridInterface;

class Grid extends \Magento\Framework\Model\AbstractModel implements GridInterface
{
    /**
     * CMS page cache tag.
     */
    const CACHE_TAG = 'th_careers';

    /**
     * @var string
     */
    protected $_cacheTag = 'th_careers';

    /**
     * Prefix of model events names.
     *
     * @var string
     */
    protected $_eventPrefix = 'th_careers';

    /**
     * Initialize resource model.
     */
    protected function _construct()
    {
        $this->_init('Thecon\Careers\Model\ResourceModel\Grid');
    }

    public function getEntityId()
    {
        return $this->getData(self::JOB_ID);
    }

    public function setEntityId($entity_id)
    {
        return $this->setData(self::JOB_ID, $entity_id);
    }

    public function getJobName()
    {
        return $this->getData(self::JOB_NAME);
    }

    public function setJobName($job_name)
    {
        return $this->setData(self::JOB_NAME, $job_name);
    }

    public function getJobType()
    {
        return $this->getData(self::JOB_TYPE);
    }

    public function setJobType($job_type)
    {
        return $this->setData(self::JOB_TYPE, $job_type);
    }

    public function getJobDomain()
    {
        return $this->getData(self::JOB_DOMAIN);
    }

    public function setJobDomain($job_domain)
    {
        return $this->setData(self::JOB_DOMAIN, $job_domain);
    }

    public function getJobCity()
    {
        return $this->getData(self::JOB_CITY);
    }

    public function setJobCity($job_city)
    {
        return $this->setData(self::JOB_CITY, $job_city);
    }

    public function getJobExpiry()
    {
        return $this->getData(self::JOB_EXPIRY);
    }

    public function setJobExpiry($job_expiry)
    {
        return $this->setData(self::JOB_EXPIRY, $job_expiry);
    }

    public function getJobShortDescription()
    {
        return $this->getData(self::JOB_SHORTDESCRIPTION);
    }

    public function setJobShortDescription($job_shortdescription)
    {
        return $this->setData(self::JOB_SHORTDESCRIPTION, $job_shortdescription);
    }

    public function getJobDescription()
    {
        return $this->getData(self::JOB_DESCRIPTION);
    }

    public function setJobDescription($job_description)
    {
        return $this->setData(self::JOB_DESCRIPTION, $job_description);
    }

    public function getStatus()
    {
        return $this->getData(self::STATUS);
    }

    public function setStatus($status)
    {
        return $this->setData(self::STATUS, $status);
    }
}
