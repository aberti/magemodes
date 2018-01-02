<?php


namespace Aber\Test\Controller\Index;

use Aber\Test\Api\AberManagementInterface as AberManagementInterface;

class Index extends \Magento\Framework\App\Action\Action
{

    protected $resultPageFactory;

    /** @var AberManagementInterface $abermanagement */
    protected $abermanagement;

    /**
     * Constructor
     *
     * @param \Magento\Framework\App\Action\Context  $context
     * @param \Aber\Test\Model\AberManagement $abermanagement
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        AberManagementInterface $abermanagement,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        $this->resultPageFactory = $resultPageFactory;

        $this->abermanagement = $abermanagement;

        parent::__construct($context);
    }

    /**
     * Execute view action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {

        print_r($this->abermanagement->getAber("asdf"));
        exit();

        return $this->resultPageFactory->create();
    }
}
