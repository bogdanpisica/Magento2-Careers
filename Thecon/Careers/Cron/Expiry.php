<?php

namespace Thecon\Careers\Cron;

use Thecon\Careers\Model\GridFactory;

class Expiry
{
    protected $gridFactory;
    protected $theconLogger;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        GridFactory $gridFactory,
        \Thecon\Careers\Logger\TheconLogger $theconLogger
    )
    {
        $this->gridFactory = $gridFactory;
        $this->theconLogger = $theconLogger;
    }

    public function execute()
    {

        try {
            $this->theconLogger->info("Thecon Careers Cron Job - Running");
            $post = $this->gridFactory->create();
            $collection = $post->getCollection();
            $date_now = date("Y-m-d H:i:s");
            $collection ->addFieldToFilter('job_expiry',['lt' => $date_now])
                        ->addFieldToFilter('status',['eq' => '1'])
                        ->load();

            foreach ($collection as $testt) {
                $testt->setStatus(false);
                $testt->save();
            }
        } catch (\Exception $e) {
            $this->theconLogger->info("Thecon Careers Cron Job - Exception");
        }
    }
}