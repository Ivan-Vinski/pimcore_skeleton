<?php


namespace AppBundle\Interpreter;


use Pimcore\Bundle\EcommerceFrameworkBundle\IndexService\Interpreter\InterpreterInterface;
use Pimcore\Model\DataObject\Manufacturer;

class ManufacturerGroup implements InterpreterInterface
{
    /**
     * @param $value
     * @param null $config
     * @return string
     */
    public function interpret($value, $config = null) : string
    {
        if ($value instanceof Manufacturer) {
            $manufacturerGroup = $value->getGroup();
            return $manufacturerGroup->getName();
        }

        return '';
    }

}
