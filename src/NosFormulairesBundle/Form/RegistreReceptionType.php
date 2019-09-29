<?php

namespace NosFormulairesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class RegistreReceptionType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('parcelleOrigine',TextType::class, array(
            'required' => false
        ))
        ->add('dateRecolte', DateType::class, array(
            'widget' => 'single_text',
            'required' => false
        ))
        ->add('variete',TextType::class, array(
            'required' => false
        ))
        ->add('nombreCageots',NumberType::class, array(
            'required' => false
        ))
        ->add('poidsBrut',NumberType::class, array(
            'required' => false
        ))
        ->add('poidsNet',NumberType::class, array(
            'required' => false
        ))
        ->add('codeAttribue',TextType::class, array(
            'required' => false
        ));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'NosFormulairesBundle\Entity\RegistreReception'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'nosformulairesbundle_registrereception';
    }


}
