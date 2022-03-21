<?php


namespace Prince\Employee\Model\ResourceModel;


use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Data extends AbstractDb
{
    const MAIN_TABLE = 'employee_data';
    const ID_FIELD_NAME = 'emp_id';

    protected function _construct()
    {
        $this->_init(self::MAIN_TABLE, self::ID_FIELD_NAME);
    }
}

