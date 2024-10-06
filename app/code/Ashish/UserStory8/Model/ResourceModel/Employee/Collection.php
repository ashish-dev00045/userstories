<?php

namespace Ashish\UserStory8\Model\ResourceModel\Employee;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Ashish\UserStory8\Model\Employee as EmployeeModel;
use Ashish\UserStory8\Model\ResourceModel\Employee as EmployeeResource;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(EmployeeModel::class, EmployeeResource::class);
    }
}
