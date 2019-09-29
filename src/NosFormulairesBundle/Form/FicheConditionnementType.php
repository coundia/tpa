<?php

namespace NosFormulairesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class FicheConditionnementType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('campagne',EntityType::class, array(
            'class' => 'NosFormulairesBundle:Campagne',
            'choice_label' => 'campagne',
        ))
        ->add('lot',CollectionType::class, array(
            'entry_type' => LotType::class,
            'entry_options' => array('label' => false),
        ))
        ->add('detailslot', CollectionType::class, array(
            'entry_type' => DetailLotType::class,
            'entry_options' => array('label' => false),
        ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'NosFormulairesBundle\Entity\FicheConditionnement'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'nosformulairesbundle_ficheconditionnement';
    }


}
