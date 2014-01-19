<?php

    namespace Application\Entity;
    
    use Doctrine\ORM\Mapping as ORM;
    
    /**
     * Language
     *
     * @ORM\Table(name="language")
     * @ORM\Entity
     */
    class Language
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
         * Get id
         *
         * @return integer 
         */
        public function getId()
        {
            return $this->id;
        }
    }
