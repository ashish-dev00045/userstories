<?php
namespace Ashish\UserStory15\Model;

use Magento\Framework\Model\AbstractModel;
use Ashish\UserStory15\Model\ResourceModel\OrderPlacement as ResourceModel;

class OrderPlacement extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }
}
