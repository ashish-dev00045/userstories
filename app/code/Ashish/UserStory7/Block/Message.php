<?php
namespace Ashish\UserStory7\Block;

use Magento\Framework\View\Element\Template;

class Message extends Template
{
    protected function _toHtml()
    {
        return '<p>This is displayed by Ashish on all pages</p>';
    }
    protected function _afterToHtml($html)
    {
        return $html . '<p>Additional message from _afterToHtml() given by Sir !!</p>';
    }
    public function HelloWorld(){
        return "<p>Hello World</p>";
    }
}
