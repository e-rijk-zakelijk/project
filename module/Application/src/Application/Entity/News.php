<?php
    
    namespace Application\Entity;
    
    use Doctrine\ORM\Mapping as ORM;
    
    /**
     * News
     *
     * @ORM\Table(name="news")
     * @ORM\Entity
     */
    class News
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
         * @ORM\Column(name="introduction", type="text", nullable=false)
         */
        private $introduction;
    
        /**
         * @var string
         *
         * @ORM\Column(name="content", type="text", nullable=false)
         */
        private $content;
    
        /**
         * @var string
         *
         * @ORM\Column(name="source", type="string", length=255, nullable=false)
         */
        private $source;
    
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
         * Set categoryId
         *
         * @param boolean $categoryId
         * @return News
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
         * @return News
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
         * Set introduction
         *
         * @param string $introduction
         * @return News
         */
        public function setIntroduction($introduction)
        {
            $this->introduction = $introduction;
    
            return $this;
        }
    
        /**
         * Get introduction
         *
         * @return string 
         */
        public function getIntroduction()
        {
            return $this->introduction;
        }
    
        /**
         * Set content
         *
         * @param string $content
         * @return News
         */
        public function setContent($content)
        {
            $this->content = $content;
    
            return $this;
        }
    
        /**
         * Get content
         *
         * @return string 
         */
        public function getContent()
        {
            return $this->content;
        }
    
        /**
         * Set source
         *
         * @param string $source
         * @return News
         */
        public function setSource($source)
        {
            $this->source = $source;
    
            return $this;
        }
    
        /**
         * Get source
         *
         * @return string 
         */
        public function getSource()
        {
            return $this->source;
        }
    
        /**
         * Set image
         *
         * @param string $image
         * @return News
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