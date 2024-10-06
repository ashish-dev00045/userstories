<?php
namespace Ashish\UserStory2\Plugin;

class DesignPlugin
{
    public function afterGetCopyright(\Magento\Theme\Block\Html\Footer $subject, $result)
    {
        return '© 2024 Ashish\'s Custom Store. All Rights Reserved.';
    }

    public function afterGetWelcome(\Magento\Theme\Block\Html\Header $subject, $result)
    {
        return 'Welcome to Ashish Custom Store!';
    }
}