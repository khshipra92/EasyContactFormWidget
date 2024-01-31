<?php
/**
 * Solwin EasyContactFormWidget List Controller.
 *
 * @category Solwin
 * @package  Solwin_EasyContactFormWidget
 * @author   Solwin
 */
namespace Solwin\EasyContactFormWidget\Controller\Adminhtml\Cform;

use Magento\Framework\Controller\ResultFactory;

class AddRow extends \Magento\Backend\App\Action
{
    /**
     * @var \Magento\Framework\Registry
     */
    private $coreRegistry;

    /**
     * @var \Solwin\EasyContactFormWidget\Model\CformFactory
     */
    private $cformFactory;

    /**
     * @param \Magento\Backend\App\Action\Context              $context
     * @param \Magento\Framework\Registry                      $coreRegistry
     * @param \Solwin\EasyContactFormWidget\Model\CformFactory $cformFactory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\Registry $coreRegistry,
        \Solwin\EasyContactFormWidget\Model\CformFactory $cformFactory
    ) {
        parent::__construct($context);
        $this->coreRegistry = $coreRegistry;
        $this->cformFactory = $cformFactory;
    }

    /**
     * Mapped Grid List page.
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        $rowId = (int) $this->getRequest()->getParam('id');
        $rowData = $this->cformFactory->create();
        /**
*
         *
 * @var \Magento\Backend\Model\View\Result\Page $resultPage
*/
        if ($rowId) {
            $rowData = $rowData->load($rowId);
           
            $rowTitle = $rowData->getName();
            if (!$rowData->getId()) {
                $this->messageManager->addError(__('row data no longer exist.'));
                $this->_redirect('solwin/cform/rowdata');
                return;
            }
        }

        $this->coreRegistry->register('row_data', $rowData);
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $title = $rowId ? __('Edit') : __('Add New');
        $resultPage->getConfig()->getTitle()->prepend($title);
        return $resultPage;
    }
    
    /**
     * Authorization level
     *
     * @see _isAllowed()
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Solwin_EasyContactFormWidget::add_row');
    }
}
