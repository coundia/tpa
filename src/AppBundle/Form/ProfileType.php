<?php
namespace AppBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ProfileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('phoneNumb');
    }
    public function getParent()
    {
        return 'FOSUserBundle\Form\Type\ProfileType';
    }
    public function getBlockPrefix()
    {
        return 'app_user_profile';
    }
}