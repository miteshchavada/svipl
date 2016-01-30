<?php

namespace Acme\HomeBundle\Entity;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Type;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Cart
 */
class Cart
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $productId;

    /**
     * @var integer
     */
    private $categoryId;

    /**
     * @var string
     */
    private $productPrice;

    /**
     * @var string
     */
    private $quantity;

    /**
     * @var string
     */
    private $custName;

    /**
     * @var string
     */
    private $custAddress;

    /**
     * @var integer
     */
    private $custPhone;

    /**
     * @var string
     */
    private $custEmail;

    /**
     * @var string
     */
    private $custDescription;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    public function __construct() {
        $this->setcreatedAt(new \DateTime());
        $this->setupdatedAt(new \DateTime());
    }
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set productId
     *
     * @param integer $productId
     * @return Cart
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Get productId
     *
     * @return integer 
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set categoryId
     *
     * @param integer $categoryId
     * @return Cart
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Get categoryId
     *
     * @return integer 
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Set productPrice
     *
     * @param string $productPrice
     * @return Cart
     */
    public function setProductPrice($productPrice)
    {
        $this->productPrice = $productPrice;

        return $this;
    }

    /**
     * Get productPrice
     *
     * @return string 
     */
    public function getProductPrice()
    {
        return $this->productPrice;
    }

    /**
     * Set quantity
     *
     * @param string $quantity
     * @return Cart
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return string 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set custName
     *
     * @param string $custName
     * @return Cart
     */
    public function setCustName($custName)
    {
        $this->custName = $custName;

        return $this;
    }

    /**
     * Get custName
     *
     * @return string 
     */
    public function getCustName()
    {
        return $this->custName;
    }

    /**
     * Set custAddress
     *
     * @param string $custAddress
     * @return Cart
     */
    public function setCustAddress($custAddress)
    {
        $this->custAddress = $custAddress;

        return $this;
    }

    /**
     * Get custAddress
     *
     * @return string 
     */
    public function getCustAddress()
    {
        return $this->custAddress;
    }

    /**
     * Set custPhone
     *
     * @param integer $custPhone
     * @return Cart
     */
    public function setCustPhone($custPhone)
    {
        $this->custPhone = $custPhone;

        return $this;
    }

    /**
     * Get custPhone
     *
     * @return integer 
     */
    public function getCustPhone()
    {
        return $this->custPhone;
    }

    /**
     * Set custEmail
     *
     * @param string $custEmail
     * @return Cart
     */
    public function setCustEmail($custEmail)
    {
        $this->custEmail = $custEmail;

        return $this;
    }

    /**
     * Get custEmail
     *
     * @return string 
     */
    public function getCustEmail()
    {
        return $this->custEmail;
    }

    /**
     * Set custDescription
     *
     * @param string $custDescription
     * @return Cart
     */
    public function setCustDescription($custDescription)
    {
        $this->custDescription = $custDescription;

        return $this;
    }

    /**
     * Get custDescription
     *
     * @return string 
     */
    public function getCustDescription()
    {
        return $this->custDescription;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Cart
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Cart
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
    
    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
//        $metadata->addPropertyConstraint('quantity', new NotBlank(array('message'=>'please enter quantity')));
//        $metadata->addPropertyConstraint('quantity', new Assert\Range(array('min'=>1,'max'=>10)));
//        $metadata->addPropertyConstraint('custName', new NotBlank(array('message'=>'please enter your name')));
//        $metadata->addPropertyConstraint('custAddress', new NotBlank(array('message'=>'please enter your address')));
//        $metadata->addPropertyConstraint('custPhone', new NotBlank(array('message'=>'please enter phone')));
//        $metadata->addPropertyConstraint('custPhone', new Assert\Range(array('min'=>1,'max'=>10)));
//        $metadata->addPropertyConstraint('custEmail', new NotBlank(array('message'=>'please enter email')));
//        $metadata->addPropertyConstraint('custEmail', new Assert\Email());
//        $metadata->addPropertyConstraint('custDescription', new NotBlank(array('message'=>'please enter description')));
    }
}
