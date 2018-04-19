<?php

namespace TpaBundle\Form;

use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\DateTime;

class ProducteurType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom')->add('prenom')->add('statutLegal')->add('ninea')->add('siegeSocial')->add('ville')->add('departement')->add('commune')->add('arrondissement')->add('village')->add('numTel')->add('numFixe')->add('fax')->add('email')->add('addresse')->add('prenomRep')->add('nomRep')->add('addresseRep')->add('fonctionRep')->add('mobileRep_')->add('fixeRep')->add('faxeRep')->add('emailRep')->add('nomManager')->add('prenomManager')->add('titreManager')->add('telManager')->add('emailManager')->add('production')->add('conditionnement')->add('exportation')->add('prestation')->add('vulgarisation')->add('bordChamp')->add('europe')->add('regie')->add('enStation')->add('autresr');
        $builder->add('region', ChoiceType::class, array(
           'choices'=>array(
               'Dakar'=>'Dakar',
               'Diourbel'=>'diourbel',
               'Fatick'=>'Fatick',
               'Kaffrine'=>'Kaffrine',
               'Kaolack'=>'Kaolack',
               'Kédougou'=>'Kédougou',
               'Kolda'=>'Kolda',
               'Louga'=>'Louga',
               'MAtam'=>'Matam',
               'Saint-Louis'=>'Saint-Louis',
               'Sédhiou'=>'Sédhiou',
               'Tamabcounda'=>'Tambacounda',
               'Thiès'=>'Thiès',
               'Ziguinchor'=>'Zigunchor'
           )

        ));
//        $builder->add('date', DateTime::class);



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
