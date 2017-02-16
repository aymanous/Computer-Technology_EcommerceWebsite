<?php

// src/Acme/StoreBundle/Document/Product.php
namespace Acme\StoreBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;


/**
 * @MongoDB\Document
 */
class Product
{
   /**
     * @MongoDB\Id
     */
    public $id;

    /**
     * @MongoDB\Field(type="string")
     */
    public $name;

    /**
     * @MongoDB\Field(type="string")
     */
    public $category;

    /**
     * @MongoDB\Field(type="string")
     */
    public $brand;

    /**
     * @MongoDB\Field(type="string")
     */
    public $productMaterial;

    /**
     * @MongoDB\Field(type="string")
     */
    public $imageUrl;
    /**
     * @MongoDB\Field(type="string")
     */
    public $delivery;
    /**
     * @MongoDB\Field(type="string")
     */
    public $details;

    /**
     * @MongoDB\Field(type="float")
     */
    public $priceFrns1;


    /**
     * @MongoDB\Field(type="float")
     */
    public $priceNewFrns1;


    /**
     * @MongoDB\Field(type="float")
     */
    public $priceFrns2;


    /**
     * @MongoDB\Field(type="float")
     */
    public $priceNewFrns2;

    /**
     * @MongoDB\Field(type="float")
     */
    public $priceFrns3;


    /**
     * @MongoDB\Field(type="float")
     */
    public $priceNewFrns3;

    /**
     * @MongoDB\Field(type="float")
     */
    public $priceFrns4;


    /**
     * @MongoDB\Field(type="float")
     */
    public $priceNewFrns4;

    
    /**
     * @MongoDB\Field(type="float")
     */
    public $minPrice;


    
    /**
     * @MongoDB\Field(type="float")
     */
    public $minNewPrice;


    
    /**
     * @MongoDB\Field(type="float")
     */
    public $priceVariation;

    

    /**
     * Set name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set category
     *
     * @param string $category
     * @return $this
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Get category
     *
     * @return string $category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set brand
     *
     * @param string $brand
     * @return $this
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
        return $this;
    }

    /**
     * Get brand
     *
     * @return string $brand
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set productMaterial
     *
     * @param string $productMaterial
     * @return $this
     */
    public function setProductMaterial($productMaterial)
    {
        $this->productMaterial = $productMaterial;
        return $this;
    }

    /**
     * Get productMaterial
     *
     * @return string $productMaterial
     */
    public function getProductMaterial()
    {
        return $this->productMaterial;
    }

