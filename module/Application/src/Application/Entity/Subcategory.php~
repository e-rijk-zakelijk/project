<?php

    namespace Application\Entity;
    
    use Doctrine\ORM\Mapping as ORM;
    
    /**
     * Subcategory
     *
     * @ORM\Table(name="subcategory")
     * @ORM\Entity
     */
    class Subcategory
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
         * @var integer
         *
         * @ORM\ManyToOne( targetEntity="Category", inversedBy="subcategories" )
         */
        private $category;
    
        /**
         * @var string
         *
         * @ORM\Column(name="name", type="string", length=255, nullable=false)
         */
        private $name;
    
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
         * Set categoryId
         *
         * @param integer $categoryId
         * @return Subcategory
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
         * Set name
         *
         * @param string $name
         * @return Subcategory
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
         * @param \Application\Entity\Category $category
         * @return Subcategory
         */
        public function setCategory(\Application\Entity\Category $category = null)
        {
            $this->category = $category;
    
            return $this;
        }
    
        /**
         * Get category
         *
         * @return \Application\Entity\Category 
         */
        public function getCategory()
        {
            return $this->category;
        }
    }
