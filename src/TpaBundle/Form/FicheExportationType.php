<?php

namespace TpaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use TpaBundle\Repository\FicheExportationRepository;
use Doctrine\ORM\EntityRepository;

class FicheExportationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('numeroExporation')
        ->add('moyenUtilise')
        ->add('paysExportation', ChoiceType::class, array(
            'choices'=>array(
                'Europe'=>'Europe',
                'Afrique'=>'Afrique',
                'Amerique'=>'Amerique',
                'Autres'=>'Autres',
            )
         ))
        ->add('nomCompagnie')
        ->add('variete')
        ->add('idPalettisation',EntityType::class, array(
            'class' => 'TpaBundle:RegistrePalettisation',
            'query_builder'=> function(EntityRepository $er){
                    return $er->createQueryBuilder('u')
                            ->andWhere('u.statut=0') ;
            },
            'choice_label' => 'nPalette',
        ));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TpaBundle\Entity\FicheExportation'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'tpabundle_ficheexportation';
    }


}