    /**
     * Set imageUrl
     *
     * @param string $imageUrl
     * @return $this
     */
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;
        return $this;
    }

    /**
     * Get imageUrl
     *
     * @return string $imageUrl
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * Set delivery
     *
     * @param string $delivery
     * @return $this
     */
    public function setDelivery($delivery)
    {
        $this->delivery = $delivery;
        return $this;
    }

    /**
     * Get delivery
     *
     * @return string $delivery
     */
    public function getDelivery()
    {
        return $this->delivery;
    }

    /**
     * Set details
     *
     * @param string $details
     * @return $this
     */
    public function setDetails($details)
    {
        $this->details = $details;
        return $this;
    }

    /**
     * Get details
     *
     * @return string $details
     */
    public function getDetails()
    {
        return $this->details;
    }



    /**
     * Set priceFrns1
     *
     * @param float $priceFrns1
     * @return $this
     */
    public function setPriceFrns1($priceFrns1)
    {
        $this->priceFrns1 = $priceFrns1;
        return $this;
    }

    /**
     * Get priceFrns1
     *
     * @return float $priceFrns1
     */
    public function getPriceFrns1()
    {
        return $this->priceFrns1;
    }

    /**
     * Set priceNewFrns1
     *
     * @param float $priceNewFrns1
     * @return $this
     */
    public function setPriceNewFrns1($priceNewFrns1)
    {
        $this->priceNewFrns1 = $priceNewFrns1;
        return $this;
    }

    /**
     * Get priceNewFrns1
     *
     * @return float $priceNewFrns1
     */
    public function getPriceNewFrns1()
    {
        return $this->priceNewFrns1;
    }

    /**
     * Set priceFrns2
     *
     * @param float $priceFrns2
     * @return $this
     */
    public function setPriceFrns2($priceFrns2)
    {
        $this->priceFrns2 = $priceFrns2;
        return $this;
    }

    /**
     * Get priceFrns2
     *
     * @return float $priceFrns2
     */
    public function getPriceFrns2()
    {
        return $this->priceFrns2;
    }

    /**
     * Set priceNewFrns2
     *
     * @param float $priceNewFrns2
     * @return $this
     */
    public function setPriceNewFrns2($priceNewFrns2)
    {
        $this->priceNewFrns2 = $priceNewFrns2;
        return $this;
    }

    /**
     * Get priceNewFrns2
     *
     * @return float $priceNewFrns2
     */
    public function getPriceNewFrns2()
    {
        return $this->priceNewFrns2;
    }

    /**
     * Set priceFrns3
     *
     * @param float $priceFrns3
     * @return $this
     */
    public function setPriceFrns3($priceFrns3)
    {
        $this->priceFrns3 = $priceFrns3;
        return $this;
    }

    /**
     * Get priceFrns3
     *
     * @return float $priceFrns3
     */
    public function getPriceFrns3()
    {
        return $this->priceFrns3;
    }

    /**
     * Set priceNewFrns3
     *
     * @param float $priceNewFrns3
     * @return $this
     */
    public function setPriceNewFrns3($priceNewFrns3)
    {
        $this->priceNewFrns3 = $priceNewFrns3;
        return $this;
    }

    /**
     * Get priceNewFrns3
     *
     * @return float $priceNewFrns3
     */
    public function getPriceNewFrns3()
    {
        return $this->priceNewFrns3;
    }

    /**
     * Set priceFrns4
     *
     * @param float $priceFrns4
     * @return $this
     */
    public function setPriceFrns4($priceFrns4)
    {
        $this->priceFrns4 = $priceFrns4;
        return $this;
    }

    /**
     * Get priceFrns4
     *
     * @return float $priceFrns4
     */
    public function getPriceFrns4()
    {
        return $this->priceFrns4;
    }

    /**
     * Set priceNewFrns4
     *
     * @param float $priceNewFrns4
     * @return $this
     */
    public function setPriceNewFrns4($priceNewFrns4)
    {
        $this->priceNewFrns4 = $priceNewFrns4;
        return $this;
    }

    /**
     * Get priceNewFrns4
     *
     * @return float $priceNewFrns4
     */
    public function getPriceNewFrns4()
    {
        return $this->priceNewFrns4;
    }

    /**
     * Set minPrice
     *
     * @param float $minPrice
     * @return $this
     */
    public function setMinPrice($minPrice)
    {
        $this->minPrice = $minPrice;
        return $this;
    }

    /**
     * Get minPrice
     *
     * @return float $minPrice
     */
    public function getMinPrice()
    {
        return $this->minPrice;
    }

    /**
     * Set minNewPrice
     *
     * @param float $minNewPrice
     * @return $this
     */
    public function setMinNewPrice($minNewPrice)
    {
        $this->minNewPrice = $minNewPrice;
        return $this;
    }

    /**
     * Get minNewPrice
     *
     * @return float $minNewPrice
     */
    public function getMinNewPrice()
    {
        return $this->minNewPrice;
    }

        /**
     * Set PriceVariation
     *
     * @param float $priceVariation
     * @return $this
     */
    public function setPriceVariation($priceVariation)
    {
        $this->priceVariation = $priceVariation;
        return $this;
    }

    /**
     * Get priceVariation
     *
     * @return float $priceVariation
     */
    public function getPriceVariation()
    {
        return $this->$priceVariation;
    }

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }
}
