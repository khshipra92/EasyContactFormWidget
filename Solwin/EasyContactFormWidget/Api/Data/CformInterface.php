<?php
/**
 * Solwin EasyContactFormWidget List Controller.
 *
 * @category Solwin
 * @package  Solwin_EasyContactFormWidget
 * @author   Solwin
 */
namespace Solwin\EasyContactFormWidget\Api\Data;

interface CformInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case.
     */
    public const ID = 'id';
    public const NAME = 'name';
    public const EMAIL = 'email';
    public const GENDER = 'gender';
    public const DOB = 'dob';
    public const QUERY = 'query';
    public const MESSAGE = 'message';

    /**
     * Get ID
     *
     * @return int
     */
    public function getId();

    /**
     * Set ID
     *
     * @param string $id
     */
    public function setId($id);

    /**
     * Get Title
     *
     * @return varchar
     */
    public function getName();

    /**
     * Set Name
     *
     * @param string $name
     */
    public function setName($name);

    /**
     * Get Email
     *
     * @return varchar
     */
    public function getEmail();

    /**
     * Set Email
     *
     * @param string $email
     */
    public function setEmail($email);

    /**
     * Get Gender
     *
     * @return varchar
     */
    public function getGender();

    /**
     * Set Gender
     *
     * @param string $gender
     */
    public function setGender($gender);

    /**
     * Get Dob
     *
     * @return varchar
     */
    public function getDob();

    /**
     * Set DOB
     *
     * @param string $dob
     */
    public function setDob($dob);

    /**
     * Get Query
     *
     * @return varchar
     */
    public function getQuery();

    /**
     * Set Query
     *
     * @param string $query
     */
    public function setQuery($query);

    /**
     * Get Message
     *
     * @return varchar
     */
    public function getMessage();

    /**
     * Set Message
     *
     * @param string $message
     */
    public function setMessage($message);
}
