<?php

namespace TpaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class CertificatType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('numero_cert')
        ->add('date_cert', DateType::class, array(
            'widget' => 'single_text',
            'required' => false,
            'label' => 'Date Certification'
        ))
        ->add('date_exp', DateType::class, array(
            'widget' => 'single_text',
            'required' => false,
            'label' => 'Date Expiration'
        ));
        //->add('certificat', FileType::class, array('label' => 'Brochure (PDF file)'));
       
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TpaBundle\Entity\Certificat'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'tpabundle_certificat';
    }


}
