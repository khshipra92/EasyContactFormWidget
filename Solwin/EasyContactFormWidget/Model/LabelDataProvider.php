<?php
/**
 * Solwin EasyContactFormWidget List Controller.
 *
 * @category Solwin
 * @package  Solwin_EasyContactFormWidget
 * @author   Solwin
 */
namespace Solwin\EasyContactFormWidget\Model;

use Solwin\EasyContactFormWidget\Model\ResourceModel\Cform\CollectionFactory;
use Magento\Store\Model\StoreManagerInterface;

class LabelDataProvider extends \Magento\Ui\DataProvider\AbstractDataProvider
{

    /**
     * @var $storeManager
     */
    private $storeManager;

    private $loadedData;

    /**
     *
     * @param string                $name
     * @param string                $primaryFieldName
     * @param string                $requestFieldName
     * @param CollectionFactory     $labelCollectionFactory
     * @param StoreManagerInterface $storeManager
     * @param array                 $meta
     * @param array                 $data
     */
    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        CollectionFactory $labelCollectionFactory,
        StoreManagerInterface $storeManager,
        array $meta = [],
        array $data = []
    ) {
        $this->collection = $labelCollectionFactory->create();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
        $this->storeManager = $storeManager;
    }

    /**
     * Get all data of collection
     *
     * @return array
     */
    public function getData()
    {
        if (isset($this->loadedData)) {
            return $this->loadedData;
        }

        $items = $this->collection->getItems();
        $this->loadedData = [];
        foreach ($items as $model) {
            $this->loadedData[$model->getId()] = $model->getData();
            $m = [];
            if ($model->getId()) {
                $m['id'] = $model['id'];
                $this->loadedData[$model->getId()] = $m;
            }
            if ($model->getName()) {
                $m['name'] = $model['name'];
                $this->loadedData[$model->getId()] = $m;
            }
            if ($model->getEmail()) {
                $m['email'] = $model['email'];
                $this->loadedData[$model->getId()] = $m;
            }
            if ($model->getGender()) {
                $m['gender'] = $model['gender'];
                $this->loadedData[$model->getId()] = $m;
            }
            if ($model->getDob()) {
                $m['dob'] = $model['dob'];
                $this->loadedData[$model->getId()] = $m;
            }
            if ($model->getQuery()) {
                $m['query'] = $model['query'];
                $this->loadedData[$model->getId()] = $m;
            }
            if ($model->getMessage()) {
                $m['message'] = $model['message'];
                $this->loadedData[$model->getId()] = $m;
            }
        }

        return $this->loadedData;
    }
}
