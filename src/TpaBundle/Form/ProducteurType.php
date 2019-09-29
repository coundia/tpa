<?php

namespace TpaBundle\Form;

use Doctrine\DBAL\Types\TextType;
use Doctrine\ORM\Query\Expr\Select;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
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
        $builder->add('nom')
            ->add('prenom')
            //->add('statutLegal')
            ->add('ninea')
            ->add('siegeSocial')
//            ->add('ville')
//            ->add('departement')
//            ->add('commune')
//            ->add('arrondissement')
           // ->add('village')
            ->add('numTel')->add('numFixe')
            //->add('faxerep')
            ->add('email', EmailType::class)
            //->add('addresse')
            ->add('prenomRep')->add('nomRep')
            //->add('addresseRep')
            ->add('fonctionRep')->add('mobileRep_')
            //->add('fixeRep')->add('faxeRep')
            ->add('emailRep', EmailType::class)
//            ->add('nomManager')->add('prenomManager')->add('titreManager')->add('telManager')
//            ->add('emailManager', EmailType::class)
            ->add('noteproduction')
           // ->add('conditionnement',CheckboxType::class)->add('exportation',CheckboxType::class)
            //->add('noteprestation')
            ->add('vulgarisation',CheckboxType::class)
           // ->add('bordChamp',CheckboxType::class)
            ->add('regie',CheckboxType::class )
            //->add('enStation',CheckboxType::class)
            ->add('noteexportation');
            //->add('notecond');
        /*$builder->add('region', ChoiceType::class, array(
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
           )*/

//        ));
$builder->add('europe', ChoiceType::class, array(
           'choices'=>array(
                'FRANCE'=>'France',
                'Hollande'=>'Hollande',
               ' Angleterre'=>'Angleterre',
               ' Allemagne'=>'Allemagne',
                'ITALIE'=>'Italie',
                'ESPAGNE'=>'Espagne',
                'Belgique'=>'Belgique',
                'RUSSIE'=>'Russie',
                'AUTRE'=>'Autre'

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
