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
		$id = array();
		for($i=1;$i<=count($options);$i++){
			$id[$i]=$i;
		}
		$options = array_map(function($arr1,$arr2){return $arr1 + ['id' => $arr2];}, $options, $id);
        return $options;
    }
}