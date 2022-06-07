<?php

namespace Lukasz\Vehicle\Model\ResourceModel\Vehicle;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'vehicle_id';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\Lukasz\Vehicle\Model\Vehicle::class, \Lukasz\Vehicle\Model\ResourceModel\Vehicle::class);
    }
}
