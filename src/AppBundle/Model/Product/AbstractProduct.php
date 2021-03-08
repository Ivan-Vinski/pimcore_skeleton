<?php


namespace AppBundle\Model\Product;


class AbstractProduct extends \Pimcore\Bundle\EcommerceFrameworkBundle\Model\AbstractProduct
{
    public function getCategories()
    {
        return [];
    }

    public function isActive($inProductList = false)
    {
        return $this->isPublished();
    }

    public function getPriceSystemName()
    {
        return 'default';
    }

}
