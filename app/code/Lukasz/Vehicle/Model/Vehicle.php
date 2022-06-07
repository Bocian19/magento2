<?php


namespace Lukasz\Vehicle\Model;
use Magento\Framework\Model\AbstractModel;
class Vehicle extends AbstractModel
{
    /**
     * Vehicle cache tag
     */
    public const CACHE_TAG = 'vehicle';

    /**
     * @var string
     */
    protected $_cacheTag = self::CACHE_TAG;

    /**
     * Prefix of model events names
     *
     * @var string
     */
    protected $_eventPrefix = 'vehicle';

    /**
     * Construct.
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\Lukasz\Vehicle\Model\ResourceModel\Vehicle::class);
    }
}

