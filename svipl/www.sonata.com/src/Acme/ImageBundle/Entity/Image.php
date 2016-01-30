<?php

namespace Acme\ImageBundle\Entity;

use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\Type;
use Symfony\Component\HttpFoundation\File\UploadedFile;

use Doctrine\ORM\Mapping as ORM;

/**
 * Image
 */
class Image
{
    /**
     * @var integer
     */
    private $id;

    private $title;
    
    private $link;
    
    private $description;
    /**
     * @var string
     */
    private $image;

    private $backgroundimage;
    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    
    public $path;

    public function getAbsolutePath()
    {
        return null === $this->path
            ? null
            : $this->getUploadRootDir().'/'.$this->path;
    }

    public function getWebPath()
    {
        return null === $this->path
            ? null
            : $this->getUploadDir().'/'.$this->path;
    }

    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'uploads/documents';
    }
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function __construct() {
        $this->setCreatedAt(new \DateTime());
        $this->setUpdatedAt(new \DateTime());
    }
    
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * Set image
     *
     * @param string $image
     * @return Image
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }
    
    /**
     * Set image
     *
     * @param string $image
     * @return Image
     */
    public function setLink($link)
    {
        $this->link = $link;
    
        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getLink()
    {
        return $this->link;
    }
    /**
     * Set image
     *
     * @param string $image
     * @return Image
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set image
     *
     * @param string $image
     * @return Image
     */
    public function setImage($image)
    {
        $this->image = $image;
    
        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }
    /**
     * Set image
     *
     * @param string $image
     * @return Image
     */
    public function setBackgroundimage($backgroundimage)
    {
        $this->backgroundimage = $backgroundimage;
    
        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getBackgroundimage()
    {
        return $this->backgroundimage;
    }
    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Image
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
     * @return Image
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
        $metadata->addPropertyConstraint('title', new NotBlank(array('message'=>'please enter your title')));
        $metadata->addPropertyConstraint('link', new NotBlank(array('message'=>'please enter your link')));
        $metadata->addPropertyConstraint('link', new Assert\Url());
        $metadata->addPropertyConstraint('description', new NotBlank(array('message'=>'please enter your description')));
        $metadata->addPropertyConstraint('image', new NotBlank(array('message'=>'please enter your image')));
        $metadata->addPropertyConstraint('backgroundimage', new NotBlank(array('message'=>'please enter your background image')));
    }
    /**
     * @var \Acme\StoreBundle\Entity\Product
     */
    private $product;


    /**
     * Set product
     *
     * @param \Acme\StoreBundle\Entity\Product $product
     * @return Image
     */
    public function setProduct(\Acme\StoreBundle\Entity\Product $product = null)
    {
        $this->product = $product;
    
        return $this;
    }

    /**
     * Get product
     *
     * @return \Acme\StoreBundle\Entity\Product 
     */
    public function getProduct()
    {
        return $this->product;
    }
}
