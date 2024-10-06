<?php
namespace Ashish\UserStory16\Block;

use Magento\Framework\View\Element\Template;

class CustomColor extends Template
{
    protected $scopeConfig;

    public function __construct(
        Template\Context $context,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        array $data = []
    ) {
        $this->scopeConfig = $scopeConfig;
        parent::__construct($context, $data);
    }

    public function getPageColor()
    {
        return $this->scopeConfig->getValue(
            'userstory16/general/page_color',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }
}