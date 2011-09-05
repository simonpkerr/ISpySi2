<?php
namespace ISpySi\UserBundle\Entity {
    
    use FOS\UserBundle\Entity\User as BaseUser;
    use Doctrine\ORM\Mapping as ORM;
    use Symfony\Component\Validator\Constraints as Assert;
    
    class User extends BaseUser {
        
        /**
         * @ORM\Id
         * @ORM\Column(type="integer")
         * @ORM\GeneratedValue(strategy="AUTO")
         */
        protected $id;
        
//        /**
//         * @ORM\Column(type="string", length="65")
//         *
//         * @Assert\NotBlank(message="Please enter your name.", groups={"Registration", "Profile"})
//         * @Assert\MinLength(limit="3", message="The name is too short.", groups={"Registration", "Profile"})
//         * @Assert\MaxLength(limit="65", message="The name is too long.", groups={"Registration", "Profile"})
//         */
        protected $firstname;
        
//        /**
//         * @ORM\Column(type="string", length="65")
//         *
//         * @Assert\NotBlank(message="Please enter your name.", groups={"Registration", "Profile"})
//         * @Assert\MinLength(limit="3", message="The name is too short.", groups={"Registration", "Profile"})
//         * @Assert\MaxLength(limit="65", message="The name is too long.", groups={"Registration", "Profile"})
//         */
        protected $surname;
        
//        /**
//         * @ORM\Column(type="date")
//         *
//         * @Assert\NotBlank(message="Please enter your name.", groups={"Registration", "Profile"})
//         * @Assert\Date(message="Please enter a date.", groups={"Registration", "Profile"})
//         */
        protected $dob;
        
        public function __construct(){
            parent::__construct();
        }
        

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
         * Set firstname
         *
         * @param string $firstname
         */
        public function setFirstname($firstname)
        {
            $this->firstname = $firstname;
        }

        /**
         * Get firstname
         *
         * @return string 
         */
        public function getFirstname()
        {
            return $this->firstname;
        }
    
    
    
    

        /**
         * Set surname
         *
         * @param string $surname
         */
        public function setSurname($surname)
        {
            $this->surname = $surname;
        }

        /**
         * Get surname
         *
         * @return string 
         */
        public function getSurname()
        {
            return $this->surname;
        }

        /**
         * Set dob
         *
         * @param date $dob
         */
        public function setDob($dob)
        {
            $this->dob = $dob;
        }

        /**
         * Get dob
         *
         * @return date 
         */
        public function getDob()
        {
            return $this->dob;
        }
    }
}