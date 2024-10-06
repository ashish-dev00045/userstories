<?php

declare(strict_types= 1);

namespace Ashish\UserStory1\Controller\Index;

use Ashish\UserStory1\Test;
use Magento\Framework\App\Action\Action;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\Result\JsonFactory;

class Index extends Action implements HttpGetActionInterface
{
/** 
     * @var Test 
     */
    protected $test;

    /**
     * @param Context $context
     * @param Test $test
     */
    
    public function __construct(Context $context, Test $test,JsonFactory $resultJsonFactory)
    {
        
        $this->test = $test;
        parent::__construct($context);
    }

    public function execute()
    {
        $this->test->displayParams();
    }
}
