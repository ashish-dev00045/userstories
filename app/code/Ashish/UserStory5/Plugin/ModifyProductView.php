<?php
namespace Ashish\UserStory5\Plugin;

class ModifyProductView
{
    public function afterToHtml(\Magento\Catalog\Block\Product\View $subject, $result)
    {
        return $result . "<p>Custom content added by Ashish_UserStory5 plugin.</p>";
    }
}
