<?php
namespace ISpySi\UserBundle\Form\Type {
    
use Symfony\Component\Form\FormBuilder;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends BaseType {
    
    public function buildForm(FormBuilder $builder, array $options){
        parent::buildForm($builder, $options);
        
        //any extra properties are added here
        $builder->add('firstname');
        $builder->add('surname');
        $builder->add('dob');
        
    }
    
    public function getName(){
        return 'ispysi_user_registration';
    }
}
    
}


?>
