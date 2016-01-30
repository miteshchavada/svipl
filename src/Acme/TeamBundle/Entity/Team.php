<?php

namespace Acme\TeamBundle\Entity;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\Type;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\ORM\Mapping as ORM;

/**
 * Team
 */
class Team
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    private $image;
    /**
     * @var string
     */
    private $designation;

    /**
     * @var string
     */
    private $skills;

    /**
     * @var string
     */
    private $facebook;

    /**
     * @var string
     */
    private $twitter;

    /**
     * @var string
     */
    private $gmail;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    public function __construct() {
        $this->setCreatedAt(new \DateTime());
        $this->setUpdatedAt(new \DateTime());
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
     * Set name
     *
     * @param string $name
     * @return Team
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Set name
     *
     * @param string $name
     * @return Team
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }
    /**
     * Set designation
     *
     * @param string $designation
     * @return Team
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;

        return $this;
    }

    /**
     * Get designation
     *
     * @return string 
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Set skills
     *
     * @param string $skills
     * @return Team
     */
    public function setSkills($skills)
    {
        $this->skills = $skills;

        return $this;
    }

    /**
     * Get skills
     *
     * @return string 
     */
    public function getSkills()
    {
        return $this->skills;
    }

    /**
     * Set facebook
     *
     * @param string $facebook
     * @return Team
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * Get facebook
     *
     * @return string 
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * Set twitter
     *
     * @param string $twitter
     * @return Team
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;

        return $this;
    }

    /**
     * Get twitter
     *
     * @return string 
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * Set gmail
     *
     * @param string $gmail
     * @return Team
     */
    public function setGmail($gmail)
    {
        $this->gmail = $gmail;

        return $this;
    }

    /**
     * Get gmail
     *
     * @return string 
     */
    public function getGmail()
    {
        return $this->gmail;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Team
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Team
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
     * @return Team
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
        $metadata->addPropertyConstraint('name', new NotBlank(array('message'=>'please enter your name')));
        $metadata->addPropertyConstraint('designation', new NotBlank(array('message'=>'please enter your designation')));
        $metadata->addPropertyConstraint('skills', new NotBlank(array('message'=>'please enter your skills')));
        $metadata->addPropertyConstraint('image', new NotBlank(array('message'=>'please enter your image')));
        $metadata->addPropertyConstraint('facebook', new NotBlank(array('message'=>'please enter your facebook')));
        $metadata->addPropertyConstraint('facebook', new Assert\Url());
        $metadata->addPropertyConstraint('twitter', new NotBlank(array('message'=>'please enter your twitter')));
        $metadata->addPropertyConstraint('twitter', new Assert\Url());
        $metadata->addPropertyConstraint('gmail', new NotBlank(array('message'=>'please enter your gmail')));
        $metadata->addPropertyConstraint('gmail', new Assert\Url());
        $metadata->addPropertyConstraint('description', new NotBlank(array('message'=>'please enter your description')));
    }
}
