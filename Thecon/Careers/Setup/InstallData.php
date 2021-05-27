<?php
 
namespace Thecon\Careers\Setup;
 
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
 
class InstallData implements InstallDataInterface
{
 
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
 
        $tableName = $setup->getTable('th_careers');

        if ($setup->getConnection()->isTableExists($tableName) == true) {
            $data = [
                [
                    'job_name' => 'Web developer',
                    'job_type' => 'Full Time',
                    'job_domain' => 'IT',
                    'job_city' => 'Bucharest',
                    'job_expiry' => '2021-03-17',
                    'job_shortdescription' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita',
                    'job_description' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita',
                    'status' => 1,
                ],
                [
                    'job_name' => 'Java developer',
                    'job_type' => 'Full Time',
                    'job_domain' => 'IT',
                    'job_city' => 'London',
                    'job_expiry' => '2021-03-17',
                    'job_shortdescription' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita',
                    'job_description' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita',
                    'status' => 1,
                ],
                [
                    'job_name' => 'Retailer manager',
                    'job_type' => 'Full Time',
                    'job_domain' => 'Commerce',
                    'job_city' => 'Berlin',
                    'job_expiry' => '2021-03-17',
                    'job_shortdescription' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita',
                    'job_description' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita',
                    'status' => 1,
                ],
            ];
            foreach ($data as $item) {
                $setup->getConnection()->insert($tableName, $item);
            }
        }
        $setup->endSetup();
    }
}