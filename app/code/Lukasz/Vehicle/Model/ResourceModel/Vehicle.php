<?php

namespace Lukasz\Vehicle\Model\ResourceModel;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Vehicle extends AbstractDb
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('vehicle', 'vehicle_id');
    }
}
