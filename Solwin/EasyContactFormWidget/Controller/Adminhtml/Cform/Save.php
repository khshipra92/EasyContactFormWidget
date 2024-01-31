<?php
/**
 * Solwin EasyContactFormWidget List Controller.
 *
 * @category Solwin
 * @package  Solwin_EasyContactFormWidget
 * @author   Solwin
 */
namespace Solwin\EasyContactFormWidget\Controller\Adminhtml\Cform;

use Solwin\EasyContactFormWidget\Model\Cform;
use Solwin\EasyContactFormWidget\Model\ResourceModel\Cform\CollectionFactory as CformFactory;
use Magento\Backend\App\Action;
use Magento\Backend\Model\Session;
use Magento\Framework\Serialize\Serializer\Json;
use Magento\Framework\Stdlib\DateTime\TimezoneInterface;

class Save extends \Magento\Backend\App\Action
{

    /**
     * @var Cform
     */
    protected $cformModel;

    /**
     * @var CformFactory
     */
    protected $cformFactory;

    /**
     * @var Session
     */
    protected $adminsession;

    /**
     * @var Json
     */
    protected $json;

    /**
     * @var TimezoneInterface
     */
    private $localeDate;
    /**
     * @param Action\Context    $context
     * @param Cform             $cformModel
     * @param CformFactory      $cformFactory
     * @param Session           $adminsession
     * @param Json              $json
     * @param TimezoneInterface $localeDate
     */
    public function __construct(
        Action\Context $context,
        Cform $cformModel,
        CformFactory $cformFactory,
        Session $adminsession,
        Json $json,
        TimezoneInterface $localeDate
    ) {
        parent::__construct($context);
        $this->cformModel = $cformModel;
        $this->cformFactory = $cformFactory;
        $this->adminsession = $adminsession;
        $this->json = $json;
        $this->localeDate = $localeDate;
    }

    /**
     * Save grid record action
     *
     * @return \Magento\Backend\Model\View\Result\Redirect
     */
    public function execute()
    {
        $data = $this->getRequest()->getPostValue();
        $resultRedirect = $this->resultRedirectFactory->create();

        if ($data) {
            $id = $this->getRequest()->getParam('id');

            $cformId = 0;
            if ($id) {
                $cformId = $id;
                $this->cformModel->load($id);
            }
      
            try {
                if (!$this->getRequest()->getParam('dob')) {
                    $data['dob'] = $this->localeDate->formatDate();
                }
                if ($cformId == 0) {
                    $cformId = $this->cformModel->getId();
                }

                $this->cformModel->setData($data);
                $this->cformModel->save();

                $this->messageManager->addSuccess(__('The data has been saved.'));
                $this->adminsession->setFormData(false);

                if ($this->getRequest()->getParam('back')) {
                    if ($this->getRequest()->getParam('back') == 'add') {
                        return $resultRedirect->setPath('*/*/addrow');
                    } else {
                        return $resultRedirect->setPath(
                            '*/*/edit',
                            [
                            'id' => $this->cformModel->getId(), '_current' => true,
                            ]
                        );
                    }
                }
                return $resultRedirect->setPath('*/*/');
            } catch (\Magento\Framework\Exception\LocalizedException $e) {
                $this->messageManager->addError($e->getMessage());
            } catch (\RuntimeException $e) {
                $this->messageManager->addError($e->getMessage());
            } catch (\Exception $e) {
                $this->messageManager->addException($e, __('Something went wrong while saving the data.'));
            }
            $this->_getSession()->setFormData($data);
            return $resultRedirect->setPath('*/*/edit', ['id' => $this->getRequest()->getParam('id')]);
        }

        return $resultRedirect->setPath('*/*/');
    }
}
