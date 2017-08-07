<?php
namespace Payport\PPIntegration\Model;
use Payport\PPIntegration\Api\AllStatusInterface;
 
class AllStatus implements AllStatusInterface
{
    /**
     * Returns all the statuses of this store
     *
     * @api
     * @return string Array of available statuses, with label.
     */
    public function get() {
		$objectManager = \Magento\Framework\App\ObjectManager::getInstance();
		$options = $objectManager->create('Magento\Sales\Model\ResourceModel\Order\Status\Collection')->toOptionArray();
        return $options;
    }
}