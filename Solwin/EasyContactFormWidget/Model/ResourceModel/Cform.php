<?php
/**
 * Solwin EasyContactFormWidget List Controller.
 *
 * @category Solwin
 * @package  Solwin_EasyContactFormWidget
 * @author   Solwin
 */
namespace Solwin\EasyContactFormWidget\Model\ResourceModel;

/**
 * Form mysql resource.
 */
class Cform extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * @var string
     */
    protected $_idFieldName = 'id';
     /**
      * @var \Magento\Framework\Stdlib\DateTime\DateTime
      */
    protected $_date;

    /**
     * Construct.
     *
     * @param \Magento\Framework\Model\ResourceModel\Db\Context $context
     * @param \Magento\Framework\Stdlib\DateTime\DateTime       $date
     * @param string|null                                       $resourcePrefix
     */
    public function __construct(
        \Magento\Framework\Model\ResourceModel\Db\Context $context,
        \Magento\Framework\Stdlib\DateTime\DateTime $date,
        $resourcePrefix = null
    ) {
        parent::__construct($context, $resourcePrefix);
        $this->_date = $date;
    }

    /**
     * Initialize resource model.
     */
    protected function _construct()
    {
        $this->_init('solwin_form_data', 'id');
    }
}
