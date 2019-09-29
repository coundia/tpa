<?php

namespace TpaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ficheOperateurType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('tableTravail')->add('chambreFroide')->add('temperature')->add('conformite')->add('emballage')->add('sanitaire')->add('securite')->add('pharmacie')->add('lavage')->add('installation')->add('marcheEnAvant')->add('qualiteCond')->add('docArchive')->add('MaterielAutoControle')->add('responsableQualite')->add('niveauResponsable')->add('marquageEmballage')->add('uniteTraitementNTMP')->add('paletteEmbTraite')->add('paletteEmbRecupOui');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TpaBundle\Entity\ficheOperateur'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'tpabundle_ficheoperateur';
    }


}
