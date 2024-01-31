<?php
/**
 * Solwin EasyContactFormWidget List Controller.
 *
 * @category Solwin
 * @package  Solwin_EasyContactFormWidget
 * @author   Solwin
 */
namespace Solwin\EasyContactFormWidget\Controller\Adminhtml\Cform;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;

class Delete extends Action
{
    /**
     * @var \Solwin\EasyContactFormWidget\Model\CformFactory
     */
    protected $cformFactory;
    /**
     * @param Context                                          $context
     * @param \Solwin\EasyContactFormWidget\Model\CformFactory $cformFactory
     */
    public function __construct(
        Context $context,
        \Solwin\EasyContactFormWidget\Model\CformFactory $cformFactory
    ) {
        parent::__construct($context);
        $this->cformFactory = $cformFactory;
    }
    
    /**
     * Authorization level
     *
     * @see _isAllowed()
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Solwin_EasyContactFormWidget::cform_delete');
    }
    /**
     * Delete action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $id = $this->getRequest()->getParam('id');
        /**
*
         *
 * @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect
*/
        $resultRedirect = $this->resultRedirectFactory->create();
        if ($id) {
            try {
                $model = $this->cformFactory->create();
                $model->load($id);
                $model->delete();
                $this->messageManager->addSuccess(__('Entry deleted successfully.'));
                return $resultRedirect->setPath('*/*/');
            } catch (\Exception $e) {
                $this->messageManager->addError($e->getMessage());
                return $resultRedirect->setPath('*/*/edit', ['id' => $id]);
            }
        }
        $this->messageManager->addError(__('Entry does not exist.'));
        return $resultRedirect->setPath('*/*/');
    }
}
