<?php
/**
 * Solwin EasyContactFormWidget List Controller.
 *
 * @category Solwin
 * @package  Solwin_EasyContactFormWidget
 * @author   Solwin
 */
namespace Solwin\EasyContactFormWidget\Model\Query;

class Options extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{
    /**
     * Get all options
     *
     * @return array
     */
    public function getAllOptions()
    {
        
        $this->_options = [
            ['label' => __('--Select Your Issue--'),'value'=> 4 ],
            ['label' => __('Request Invoice for order'),'value'=> 0 ],
        ['label' => __('Request order status'),'value'=> 1 ],
        ['label' => __('Havent received cashback yet'),'value'=> 2 ],
        ['label' => __('Other '),'value'=> 3 ],
            
        ];

        return $this->_options;
    }
}
