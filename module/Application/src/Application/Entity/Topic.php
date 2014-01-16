<?php

    namespace Application\Entity;
    
    use Doctrine\ORM\Mapping as ORM;
    use Zend\Form\Annotation;
    
    /**
     * Topic
     *
     * @ORM\Table(name="topic")
     * @ORM\Entity(repositoryClass="Application\Repository\TopicRepository")
     * 
     * @Annotation\Hydrator("Zend\Stdlib\Hydrator\ObjectProperty")
     * @Annotation\Name("Topic")
     */
    class Topic
    {
        /**
         * @var integer
         *
         * @ORM\Column(name="id", type="integer", nullable=false)
         * @ORM\Id
         * @ORM\GeneratedValue(strategy="IDENTITY")
         * 
         * @Annotation\Exclude()
         */
        private $id;
        
        /**
         * @var integer
         *
         * @ORM\Column(name="account_id", type="integer", nullable=true)
         */
        private $accountId;
        
        /**
         * @var boolean
         *
         * @ORM\Column(name="stick", type="boolean", nullable=true)
         * 
         * @Annotation\Type("Zend\Form\Element\Checkbox")
         * @Annotation\Options({"label":"Stick:"})
         */
        private $stick;
        
        /**
         * @var string
         *
         * @ORM\Column(name="title", type="string", nullable=false)
         * 
         * @Annotation\Type("Zend\Form\Element\Text")
         * @Annotation\Required({"required":"true" })
         * @Annotation\Filter({"name":"StripTags"})
         * @Annotation\Validator({"name":"StringLength", "options":{"min":"1"}})
         * @Annotation\Options({"label":"Title:"})
         */
        private $title;
        
        /**
         * @var string
         *
         * @ORM\Column(name="message", type="string", nullable=false)
         *
         * @Annotation\Type("Zend\Form\Element\Textarea")
         * @Annotation\Required({"required":"true" })
         * @Annotation\Validator({"name":"StringLength", "options":{"min":"1"}})
         * @Annotation\Options({"label":"Message:"})
         * @Annotation\Attributes({"id":"message", "placeholder":"Plaats uw reactie..", "rows":"8"})
         */
        private $message;
    
        /**
         * @var integer
         *
         * @ORM\ManyToOne( targetEntity="Forum", inversedBy="topics" )
         */
        private $forum;
        
        /**
         * @ORM\OneToMany( targetEntity="Reaction", mappedBy="topic" )
         */
//         private $reactions;

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
         * Set forum
         *
         * @param \Application\Entity\Forum $forum
         * @return Topic
         */
        public function setForum(\Application\Entity\Forum $forum = null)
        {
            $this->forum = $forum;
    
            return $this;
        }
    
        /**
         * Get forum
         *
         * @return \Application\Entity\Forum 
         */
        public function getForum()
        {
            return $this->forum;
        }
        
        /**
         * Constructor
         */
        public function __construct()
        {
            $this->reactions = new \Doctrine\Common\Collections\ArrayCollection();
        }
    
        /**
         * Add reactions
         *
         * @param \Application\Entity\Reaction $reactions
         * @return Topic
         */
        public function addReaction(\Application\Entity\Reaction $reactions)
        {
            $this->reactions[] = $reactions;
    
            return $this;
        }
    
        /**
         * Remove reactions
         *
         * @param \Application\Entity\Reaction $reactions
         */
        public function removeReaction(\Application\Entity\Reaction $reactions)
        {
            $this->reactions->removeElement($reactions);
        }
    
        /**
         * Get reactions
         *
         * @return \Doctrine\Common\Collections\Collection 
         */
        public function getReactions()
        {
            return $this->reactions;
        }
    
        /**
         * Set accountId
         *
         * @param integer $accountId
         * @return Topic
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
         * Set title
         *
         * @param varchar $title
         * @return Topic
         */
        public function setStick($stick)
        {
        	$this->stick = $stick;
        
        	return $this;
        }
        
        /**
         * Get accountId
         *
         * @return integer
         */
        public function getStick()
        {
        	return $this->stick;
        }
        
        /**
         * Set title
         *
         * @param varchar $title
         * @return Topic
         */
        public function setTitle($title)
        {
        	$this->title = $title;
        
        	return $this;
        }
        
        /**
         * Get accountId
         *
         * @return integer
         */
        public function getTitle()
        {
        	return $this->title;
        }
        
        /**
         * Set title
         *
         * @param varchar $title
         * @return Topic
         */
        public function setMessage($message)
        {
        	$this->message = $message;
        
        	return $this;
        }
        
        /**
         * Get accountId
         *
         * @return integer
         */
        public function getMessage()
        {
        	return $this->message;
        }
    }
