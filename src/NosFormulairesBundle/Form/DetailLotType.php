<?php

namespace NosFormulairesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class DetailLotType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('calibre',TextType::class, array(
            'required' => false
        ))
        ->add('nombreCarton',IntegerType::class, array(
            'required' => false
        ))
        ->add('poidsNet',NumberType::class, array(
            'required' => false
        ))
        ->add('nPalette',IntegerType::class, array(
            'required' => false
        ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'NosFormulairesBundle\Entity\DetailLot'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'nosformulairesbundle_detaillot';
    }


}
