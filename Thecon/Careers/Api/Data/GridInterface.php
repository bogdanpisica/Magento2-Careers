<?php
namespace Thecon\Careers\Api\Data;

interface GridInterface
{
    const JOB_ID = 'entity_id';
    const JOB_NAME = 'job_name';
    const JOB_TYPE = 'job_type';
    const JOB_DOMAIN = 'job_domain';
    const JOB_CITY = 'job_city';
    const JOB_EXPIRY = 'job_expiry';
    const JOB_SHORTDESCRIPTION = 'job_shortdescription';
    const JOB_DESCRIPTION = 'job_description';
    const STATUS = 'status';

   /**
    * Get Id.
    *
    * @return int
    */
    public function getEntityId();

   /**
    * Set Id.
    */
    public function setEntityId($entityId);

   /**
    * Get Job Name.
    *
    * @return varchar
    */
    public function getJobName();

   /**
    * Set Job Name.
    */
    public function setJobName($job_name);

    /**
    * Get Job Type.
    *
    * @return varchar
    */
    public function getJobType();

   /**
    * Set Job Type.
    */
    public function setJobType($job_type);

    /**
    * Get Job Domain.
    *
    * @return varchar
    */
    public function getJobDomain();

   /**
    * Set Job Domain.
    */
    public function setJobDomain($job_domain);

    /**
    * Get Job City.
    *
    * @return varchar
    */
    public function getJobCity();

   /**
    * Set Job City.
    */
    public function setJobCity($job_city);

    /**
    * Get Job Expiry.
    *
    * @return varchar
    */
    public function getJobExpiry();

   /**
    * Set Job Expiry.
    */
    public function setJobExpiry($job_expiry);

    /**
     * Get Job Short Description.
     *
     * @return varchar
     */
    public function getJobShortDescription();

    /**
     * Set Job Short Description.
     */
    public function setJobShortDescription($job_shortdescription);

    /**
    * Get Job Description.
    *
    * @return varchar
    */
    public function getJobDescription();

   /**
    * Set Job Description.
    */
    public function setJobDescription($job_description);

   /**
    * Get Status.
    *
    * @return varchar
    */
    public function getStatus();

   /**
    * Set Status.
    */
    public function setStatus($status);
}
