<?php
/**
 * Solwin EasyContactFormWidget List Controller.
 *
 * @category Solwin
 * @package  Solwin_EasyContactFormWidget
 * @author   Solwin
 */
namespace Solwin\EasyContactFormWidget\Model\Query;

use Magento\Framework\Option\ArrayInterface;

class Gender implements ArrayInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        $options = [
            0 => [
                'label' => 'Male',
                'value' => 'male'
            ],
            1 => [
                'label' => 'Female',
                'value' => 'female'
            ],
            2 => [
                'label' => 'Other',
                'value' => 'Other'
            ],
        ];

        return $options;
    }
}
