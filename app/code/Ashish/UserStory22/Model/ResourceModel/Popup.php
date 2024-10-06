<?php
namespace Ashish\UserStory22\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Popup extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('ashish_userstory22_popup', 'popup_id');
    }
}
