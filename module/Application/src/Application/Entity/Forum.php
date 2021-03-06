<?php

    namespace Application\Entity;
    
    use Doctrine\ORM\Mapping as ORM;
    use Zend\Form\Annotation;
    
    /**
     * Forum
     *
     * @ORM\Table(name="forum")
     * @ORM\Entity
     * 
     * @Annotation\Hydrator("Zend\Stdlib\Hydrator\ObjectProperty")
     * @Annotation\Name("Forum")
     */
    class Forum
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
         * @ORM\Column(name="account_id", type="integer", nullable=false)
         */
        private $accountId;
        
        /**
         * @ORM\Column(name="category_id", type="integer", nullable=false)
         */
        private $categoryId;
        
        /**
         * @var string
         *
         * @ORM\Column(name="name", type="string", nullable=false)
         *
         * @Annotation\Type("Zend\Form\Element\Text")
         * @Annotation\Required({"required":"true" })
         * @Annotation\Filter({"name":"StripTags"})
         * @Annotation\Validator({"name":"StringLength", "options":{"min":"1"}})
         * @Annotation\Options({"label":"Name:"})
         */
        private $name;
        
        /**
         * @ORM\OneToMany( targetEntity="Topic", mappedBy="forum" )
         */
        private $topics;
    
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
         * @param varchar $name
         * @return Forum
         */
        public function setName($name)
        {
        	$this->name = $name;
        
        	return $this;
        }
        
        /**
         * Get name
         *
         * @return integer
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
            $this->topics = new \Doctrine\Common\Collections\ArrayCollection();
        }
    
        /**
         * Add topics
         *
         * @param \Application\Entity\Topic $topics
         * @return Forum
         */
        public function addTopic(\Application\Entity\Topic $topics)
        {
            $this->topics[] = $topics;
    
            return $this;
        }
    
        /**
         * Remove topics
         *
         * @param \Application\Entity\Topic $topics
         */
        public function removeTopic(\Application\Entity\Topic $topics)
        {
            $this->topics->removeElement($topics);
        }
    
        /**
         * Get topics
         *
         * @return \Doctrine\Common\Collections\Collection 
         */
        public function getTopics()
        {
            return $this->topics;
        }
    
        /**
         * Set accountId
         *
         * @param integer $accountId
         * @return Forum
         */
        public function setAccountId($accountId)
        {
            $this->accountId = $accountId;
    
            return $this;
        }
    
        /**
         * Get accountId
         *
         * @return integer 
         */
        public function getAccountId()
        {
            return $this->accountId;
        }
    
        /**
         * Set categoryId
         *
         * @param integer $categoryId
         * @return Forum
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
    }