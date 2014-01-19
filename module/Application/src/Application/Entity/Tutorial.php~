<?php

    namespace Application\Entity;
    
    use Doctrine\ORM\Mapping as ORM;
    
    /**
     * Tutorial
     *
     * @ORM\Table(name="tutorial")
     * @ORM\Entity
     */
    class Tutorial
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
         * @ORM\Column(name="title", type="string", length=255, nullable=false)
         */
        private $title;
    
        /**
         * @var string
         *
         * @ORM\Column(name="content", type="text", nullable=false)
         */
        private $content;
    
        /**
         * @var string
         *
         * @ORM\Column(name="status", type="string", length=255, nullable=false)
         */
        private $status;
    
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
         * @return Tutorial
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
         * Set content
         *
         * @param string $content
         * @return Tutorial
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
         * Set status
         *
         * @param string $status
         * @return Tutorial
         */
        public function setStatus($status)
        {
            $this->status = $status;
    
            return $this;
        }
    
        /**
         * Get status
         *
         * @return string 
         */
        public function getStatus()
        {
            return $this->status;
        }
    }
