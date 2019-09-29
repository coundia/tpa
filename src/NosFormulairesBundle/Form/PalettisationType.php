<?php

namespace NosFormulairesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class PalettisationType extends AbstractType
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
        ->add('registrepalettisation', CollectionType::class, array(
            'entry_type' => RegistrePalettisationType::class,
            'entry_options' => array('label' => false),
        ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'NosFormulairesBundle\Entity\Palettisation'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'nosformulairesbundle_palettisation';
    }


}
