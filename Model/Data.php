<?php


namespace Prince\Employee\Model;


use Magento\Framework\Model\AbstractModel;

class Data extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(ResourceModel\Data::class);
    }
}
