<?php

namespace TpaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class InscriptionType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('producteur',CollectionType::class, array(
            'entry_type' => ProducteurType::class,
            'entry_options' => array('label' => false),
        ))
        ->add('qualite',CollectionType::class, array(
            'entry_type' => GestionQualiteType::class,
            'entry_options' => array('label' => false),
        ))
        ->add('certificat', CollectionType::class, array(
            'entry_type' => CertificatType::class,
            'entry_options' => array('label' => false),
        ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TpaBundle\Entity\Inscription'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'tpabundle_inscription';
    }


}
