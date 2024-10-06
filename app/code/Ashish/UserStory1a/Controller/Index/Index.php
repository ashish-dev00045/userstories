<?php 
namespace Ashish\UserStory1a\Controller\Index;

use Ashish\UserStory1\Test;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\JsonFactory;
use Ashish\UserStory1\Api\Data\CustomCategoryInterface;

class Index extends Action{
    /** 
     * @var Test 
     */
    protected $test;

    protected $jsonFactory;

    /**
     * @param Context $context
     * @param Test $test
     */
    public function __construct(Context $context, Test $test,JsonFactory $jsonFactory ) {
        $this->test = $test;
        $this->jsonFactory = $jsonFactory;
        return parent::__construct($context, $test);
    }

    public function execute(){
        $this->test->displayParams();
        if(!($this->test->getCustomCategory() instanceof \Magento\Catalog\Api\Data\CategoryInterface)){
            throw new \Magento\Framework\Exception\LocalizedException(
                __('The injected CategoryInterface is not an instance of CustomCategoryInterface.')
            );
        }
        else{
            echo "The injected CategoryInterface is an instance of CustomCategoryInterface.";
        }
        return $this->jsonFactory->create();
    }
}
