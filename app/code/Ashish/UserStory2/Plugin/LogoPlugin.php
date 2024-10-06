<?php
namespace Ashish\UserStory2\Plugin;

use Magento\Catalog\Block\Product\ListProduct;

class LogoPlugin
{
    public function afterGetProductPriceHtml(ListProduct $subject, $result, \Magento\Catalog\Api\Data\ProductInterface $product)
    {
        $logoUrl = $subject->getViewFileUrl('Ashish_UserStory2::images/logo.jpg');
        if ($product->getPrice() < 60) {
            $logoHtml = '<img src="' . $logoUrl . '" alt="Discount Logo" style="width: 50px; height: 50px; margin-left: 10px;"/>';
            $result .= $logoHtml;
        }
        return $result;
    }
}
