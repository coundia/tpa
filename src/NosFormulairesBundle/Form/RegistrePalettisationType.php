<?php

namespace NosFormulairesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class RegistrePalettisationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('date', DateType::class, array(
            'widget' => 'single_text',
            'required' => false
        ))
        ->add('nPalette',NumberType::class, array(
            'required' => false
        ))
        ->add('nbreCartons',NumberType::class, array(
            'required' => false
        ))
        ->add('codeLot',EntityType::class, array(
            'class' => 'NosFormulairesBundle:Lot',
            'choice_label' => 'codeLot',
        ))
        ->add('totalCartons',NumberType::class, array(
            'required' => false
        ))
        ->add('heureEntreeChFroide',TextType::class, array(
            'required' => false
        ))
        ->add('heureSortieChFroide',TextType::class, array(
            'required' => false
        ))
        ->add('destinataire',TextType::class, array(
            'required' => false
        ))
        ->add('parckingListe',TextType::class, array(
            'required' => false
        ))
        ->add('paragraphe',TextType::class, array(
            'required' => false
        ))
        ->add('produitCalibre',TextType::class, array(
            'required' => false
        ));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'NosFormulairesBundle\Entity\RegistrePalettisation'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'nosformulairesbundle_registrepalettisation';
    }


}
