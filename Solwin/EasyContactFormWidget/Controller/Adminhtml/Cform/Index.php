<?php
/**
 * Solwin EasyContactFormWidget List Controller.
 *
 * @category Solwin
 * @package  Solwin_EasyContactFormWidget
 * @author   Solwin
 */
namespace Solwin\EasyContactFormWidget\Controller\Adminhtml\Cform;

class Index extends \Magento\Backend\App\Action
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $_resultPageFactory;

    /**
     * @param \Magento\Backend\App\Action\Context        $context
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->_resultPageFactory = $resultPageFactory;
    }

    /**
     * Grid List page.
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        /**
*
         *
 * @var \Magento\Backend\Model\View\Result\Page $resultPage
*/
        $resultPage = $this->_resultPageFactory->create();
        $resultPage->setActiveMenu('Solwin_EasyContactFormWidget::cform');
        $resultPage->getConfig()->getTitle()->prepend(__('Easy ProductLabel List'));

        return $resultPage;
    }

    /**
     * Check Grid List Permission.
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Solwin_EasyContactFormWidget::cform');
    }
}
