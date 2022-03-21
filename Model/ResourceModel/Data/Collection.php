<?php


namespace Prince\Employee\Model\ResourceModel\Data;


use Prince\Employee\Model\Data;
use Prince\Employee\Model\ResourceModel\Data as DataResourceModel;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Data::class, DataResourceModel::class);
    }
}

