<?php
namespace Ashish\UserStory18\Plugin;

class CartPricePlugin
{
    public function afterGetBasePrice(\Magento\Quote\Model\Quote\Item $subject, $result)
    {
        return $result + 1.79;
    }
}
