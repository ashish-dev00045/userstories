<?php
namespace Ashish\UserStory6\Plugin;

class CustomDescriptionPlugin
{
    public function afterToHtml(\Magento\Catalog\Block\Product\View\Description $subject, $result)
    {
        return '<p>Sample description</p>';
    }
}
