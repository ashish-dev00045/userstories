<?php

namespace Ashish\UserStory1\Api\Data;

use Ashish\UserStory1\Api\Data\CustomCategoryInterface;


class CustomCategory implements CustomCategoryInterface
{
    private int $id;
    private string $description;
    private int $parentId;
    private string $name;
    private bool $isActive;
    private int $position;
    private int $level;
    private string $childrenIds;
    private string $createdAt;
    private string $updatedAt;
    private string $path;
    private mixed $availableSortBy;
    private bool $includeInMenu;
    private \Magento\Catalog\Api\Data\CategoryExtensionInterface $extensionAttributes;
    private array $customAttributes;
    private string $attributeCode;
    public function __construct() {
      $this->customAttributes = [];
      $this->description = "";
    }
    // custom category interface

     /**

     *
     * @return string|null
     */
    public function getDescription(){
        return $this->description;
    }

    public function setDescription($description){
        return $this->description = $description;
    }

    public function getId(){
        return $this->id;
    }

    /**
     * Set category id.
     *
     * @param int $id
     * @return $this
     */
    public function setId($id){
        $this->id = $id;
    }

    /**
     * Get parent category ID
     *
     * @return int|null
     */
    public function getParentId(){
        $this->parentId;
    }

    /**
     * Set parent category ID
     *
     * @param int $parentId
     * @return $this
     */
    public function setParentId($parentId){
        $this->parentId = $parentId;
    }

    /**
     * Get category name
     *
     * @return string|null
     */
    public function getName(){
        return $this->name;
    }

    /**
     * Set category name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name){
        $this->name = $name;
    }

    /**
     * Check whether category is active
     *
     * @return bool|null
     */
    public function getIsActive(){
        return $this->isActive;
    }

    /**
     * Set whether category is active
     *
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive($isActive){
        $this->isActive = $isActive;
    }

    /**
     * Get category position
     *
     * @return int|null
     */
    public function getPosition(){
        return $this->position;
    }

    /**
     * Set category position
     *
     * @param int $position
     * @return $this
     */
    public function setPosition($position){
        $this->position = $position;
    }

    /**
     * Get category level
     *
     * @return int|null
     */
    public function getLevel(){
        return $this->level;
    }

    /**
     * Set category level
     *
     * @param int $level
     * @return $this
     */
    public function setLevel($level){
        $this->level = $level;
    }

    /**
     * Retrieve children ids comma separated.
     *
     * @return string|null
     */
    public function getChildren(){
        return $this->childrenIds;
    }

    /**
     * Retrieve category creation date and time.
     *
     * @return string|null
     */
    public function getCreatedAt(){
        return $this->createdAt;
    }

    /**
     * Set category creation date and time.
     *
     * @param string $createdAt
     * @return $this
     */
    public function setCreatedAt($createdAt){
        $this->createdAt = $createdAt;
    }

    /**
     * Retrieve category last update date and time.
     *
     * @return string|null
     */
    public function getUpdatedAt(){
        return $this->updatedAt;
    }

    /**
     * Set category last update date and time.
     *
     * @param string $updatedAt
     * @return $this
     */
    public function setUpdatedAt($updatedAt){
        $this->updatedAt = $updatedAt;
    }

    /**
     * Retrieve category full path.
     *
     * @return string|null
     */
    public function getPath(){
        return $this->path;
    }

    /**
     * Set category full path.
     *
     * @param string $path
     * @return $this
     */
    public function setPath($path){
        $this->path = $path;
    }

    /**
     * Retrieve available sort by for category.
     *
     * @return string[]|null
     */
    public function getAvailableSortBy(){
        return $this->availableSortBy;
    }

    /**
     * Set available sort by for category.
     *
     * @param string[]|string $availableSortBy
     * @return $this
     */
    public function setAvailableSortBy($availableSortBy){
        $this->availableSortBy = $availableSortBy;
    }

    /**
     * Get category is included in menu.
     *
     * @return bool|null
     */
    public function getIncludeInMenu(){
        return $this->includeInMenu;
    }

    /**
     * Set category is included in menu.
     *
     * @param bool $includeInMenu
     * @return $this
     */
    public function setIncludeInMenu($includeInMenu){
        $this->includeInMenu = $includeInMenu;
    }

    /**
     * Retrieve existing extension attributes object or create a new one.
     *
     * @return \Magento\Catalog\Api\Data\CategoryExtensionInterface|null
     */
    public function getExtensionAttributes(){
        return $this->extensionAttributes;
    }

    /**
     * Set an extension attributes object.
     *
     * @param \Magento\Catalog\Api\Data\CategoryExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(\Magento\Catalog\Api\Data\CategoryExtensionInterface $extensionAttributes){
        $this->extensionAttributes = $extensionAttributes;
    }

 /**
     * Get an attribute value.
     *
     * @param string $attributeCode
     * @return \Magento\Framework\Api\AttributeInterface|null
     */
    public function getCustomAttribute($attributeCode){
        return $this->customAttributes[$attributeCode];
    }

    /**
     * Set an attribute value for a given attribute code
     *
     * @param string $attributeCode
     * @param mixed $attributeValue
     * @return $this
     */
    public function setCustomAttribute($attributeCode, $attributeValue){
        $this->customAttributes[$attributeCode] = $attributeValue;
    }

    /**
     * Retrieve custom attributes values.
     *
     * @return \Magento\Framework\Api\AttributeInterface[]|null
     */
    public function getCustomAttributes(){
        return $this->customAttributes;
    }

    /**
     * Set array of custom attributes
     *
     * @param \Magento\Framework\Api\AttributeInterface[] $attributes
     * @return $this
     * @throws \LogicException
     */
    public function setCustomAttributes(array $attributes){
        foreach ($attributes as $attributeCode => $attributeValue) {
            $this->setCustomAttribute($attributeCode, $attributeValue);
        }
    }
}