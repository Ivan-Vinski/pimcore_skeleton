<?php


namespace AppBundle\Model\DataObject;


use Symfony\Component\Security\Core\User\UserInterface;

class Customer extends \Pimcore\Model\DataObject\Customer
{
    private $roles = [];

    /**
     * @return array
     */
    public function getRoles() : array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';
        return array_unique($roles);
    }

    /**
     * @param $value
     */
    public function setRoles($value) : void
    {
        $this->roles[] = $value;
    }
}
