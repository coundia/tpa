<?php
namespace UserBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('roles', ChoiceType::class, array(
                'attr' => array('class' => 'form-control',
                    'style' => 'margin:5px 0;'),
                'choices' =>
                    array
                    (
                        'ROLE_ADMIN' => 'ROLE_ADMIN',
                        'ROLE_PRODUCTEUR' => 'ROLE_PRODUCTEUR',
                        'ROLE_EXPORTATEUR' => 'ROLE_EXPORTATEUR',
                        'ROLE_CLIENT' => 'ROLE_CLIENT',
                        'ROLE_CONTROLEUR' => 'ROLE_CONTROLEUR',
                        'ROLE_USER' => 'ROLE_USER',
                        'ROLE_INSPECTEUR'=>'ROLE_INSPECTEUR',
                        'ROLE_DPV' => 'ROLE_DPV'
                    ) ,
                'multiple' => true,
                'required' => true,
            )
        );
        //$builder->remove('plainPassword');
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
// Or for Symfony < 2.8
// return 'fos_user_registration';
    }
    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }
// For Symfony 2.x
    public function getName()
    {
        return $this->getBlockPrefix();
    }
}