<?php

    namespace Application\Entity;
    
    use Doctrine\ORM\Mapping as ORM;
    
    /**
     * Forum
     *
     * @ORM\Table(name="forum")
     * @ORM\Entity
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
    }
