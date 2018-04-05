<?php

namespace TpaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProducteurType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom')->add('prenom')->add('statutLegal')->add('ninea')->add('siegeSocial')->add('region')->add('ville')->add('departement')->add('commune')->add('arrondissement')->add('village')->add('numTel')->add('numFixe')->add('fax')->add('email')->add('addresse')->add('prenomRep')->add('nomRep')->add('addresseRep')->add('fonctionRep')->add('mobileRep_')->add('fixeRep')->add('faxeRep')->add('emailRep')->add('nomManager')->add('prenomManager')->add('titreManager')->add('telManager')->add('emailManager');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TpaBundle\Entity\Producteur'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'tpabundle_producteur';
    }


}
