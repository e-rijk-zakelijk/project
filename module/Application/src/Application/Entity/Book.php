<?php

    namespace Application\Entity;
    
    use Doctrine\ORM\Mapping as ORM;
    
    /**
     * Book
     *
     * @ORM\Table(name="book")
     * @ORM\Entity
     */
    class Book
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
         * @var boolean
         *
         * @ORM\Column(name="language_id", type="boolean", nullable=false)
         */
        private $languageId;
    
        /**
         * @var boolean
         *
         * @ORM\Column(name="category_id", type="boolean", nullable=false)
         */
        private $categoryId;
    
        /**
         * @var string
         *
         * @ORM\Column(name="title", type="string", length=255, nullable=false)
         */
        private $title;
    
        /**
         * @var string
         *
         * @ORM\Column(name="description", type="text", nullable=false)
         */
        private $description;
    
        /**
         * @var integer
         *
         * @ORM\Column(name="isbn", type="integer", nullable=false)
         */
        private $isbn;
    
        /**
         * @var string
         *
         * @ORM\Column(name="image", type="string", length=255, nullable=false)
         */
        private $image;
    
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
         * Set languageId
         *
         * @param boolean $languageId
         * @return Book
         */
        public function setLanguageId($languageId)
        {
            $this->languageId = $languageId;
    
            return $this;
        }
    
        /**
         * Get languageId
         *
         * @return boolean 
         */
        public function getLanguageId()
        {
            return $this->languageId;
        }
    
        /**
         * Set categoryId
         *
         * @param boolean $categoryId
         * @return Book
         */
        public function setCategoryId($categoryId)
        {
            $this->categoryId = $categoryId;
    
            return $this;
        }
    
        /**
         * Get categoryId
         *
         * @return boolean 
         */
        public function getCategoryId()
        {
            return $this->categoryId;
        }
    
        /**
         * Set title
         *
         * @param string $title
         * @return Book
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
         * Set description
         *
         * @param string $description
         * @return Book
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
         * Set isbn
         *
         * @param integer $isbn
         * @return Book
         */
        public function setIsbn($isbn)
        {
            $this->isbn = $isbn;
    
            return $this;
        }
    
        /**
         * Get isbn
         *
         * @return integer 
         */
        public function getIsbn()
        {
            return $this->isbn;
        }
    
        /**
         * Set image
         *
         * @param string $image
         * @return Book
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
    }
