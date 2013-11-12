<?php

    namespace Application\Entity;
    
    use Doctrine\ORM\Mapping as ORM;
    
    /**
     * Category
     *
     * @ORM\Table(name="category")
     * @ORM\Entity
     */
    class Category
    {
        /**
         * @var integer
         *
         * @ORM\Column(name="id", type="integer", nullable=false)
         * @ORM\Id
         * @ORM\GeneratedValue(strategy="IDENTITY")
         */
        private $id;
    
        /**
         * @var string
         *
         * @ORM\Column(name="name", type="string", length=255, nullable=false)
         */
        private $name;
        
        /**
         * @ORM\OneToMany( targetEntity="Subcategory", mappedBy="category" )
         */
        private $subcategories;
    
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
         * @return Category
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
     * Constructor
     */
    public function __construct()
    {
        $this->subcategories = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add subcategories
     *
     * @param \Application\Entity\Subcategory $subcategories
     * @return Category
     */
    public function addSubcategory(\Application\Entity\Subcategory $subcategories)
    {
        $this->subcategories[] = $subcategories;

        return $this;
    }

    /**
     * Remove subcategories
     *
     * @param \Application\Entity\Subcategory $subcategories
     */
    public function removeSubcategory(\Application\Entity\Subcategory $subcategories)
    {
        $this->subcategories->removeElement($subcategories);
    }

    /**
     * Get subcategories
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSubcategories()
    {
        return $this->subcategories;
    }
}
