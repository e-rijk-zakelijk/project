<?php

    namespace Application\Entity;
    
    use Doctrine\ORM\Mapping as ORM;
    
    /**
     * Reaction
     *
     * @ORM\Table(name="reaction")
     * @ORM\Entity
     */
    class Reaction
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
         * @ORM\ManyToOne( targetEntity="Topic", inversedBy="reactions" )
         */
        private $topic;
    
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
         * Set topic
         *
         * @param \Application\Entity\Topic $topic
         * @return Reaction
         */
        public function setTopic(\Application\Entity\Topic $topic = null)
        {
            $this->topic = $topic;
    
            return $this;
        }
    
        /**
         * Get topic
         *
         * @return \Application\Entity\Topic 
         */
        public function getTopic()
        {
            return $this->topic;
        }
    }
