<?php

namespace Ashish\UserStory20\Plugin\Product;

use Magento\Catalog\Api\ProductRepositoryInterface;

class ListProduct
{
    /**
     * @var ProductRepositoryInterface
     */
    private $productRepository;

    /**
     * Constructor
     *
     * @param ProductRepositoryInterface $productRepository
     */
    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * After plugin for getAddToCartUrl method
     *
     * @param \Magento\Catalog\Block\Product\ListProduct $subject
     * @param string $result
     * @return string
     */
    public function afterGetAddToCartUrl(
        \Magento\Catalog\Block\Product\ListProduct $subject,
        $result
    ) {
        // Get the current product
        $product = $subject->getProduct();
        
        // Check if the product is null
        if ($product === null) {
            return $result;
        }

        // Fetch the product by its ID
        try {
            $product = $this->productRepository->getById($product->getId());
            if ($product->getQty() <= 1) {
                echo "This stock is less";
            }
        } catch (\Exception $e) {
            // Handle the exception if the product cannot be loaded
            // Log the error message or take any necessary action
        }

        return $result;
    }
}
