<?php
namespace Ashish\UserStory22\Model;

use Magento\Framework\Model\AbstractModel;

class Popup extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('Ashish\UserStory22\Model\ResourceModel\Popup');
    }
}
