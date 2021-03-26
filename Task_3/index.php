<?php

class Product
{
    private $sku, $stock;

    /**
     * [__construct description]
     *
     * @param  [type]  $sku    [description]
     * @param  [type]  $stock  [description]
     */
    public function __construct($sku, $stock)
    {
        $this->sku = $sku;
        $this->stock = $stock;
    }

    /**
     * [getSKU description]
     *
     * @return  [type]  [description]
     */
    public function getSKU()
    {
        return $this->sku;
    }

    /**
     * [getStock description]
     *
     * @return  [type]  [description]
     */
    public function getStock()
    {
        return $this->stock;
    }
}

class ProductsDataset
{
    public $myInstance[];

    /**
     * [addProduct description]
     */
    public function addProduct($sku,$stock)
    {
        $this->myInstance[$sku] = new Product($sku,$stock);
    }

    /**
     * [setProductStockValue description]
     */
    public function setProductStockValue($sku, $stock)
    {
        if (filter_var($sku, FILTER_VALIDATE_INT) === false && filter_var($stock, FILTER_VALIDATE_INT) === false) {
            return "Your variable is not an integer";
        } 
        $this->addProduct($sku,$stock);
    }
}

$product = new ProductsDataset();
$product->setProductStockValue("001","100");
