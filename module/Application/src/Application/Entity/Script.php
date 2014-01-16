<?php

    namespace Application\Entity;
    
    use Doctrine\ORM\Mapping as ORM;
    use Zend\Form\Annotation;
    
    /**
     * Reaction
     *
     * @ORM\Table(name="script")
     * @ORM\Entity(repositoryClass="Application\Repository\ScriptRepository")
     * 
     * @Annotation\Hydrator("Zend\Stdlib\Hydrator\ObjectProperty")
     * @Annotation\Name("Script")
     */
    class Script
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
         * @var text
         *
         * @ORM\Column(name="content", type="text", nullable=false)
         *
         * @Annotation\Type("Zend\Form\Element\Textarea")
         * @Annotation\Required({"required":"true" })
         * @Annotation\Validator({"name":"StringLength", "options":{"min":"1"}})
         * @Annotation\Options({"label":"Content:"})
         */
        private $content;
        
        
//         private $status;

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
         * @param varchar $title
         * @return Script
         */
        public function setTitle($title)
        {
        	$this->title = $title;
        
        	return $this;
        }
        
        /**
         * Get accountId
         *
         * @return Script
         */
        public function getTitle()
        {
        	return $this->title;
        }
        
        /**
         * Set title
         *
         * @param text $content
         * @return Script
         */
        public function setContent($content)
        {
            $this->content = $content;
            
            return $this;
        }
        
        /**
         * Get content
         *
         * @return Script
         */
        public function getContent()
        {
            return $this->content;
        }
    }
