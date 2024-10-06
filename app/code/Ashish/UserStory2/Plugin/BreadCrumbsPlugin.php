<?php
namespace Ashish\UserStory2\Plugin;

class BreadCrumbsPlugin
{
    public function afterGetLabel($result)
    {
        return 'Hummingbird ' . $result;
    }
}