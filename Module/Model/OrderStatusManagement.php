<?php 
namespace Sweety\Module\Model;
use Sweety\Module\Api\OrderStatusManagementInterface;
 
 
class OrderStatusManagement implements OrderStatusManagementInterface {

	protected $statusCollectionFactory;

	/**
     * Construct
     *
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Magento\Sales\Model\ResourceModel\Order\Status\CollectionFactory $statusCollectionFactory
     */
    public function __construct(
            \Magento\Sales\Model\ResourceModel\Order\Status\CollectionFactory $statusCollectionFactory
        ) 
    {       
        $this->statusCollectionFactory = $statusCollectionFactory;
    }

	/**
	 * {@inheritdoc}
	 */
	public function getStatus()
	{
		$options = $this->statusCollectionFactory->create()->toOptionArray();        
        return json_encode($options);
	}
}