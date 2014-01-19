<?php

    namespace Application\Entity;
    
    use Doctrine\ORM\Mapping as ORM;
    
    /**
     * Account
     *
     * @ORM\Table(name="account", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_8D93D649F85E0677", columns={"username"}), @ORM\UniqueConstraint(name="UNIQ_8D93D649E7927C74", columns={"email"})})
     * @ORM\Entity
     */
    class Account
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
         * @ORM\Column(name="username", type="string", length=255, nullable=true)
         */
        private $username;
    
        /**
         * @var string
         *
         * @ORM\Column(name="email", type="string", length=255, nullable=true)
         */
        private $email;
    
        /**
         * @var string
         *
         * @ORM\Column(name="password", type="string", length=128, nullable=false)
         */
        private $password;
    
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
         * Set username
         *
         * @param string $username
         * @return Account
         */
        public function setUsername($username)
        {
            $this->username = $username;
    
            return $this;
        }
    
        /**
         * Get username
         *
         * @return string 
         */
        public function getUsername()
        {
            return $this->username;
        }
    
        /**
         * Set email
         *
         * @param string $email
         * @return Account
         */
        public function setEmail($email)
        {
            $this->email = $email;
    
            return $this;
        }
    
        /**
         * Get email
         *
         * @return string 
         */
        public function getEmail()
        {
            return $this->email;
        }
    
        /**
         * Set password
         *
         * @param string $password
         * @return Account
         */
        public function setPassword($password)
        {
            $this->password = $password;
    
            return $this;
        }
    
        /**
         * Get password
         *
         * @return string 
         */
        public function getPassword()
        {
            return $this->password;
        }
    }
