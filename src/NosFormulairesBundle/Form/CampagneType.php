<?php

namespace NosFormulairesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class CampagneType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('campagne')->add('variete')->add('nOrdre')
        ->add('zoneProduction',EntityType::class, array(
            'class' => 'NosFormulairesBundle:SiteProduction',
            'choice_label' => 'localisation',
        ))
        ->add('codeParcelle')->add('poidsBrut')->add('nomChauffeur')->add('heureDepart')->add('heureArrivee')->add('immatriculationCamion')->add('nomResponsableParcelle')->add('nombreCageots')->add('poidsNet')
        ->add('dateReception', DateType::class, array(
            'widget' => 'single_text',
        ));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'NosFormulairesBundle\Entity\Campagne'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'nosformulairesbundle_campagne';
    }


}
