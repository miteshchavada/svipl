<?php

namespace Acme\InfoBundle\Entity;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Type;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Work
 */
class Work
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $image;

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

    protected $currentpage;
    //limit items on one page
    protected $limit;
    //total number of pages that will be generated
    protected $numpages;
    //total items loaded from database
    protected $itemscount;
    //starting item number to be shown on page
    protected $offset;
    /**
     * Get id
     *
     * @return integer 
     */
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
     * Set title
     *
     * @param string $title
     * @return Work
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
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
     * @return Work
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
     * Set description
     *
     * @param string $description
     * @return Work
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
     * @return Work
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
     * @return Work
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
        $metadata->addPropertyConstraint('description', new NotBlank(array('message'=>'please enter your description')));
        $metadata->addPropertyConstraint('image', new NotBlank(array('message'=> 'please enter your image')));
    }
    private function getParamsFromRequest() {
    //If current page number is set in URL
    if (isset($_GET['page'])) {
    $this->currentpage = $_GET['page'];
    } else {
    //else set default page to render
    $this->currentpage = 1;
    }
    //If limit is defined in URL
    if (isset($_GET['limit'])) {
    $this->limit = $_GET['limit'];
    } else {   //else set default limit to 20
    $this->limit = 10;
    }
    //If currentpage is set to null or is set to 0 or less
    //set it to default (1)
    if (($this->currentpage == null) || ($this->currentpage < 1)) {
    $this->currentpage = 1;
    }
    //if limit is set to null set it to default (10)
    if (($this->limit == null)) {
    $this->limit = 10;
    //if limit is any number less than 1 then set it to 0 for displaying
    //items without limit
    } else if ($this->limit < 1) {
    $this->limit = 0;
    }
    }
    private function getNumPages() {
    //If limit is set to 0 or set to number bigger then total items count
    //display all in one page
    if (($this->limit < 1) || ($this->limit > $this->itemscount)) {
    $this->numpages = 1;
    } else {
    //Calculate rest numbers from dividing operation so we can add one
    //more page for this items
    $restItemsNum = $this->itemscount % $this->limit;
    //if rest items > 0 then add one more page else just divide items
    //by limit
    $restItemsNum > 0 ? $this->numpages = intval($this->itemscount / $this->limit) + 1 : $this->numpages = intval($this->itemscount / $this->limit);
    }
    }
    private function calculateOffset() {
    //Calculet offset for items based on current page number
    $this->offset = ($this->currentpage - 1) * $this->limit;
    }
    public function RenderPaginator() {
    $html = '';
    //Insert all in one div tag
    $html.= '<div>';
    //We need this form for sumbitting limit into URL via GET call
    $html.='<form id= "paginator" name="paginator" method="get" action="" >';
    $html.= '<ul class="nav">';
    $html.= '<li class="selected"><a href="#tab1">1</a></li>';
    $html.= '<li><a href="#tab2">2</a></li>';
    $html.= '<li><a href="#tab3">3</a></li>';
    $html.= '<li><a href="#tab4">4</a></li>';
    $html.= '<li><a href="#tab5">5</a></li>';
    $html.= '<li><a href="#tab6">6</a></li>';
    $html.= '</ul>';
    //When limit is changed - just submit form
    /*$html.= '<select name="limit" onchange="javascript:document.forms.paginator.submit()">';
    $html.= '<option value="10" ';
    if ($this->limit == 10) {
    $html.='selected';
    } $html.='>10</option>';
    $html.= '<option value="20" ';
    if ($this->limit == 20) {
    $html.='selected';
    } $html.='>20</option>';
    $html.= '<option value="30" ';
    if ($this->limit == 30) {
    $html.='selected';
    } $html.='>30</option>';
    $html.= '<option value="50" ';
    if ($this->limit == 50) {
    $html.='selected';
    } $html.='>50</option>';
    $html.= '<option value="100" ';
    if ($this->limit == 100) {
    $html.='selected';
    } $html.='>100</option>';
    $html.= '<option value="500" ';
    if ($this->limit == 500) {
    $html.='selected';
    } $html.='>500</option>';
    $html.= '<option value="0" ';
    if ($this->limit == 0) {
    $html.='selected';
    } $html.='>All</option>';
    $html.='</select>';*/
    $html.='</form>';
    
    $html.= '</div>';
    return $html;
    }
    //For using from controller
    public function getLimit() {
    return $this->limit;
    }
    //For using from controller
    public function getOffset() {
    return $this->offset;
    }
}
