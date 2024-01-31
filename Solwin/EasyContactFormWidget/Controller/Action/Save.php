<?php
namespace Solwin\EasyContactFormWidget\Controller\Action;

use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;

class Save extends \Magento\Framework\App\Action\Action
{
    /**
     * @var \Solwin\EasyContactFormWidget\Model\CformFactory
     */
    protected $cformFactory;

    /**
     * @var \Magento\Framework\App\RequestInterface
     */
    protected $request;

    /**
     * Dependency Initilization
     *
     * @param Context                                          $context
     * @param \Solwin\EasyContactFormWidget\Model\CformFactory $cformFactory
     * @param \Magento\Framework\App\RequestInterface          $request
     */
    public function __construct(
        Context $context,
        \Solwin\EasyContactFormWidget\Model\CformFactory $cformFactory,
        \Magento\Framework\App\RequestInterface $request
    ) {
        $this->cformFactory = $cformFactory;
        $this->request = $request;
        parent::__construct($context);
    }

    /**
     * Provides content
     *
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        try {
            $data = $this->getRequest()->getPost();
            if ($data) {
                $model = $this->cformFactory->create();
                $model->setName($data['name']);
                $model->setGender($data['gender']);
                $model->setDob($data['dob']);
                $model->setQuery($data['query']);
                $model->setMessage($data['message']);
                $model->save();
                $this->messageManager->addSuccessMessage(__('Thanks For Connecting With Us !'));
            }
        } catch (\Exception $e) {
                $this->messageManager->addErrorMessage($e, __("We can\'t submit your request, Please try again."));
        }
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        $resultRedirect->setUrl($this->_redirect->getRefererUrl());
        return $resultRedirect;
    }
}
