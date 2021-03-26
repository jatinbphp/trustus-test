<?php

/**
 * Interface BasicProductInterface
 * @package Repository
 */
interface BasicProductInterface
{
    public function getProductName();

    public function setProductName($name);
}

class BasicProduct implements BasicProductInterface
{
    private $prodctName;

    /**
     * [getProductName description]
     *
     * @return  [type]  [description]
     */
    public function getProductName()
    {
        return $this->prodctName;
    }

    /**
     * [setProductName description]
     *
     * @return  [type]  [description]
     */
    public function setProductName($name)
    {
        $this->prodctName = $name;
    }
}

class Product extends BasicProduct
{
    /**
     * [getProductNameTitle description]
     *
     * @return  [type]  [description]
     */
    public function getProductNameTitle()
    {
        return "Title :- " . $this->getProductName();
    }
}

$product = new Product();
$product->setProductName("This first Test is working properly");
echo $product->getProductNameTitle();
