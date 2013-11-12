<?php

    namespace Application\Entity;
    
    use Doctrine\ORM\Mapping as ORM;
    
    /**
     * Topic
     *
     * @ORM\Table(name="topic")
     * @ORM\Entity
     */
    class Topic
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
         * @ORM\ManyToOne( targetEntity="Forum", inversedBy="topics" )
         */
        private $forum;
        
        /**
         * @ORM\OneToMany( targetEntity="Reaction", mappedBy="topic" )
         */
        private $reactions;
    
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
    }
