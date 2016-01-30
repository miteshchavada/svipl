<?php

namespace Acme\StoreBundle\Entity;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Type;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 */
class Product
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $userid;
    
    private $name;

    /**
     * @var float
     */
    private $price;
    private $status;
    protected $category;

    /**
     * @var string
     */
    private $description;
    private $image; 
    protected $currentpage;
    //limit items on one page
    protected $limit;
    //total number of pages that will be generated
    protected $numpages;
    //total items loaded from database
    protected $itemscount;
    //starting item number to be shown on page
    protected $offset;
    function __construct($itemscount=0) {
    //set total items count from controller
    $this->itemscount = $itemscount;
    //get params from request URL
    $this->getParamsFromRequest();
    //Calculate number of pages total
    $this->getNumPages();
    //Calculate first shown item on current page
    $this->calculateOffset();
    }
    public $path;
    public function upload()
    {
        // the file property can be empty if the field is not required
        if (null === $this->image) {
            return;
        }

        // we use the original file name here but you should
        // sanitize it at least to avoid any security issues

        // move takes the target directory and then the target filename to move to
        $this->file->move($this->getUploadRootDir(), $this->image->getClientOriginalName());

        // set the path property to the filename where you'ved saved the file
        $this->path = $this->image->getClientOriginalName();

        // clean up the file property as you won't need it anymore
        $this->file = null;
    }
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
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Product
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getUserid()
    {
        return $this->userid;
    }
    /**
     * Set name
     *
     * @param string $name
     * @return Product
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
     * Set category
     *
     * @param string $name
     * @return Product
     */
    public function setCategory($category)
    {
        $this->category = $category;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getCategory()
    {
        return $this->category;
    }
    /**
     * Set price
     *
     * @param float $price
     * @return Product
     */
    public function setPrice($price)
    {
        $this->price = $price;
    
        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set status
     *
     * @param float $status
     * @return integer
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set description
     *
     * @param string $description
     * @return Product
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
     * Set image
     *
     * @param \Acme\StoreBundle\Entity\Image $image
     * @return Product
     */
    public function setImage($image)
    {
        $this->image = $image;
    
        return $this;
    }

    /**
     * Get image
     *
     * @return \Acme\ImageBundle\Entity\Image 
     */
    public function getImage()
    {
        return $this->image;
    }
    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('name', new NotBlank(array('message'=>'please enter your name')));
        $metadata->addPropertyConstraint('category', new Assert\GreaterThan(0,array('message'=>'Please Select Category')));
        $metadata->addPropertyConstraint('price', new NotBlank(array('message'=>'please enter your price')));
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
   
    //Returns HTML string with paginator elements - will be used from Controller
    public function RenderPaginator() {
    $html = '';
    //Insert all in one div tag
    $html.= '<div>';
    //We need this form for sumbitting limit into URL via GET call
    $html.='<form id= "paginator" name="paginator" method="get" action="" >';
    //When limit is changed - just submit form
    $html.= '<select name="limit" onchange="javascript:document.forms.paginator.submit()">';
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
    $html.='</select>';
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
