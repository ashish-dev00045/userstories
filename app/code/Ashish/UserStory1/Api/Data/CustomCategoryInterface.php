<?php
namespace Ashish\UserStory1\Api\Data;
use Magento\Catalog\Api\Data\CategoryInterface;

interface CustomCategoryInterface extends CategoryInterface
{
    // custom category interface

     /**

     *
     * @return string|null
     */
    public function getDescription();
}