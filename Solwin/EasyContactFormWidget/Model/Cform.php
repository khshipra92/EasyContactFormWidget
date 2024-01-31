<?php
/**
 * Solwin EasyContactFormWidget List Controller.
 *
 * @category Solwin
 * @package  Solwin_EasyContactFormWidget
 * @author   Solwin
 */
namespace Solwin\EasyContactFormWidget\Model;

use Solwin\EasyContactFormWidget\Api\Data\CformInterface;

class Cform extends \Magento\Framework\Model\AbstractModel implements CformInterface
{
    /**
     * CMS page cache tag.
     */
    public const CACHE_TAG = 'solwin_form_data';

    /**
     * @var string
     */
    protected $_cacheTag = 'solwin_form_data';

    /**
     * Prefix of model events names.
     *
     * @var string
     */
    protected $_eventPrefix = 'solwin_form_data';

    /**
     * Initialize resource model.
     */
    protected function _construct()
    {
        $this->_init(\Solwin\EasyContactFormWidget\Model\ResourceModel\Cform::class);
    }
    /**
     * Get Id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->getData(self::ID);
    }

    /**
     * Set Id.
     *
     * @param string $id
     *
     * @return string
     */
    public function setId($id)
    {
        return $this->setData(self::ID, $id);
    }

    /**
     * Get Name.
     *
     * @return varchar
     */
    public function getName()
    {
        return $this->getData(self::NAME);
    }

    /**
     * Set Name.
     *
     * @param string $name
     *
     * @return string
     */
    public function setName($name)
    {
        return $this->setData(self::NAME, $name);
    }

    /**
     * Get Email.
     *
     * @return varchar
     */
    public function getEmail()
    {
        return $this->getData(self::EMAIL);
    }

    /**
     * Set Email.
     *
     * @param string $email
     *
     * @return string
     */
    public function setEmail($email)
    {
        return $this->setData(self::EMAIL, $email);
    }
    /**
     * Get Gender.
     *
     * @return varchar
     */
    public function getGender()
    {
        return $this->getData(self::GENDER);
    }

    /**
     * Set Gender.
     *
     * @param string $gender
     *
     * @return string
     */
    public function setGender($gender)
    {
        return $this->setData(self::GENDER, $gender);
    }

    /**
     * Get Dob.
     *
     * @return varchar
     */
    public function getDob()
    {
        return $this->getData(self::DOB);
    }

    /**
     * Set Dob.
     *
     * @param string $dob
     *
     * @return string
     */
    public function setDob($dob)
    {
        return $this->setData(self::DOB, $dob);
    }

    /**
     * Get Query
     *
     * @return varchar
     */
    public function getQuery()
    {
        return $this->getData(self::QUERY);
    }

    /**
     * Set Query.
     *
     * @param string $query
     *
     * @return string
     */
    public function setQuery($query)
    {
        return $this->setData(self::QUERY, $query);
    }

    /**
     * Get Message
     *
     * @return varchar
     */
    public function getMessage()
    {
            return $this->getData(self::MESSAGE);
    }

    /**
     * Set Message.
     *
     * @param string $message
     *
     * @return string
     */
    public function setMessage($message)
    {
        return $this->setData(self::MESSAGE, $message);
    }
}
